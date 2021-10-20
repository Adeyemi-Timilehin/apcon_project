<div class="table-responsive">
    <table class="table" id="registrationDetails-table">
        <thead>
            <tr>
                @if(auth()->user()->user_type === 'admin')
                <th> Name </th>
                <th>User Type</th>
                @endif
                <!-- <th>User Id</th> -->
        <th>Referee Name</th>
        <th>Referee Email</th>
        <th>Referee Phone</th>
        <th>Referee Company</th>
        <th>School Attended</th>
        <th>School Completed</th>
        @if( auth()->user()->user_type === 'admin' ||  auth()->user()->user_type === 'corporate')
        <th>Letter Of Reference</th>
        <th>Registration Document</th>
        <th>Cac</th>
        <th>Memorandum</th>
        <th>Directors Details</th>
        <th>Staff Details</th>
        <th>Financial Report</th>
        <th>Tax Clearance</th>
        <th>Compliance Letter</th>
        @endif
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registrationDetails as $registrationDetails)
            <tr>
                @if(auth()->user()->user_type === 'admin')
                <td>{{ \App\Models\User::find($registrationDetails->user_id)->name }}</td>
                <td>{{ \App\Models\User::find($registrationDetails->user_id)->user_type }}</td>
                @endif
                <!-- <td>{{ $registrationDetails->user_id }}</td> -->
            <td>{{ $registrationDetails->referee_name }}</td>
            <td>{{ $registrationDetails->referee_email }}</td>
            <td>{{ $registrationDetails->referee_phone }}</td>
            <td>{{ $registrationDetails->referee_company }}</td>
            <td>{{ $registrationDetails->school_attended }}</td>
            <td>{{ $registrationDetails->school_completed }}</td>
             @if( auth()->user()->user_type === 'admin' ||  auth()->user()->user_type === 'corporate')
            <td><img src="{!! asset($registrationDetails->letter_of_reference) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->registration_document) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->cac) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->memorandum) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->directors_details) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->staff_details) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->financial_report) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->tax_clearance) !!}" width="500" alt=" "></td>
            <td><img src="{!! asset($registrationDetails->compliance_letter) !!}" width="500" alt=" "></td>
            @endif
                <td width="120">
                    {!! Form::open(['route' => ['registrationDetails.destroy', $registrationDetails->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registrationDetails.show', [$registrationDetails->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @if(auth()->user()->user_type !== 'admin')
                        <a href="{{ route('registrationDetails.edit', [$registrationDetails->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @endif
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
