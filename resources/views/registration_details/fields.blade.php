<!-- User Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Referee Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referee_name', 'Referee Name:') !!}
    {!! Form::text('referee_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Referee Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referee_email', 'Referee Email:') !!}
    {!! Form::text('referee_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Referee Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referee_phone', 'Referee Phone:') !!}
    {!! Form::text('referee_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Referee Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referee_company', 'Referee Company:') !!}
    {!! Form::text('referee_company', null, ['class' => 'form-control']) !!}
</div>

<!-- School Attended Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_attended', 'School Attended:') !!}
    {!! Form::text('school_attended', null, ['class' => 'form-control']) !!}
</div>

<!-- School Completed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_completed', 'School Completed:') !!}
    {!! Form::text('school_completed', null, ['class' => 'form-control','id'=>'school_completed']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#school_completed').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
@if( auth()->user()->user_type === 'corporate' )
<!-- Letter Of Reference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('letter_of_reference', 'Letter Of Reference:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('letter_of_reference', ['class' => 'custom-file-input']) !!}
            {!! Form::label('letter_of_reference', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Registration Document Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration_document', 'Registration Document:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('registration_document', ['class' => 'custom-file-input']) !!}
            {!! Form::label('registration_document', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Cac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac', 'Cac:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('cac', ['class' => 'custom-file-input']) !!}
            {!! Form::label('cac', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Memorandum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memorandum', 'Memorandum:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('memorandum', ['class' => 'custom-file-input']) !!}
            {!! Form::label('memorandum', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Directors Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('directors_details', 'Directors Details:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('directors_details', ['class' => 'custom-file-input']) !!}
            {!! Form::label('directors_details', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Staff Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('staff_details', 'Staff Details:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('staff_details', ['class' => 'custom-file-input']) !!}
            {!! Form::label('staff_details', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Financial Report Field -->
<div class="form-group col-sm-6">
    {!! Form::label('financial_report', 'Financial Report:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('financial_report', ['class' => 'custom-file-input']) !!}
            {!! Form::label('financial_report', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Tax Clearance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_clearance', 'Tax Clearance:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('tax_clearance', ['class' => 'custom-file-input']) !!}
            {!! Form::label('tax_clearance', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Compliance Letter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compliance_letter', 'Compliance Letter:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('compliance_letter', ['class' => 'custom-file-input']) !!}
            {!! Form::label('compliance_letter', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endif
