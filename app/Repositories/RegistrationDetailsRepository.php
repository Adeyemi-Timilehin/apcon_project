<?php

namespace App\Repositories;

use App\Models\RegistrationDetails;
use App\Repositories\BaseRepository;

/**
 * Class RegistrationDetailsRepository
 * @package App\Repositories
 * @version June 1, 2021, 6:27 pm UTC
*/

class RegistrationDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'referee_name',
        'referee_email',
        'referee_phone',
        'referee_company',
        'school_attended',
        'school_completed',
        'letter_of_reference',
        'registration_document',
        'cac',
        'memorandum',
        'directors_details',
        'staff_details',
        'financial_report',
        'tax_clearance',
        'compliance_letter'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RegistrationDetails::class;
    }
}
