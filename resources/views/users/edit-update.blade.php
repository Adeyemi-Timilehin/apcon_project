<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    <input type="password" name="password" class="form-control">
    <!-- {!! Form::text('password', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Is Approved Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_approved', 'Is Approved:') !!}
    <select name="is_approved" class="form-control">
        <option value="{{$users->is_approved}}" selected>{{ $users->is_approved == 0 ? 'FALSE' : 'TRUE'}}</option>
    	<option value="0">FALSE</option>
    	<option value="1">TRUE</option>
    </select>
</div>

<!-- User Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_type', 'User Type:') !!}
    <select name="user_type" class="form-control">
        <option value="{{$users->user_type}}" selected>{{strtoupper($users->user_type) }}</option>
    	<option value="admin">ADMIN</option>
    	<option value="individual">INDIVIDUAL</option>
    	<option value="corporate">CORPORATE</option>
    </select>
</div>