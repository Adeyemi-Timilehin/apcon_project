<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistrationDetailsRequest;
use App\Http\Requests\UpdateRegistrationDetailsRequest;
use App\Repositories\RegistrationDetailsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\RegistrationDetails;
use Illuminate\Http\Request;
use Flash;
use Response;

class RegistrationDetailsController extends AppBaseController
{
    /** @var  RegistrationDetailsRepository */
    private $registrationDetailsRepository;

    public function __construct(RegistrationDetailsRepository $registrationDetailsRepo)
    {
        $this->registrationDetailsRepository = $registrationDetailsRepo;
    }

    /**
     * Display a listing of the RegistrationDetails.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->user_type === 'admin') {
            $registrationDetails = $this->registrationDetailsRepository->all()->slice(1);
           
            return view('registration_details.index')
            ->with('registrationDetails', $registrationDetails);
        }

        return view('registration_details.index')
            ->with('registrationDetails',  RegistrationDetails::where('user_id',auth()->user()->id)->get());
    }

    /**
     * Show the form for creating a new RegistrationDetails.
     *
     * @return Response
     */
    public function create()
    {
        return view('registration_details.create');
    }

    /**
     * Store a newly created RegistrationDetails in storage.
     *
     * @param CreateRegistrationDetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistrationDetailsRequest $request)
    {
        if (\App\Models\RegistrationDetails::where('user_id', auth()->user()->id)->exists()) {
            Flash::error('Registration Details already registered.');
            return redirect(route('registrationDetails.index'));
        }

        $input = $request->all();

        foreach ($input as $key => $value) {
            if ($request->hasFile($key)) {
                $input[$key] = $this->getFilePath($request->file($key));
            }
        }

        $input['user_id'] = auth()->user()->id;

        $registrationDetails = $this->registrationDetailsRepository->create($input);

        Flash::success('Registration Details saved successfully.');

        return redirect(route('registrationDetails.index'));
    }

    public function getFilePath($fileData)
    {
        $file = $fileData;
        $destinationPath = public_path(). '/temp-image/';
        $filename = $file->getClientOriginalName();
        $image = time().random_int(1000,9999).$filename;
        $file->move($destinationPath, $image);
        $imgpath = '/temp-image/'.$image;

        return $imgpath;
    }

    /**
     * Display the specified RegistrationDetails.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registrationDetails = $this->registrationDetailsRepository->find($id);

        if (empty($registrationDetails)) {
            Flash::error('Registration Details not found');

            return redirect(route('registrationDetails.index'));
        }

        return view('registration_details.show')->with('registrationDetails', $registrationDetails);
    }

    /**
     * Show the form for editing the specified RegistrationDetails.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registrationDetails = $this->registrationDetailsRepository->find($id);

        if (empty($registrationDetails)) {
            Flash::error('Registration Details not found');

            return redirect(route('registrationDetails.index'));
        }

        return view('registration_details.edit')->with('registrationDetails', $registrationDetails);
    }

    /**
     * Update the specified RegistrationDetails in storage.
     *
     * @param int $id
     * @param UpdateRegistrationDetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistrationDetailsRequest $request)
    {
        $registrationDetails = $this->registrationDetailsRepository->find($id);

        if (empty($registrationDetails)) {
            Flash::error('Registration Details not found');

            return redirect(route('registrationDetails.index'));
        }

        $registrationDetails = $this->registrationDetailsRepository->update($request->all(), $id);

        Flash::success('Registration Details updated successfully.');

        return redirect(route('registrationDetails.index'));
    }

    /**
     * Remove the specified RegistrationDetails from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registrationDetails = $this->registrationDetailsRepository->find($id);

        if (empty($registrationDetails)) {
            Flash::error('Registration Details not found');

            return redirect(route('registrationDetails.index'));
        }

        $this->registrationDetailsRepository->delete($id);

        Flash::success('Registration Details deleted successfully.');

        return redirect(route('registrationDetails.index'));
    }
}
