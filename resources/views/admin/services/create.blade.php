@extends('layouts.admin-lapp')

    @section('content')
        <h1 class="h3 mb-2 text-gray-800">Register User</h1>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                {!!Form::open(['action'=> 'AdminController@usersStore', 'method' => 'POST'])!!}
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('name', 'Name') !!}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Ama Sekyere', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('email', 'Email') !!}
                        {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'admin@email.com', 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('password', 'New Password') !!}
                        {{Form::password('password', ['class' => 'custom-select form-control'])}}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::submit('Create User', ['class'=> 'btn btn-primary shadow-sm btn-lng btn-block']) !!}
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>
            <div class="col-sm-1">
            </div>
        </div>
      <!-- /.container-fluid -->
    @endsection
