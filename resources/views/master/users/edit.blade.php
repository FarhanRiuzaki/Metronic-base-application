{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}} 
@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Edit New User
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4" >

                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'id' => 'MyForm']) !!}

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            {{ Form::inputText('Name: ', 'name', null, null, ['placeholder' => 'Name', 'required']) }}
                            {{ Form::inputText('Email: ', 'email', null, null, ['placeholder' => 'Email', 'required', 'autocomplete' =>'off']) }}
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            {{ Form::inputPassword('Password: ', 'password', null, null, ['placeholder' => 'Password:', 'autocomplete' => 'new-password'])}}
                            {{ Form::inputPassword('Confirm Password: ', 'confirm-password', null, null, ['placeholder' => 'Confirm Password'])}}
                            <span class='text-warning'>Biarkan kosong, jika tidak ingin mengganti password</span>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple', 'required')) !!}
                            </div>
                        </div>

                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
