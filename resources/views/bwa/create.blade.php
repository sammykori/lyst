@extends('layouts.lapp')

    @section('content')
     <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">BWA Licence</h1>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                {!!Form::open(['action'=> 'BwaController@store', 'method' => 'POST'])!!}
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('name', 'Name of Company') !!}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Star Company', 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('class', 'Description') !!}
                        {{Form::text('class', '', ['placeholder' => 'Description', 'class' => 'custom-select form-control'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('email', 'Email') !!}
                        {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'you@example.com', 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('address', 'Physical Address') !!}
                        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => '911 Ring Road, Accra', 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        {!! Form::label('pobox', 'Post Office Box') !!}
                        {{Form::text('pobox', '', ['class' => 'form-control', 'placeholder' => 'P.O Box CM123', 'autocomplete' => 'on'])}}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('digi', 'Ghana Post Digital Address') !!}
                            {{Form::text('digi', '', ['class' => 'form-control', 'placeholder' => 'GL-124239', 'autocomplete' => 'on'])}}
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        {!! Form::label('phone_1', 'Phone Number 1') !!}
                        {{Form::text('phone_1', '', ['class' => 'form-control', 'placeholder' => '03011111111', 'autocomplete' => 'on'])}}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('phone_2', 'Phone Number 2 (Optional)') !!}
                            {{Form::text('phone_2', '', ['class' => 'form-control', 'placeholder' => '03011111111', 'autocomplete' => 'on'])}}
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        {!! Form::label('eff_date', 'Effective Date') !!}
                        {{Form::date('eff_date', '', ['class' => 'form-control', 'placeholder' => '03011111111', 'autocomplete' => 'on'])}}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('ex_date', 'Expiry Date') !!}
                            {{Form::date('ex_date', '', ['class' => 'form-control', 'placeholder' => '03011111111', 'autocomplete' => 'on'])}}
                            </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::submit('Create Licence', ['class'=> 'btn btn-primary shadow-sm btn-lng btn-block']) !!}
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>
            <div class="col-sm-1">
            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    @endsection
