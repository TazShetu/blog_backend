@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    {!!  Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store','files'=>true]) !!}

        <div class="form-group">
            {!!  Form::label('name', 'Name:') !!}
            {!!  Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!!  Form::label('email', 'Email:') !!}
                {!!  Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!!  Form::label('role_id', 'Role:') !!}
                {!!  Form::select('role_id', [''=>'Choose Option'] + $roles, null, ['class'=>'form-control']) !!}
                {{--$roles is coming from create() from controller--}}
        </div>
        <div class="form-group">
                {!!  Form::label('is_active', 'Status:') !!}
                {!!  Form::select('is_active',array(1 => 'Active', 0 => 'Not Active') , 0, ['class'=>'form-control']) !!}
                {{-- 1 is value and user will see Active. 0 is the default--}}
        </div>
        <div class="form-group">
                {!!  Form::label('photo_id', 'Photo:') !!}
                {!!  Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!!  Form::label('password', 'Password:') !!}
                {!!  Form::password('password', ['class'=>'form-control']) !!}
        </div>





        <div class="form-group">
            {!!  Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

    @include('includes.form_error')





@stop