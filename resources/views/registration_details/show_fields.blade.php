<!-- User Id Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $registrationDetails->user_id }}</p>
</div> -->

<!-- Referee Name Field -->
<div class="col-sm-12">
    {!! Form::label('referee_name', 'Referee Name:') !!}
    <p>{{ $registrationDetails->referee_name }}</p>
</div>

<!-- Referee Email Field -->
<div class="col-sm-12">
    {!! Form::label('referee_email', 'Referee Email:') !!}
    <p>{{ $registrationDetails->referee_email }}</p>
</div>

<!-- Referee Phone Field -->
<div class="col-sm-12">
    {!! Form::label('referee_phone', 'Referee Phone:') !!}
    <p>{{ $registrationDetails->referee_phone }}</p>
</div>

<!-- Referee Company Field -->
<div class="col-sm-12">
    {!! Form::label('referee_company', 'Referee Company:') !!}
    <p>{{ $registrationDetails->referee_company }}</p>
</div>

<!-- School Attended Field -->
<div class="col-sm-12">
    {!! Form::label('school_attended', 'School Attended:') !!}
    <p>{{ $registrationDetails->school_attended }}</p>
</div>

<!-- School Completed Field -->
<div class="col-sm-12">
    {!! Form::label('school_completed', 'School Completed:') !!}
    <p>{{ $registrationDetails->school_completed }}</p>
</div>
@if( auth()->user()->user_type === 'corporate' )
<!-- Letter Of Reference Field -->
<div class="col-sm-12">
    {!! Form::label('letter_of_reference', 'Letter Of Reference:') !!}
    <p><img src="{!! asset($registrationDetails->letter_of_reference) !!}" width="500"></p>
</div>

<!-- Registration Document Field -->
<div class="col-sm-12">
    {!! Form::label('registration_document', 'Registration Document:') !!}
    <p><img src="{!! asset($registrationDetails->registration_document) !!}" width="500"></p>
</div>

<!-- Cac Field -->
<div class="col-sm-12">
    {!! Form::label('cac', 'Cac:') !!}
    <p><img src="{!! asset($registrationDetails->cac) !!}" width="500"></p>
</div>

<!-- Memorandum Field -->
<div class="col-sm-12">
    {!! Form::label('memorandum', 'Memorandum:') !!}
    <p><img src="{!! asset($registrationDetails->memorandum) !!}" width="500"></p>
</div>

<!-- Directors Details Field -->
<div class="col-sm-12">
    {!! Form::label('directors_details', 'Directors Details:') !!}
    <p><img src="{!! asset($registrationDetails->directors_details) !!}" width="500"></p>
</div>

<!-- Staff Details Field -->
<div class="col-sm-12">
    {!! Form::label('staff_details', 'Staff Details:') !!}
    <p><img src="{!! asset($registrationDetails->staff_details) !!}" width="500"></p>
</div>

<!-- Financial Report Field -->
<div class="col-sm-12">
    {!! Form::label('financial_report', 'Financial Report:') !!}
    <p><img src="{!! asset($registrationDetails->financial_report) !!}" width="500"></p>
</div>

<!-- Tax Clearance Field -->
<div class="col-sm-12">
    {!! Form::label('tax_clearance', 'Tax Clearance:') !!}
    <p><img src="{!! asset($registrationDetails->tax_clearance) !!}" width="500"></p>
</div>

<!-- Compliance Letter Field -->
<div class="col-sm-12">
    {!! Form::label('compliance_letter', 'Compliance Letter:') !!}
    <p><img src="{!! asset($registrationDetails->compliance_letter) !!}" width="500"></p>
</div>
@endif
<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $registrationDetails->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $registrationDetails->updated_at }}</p>
</div>

