@extends('layouts.lapp')

    @section('content')
     <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dealership Licence - Profile of {{$deal->company_name}}</h1>
        {{-- {!!Form::open(['action' => ['DealersController@revoke', $deal->id],'method' => 'PUT'])!!}
            {!! Form::submit('Revoke Dealers Licence', ['class'=> 'd-none d-sm-inline-block btn btn-lg btn-danger shadow-sm float-right']) !!} --}}
        {{-- <a href="{{url('dealers/create')}}" class="d-none d-sm-inline-block btn btn-lg btn-danger shadow-sm float-right"><i class="fas fa-trash-alt fa-sm text-white-50"></i> Revoke Dealers Licence</a> --}}
        {{-- {!!Form::close()!!} --}}
        <form method="POST" action="{{action('DealersController@revoke')}}">
            @csrf
            <input type="hidden" id="custId" name="dealId" value={{$deal->id}}>
            <input type="submit" value="Revoke Licence" class="d-none d-sm-inline-block btn btn-lg btn-danger shadow-sm float-right"/>
        </form>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                {!!Form::open(['action' => ['DealersController@update', $deal->id],'method' => 'PUT'])!!}
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('l_id', 'Licence ID') !!}
                        {{Form::text('l_id', $deal->licence_id, ['class' => 'form-control', 'placeholder' => $deal->licence_id, 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('name', 'Name of Company') !!}
                        {{Form::text('name', $deal->company_name, ['class' => 'form-control', 'placeholder' => $deal->company_name, 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('class', 'Class of Licence') !!}
                        {{Form::select('class', ['A'=> 'Class A', 'B'=> 'Class B', 'C'=> 'Class C', 'D'=>'Class D'], $deal->class, ['placeholder' => 'Class '.$deal->class, 'class' => 'custom-select form-control'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('email', 'Email') !!}
                        {{Form::email('email', $deal->email, ['class' => 'form-control', 'placeholder' => $deal->email, 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::label('address', 'Physical Address') !!}
                        {{Form::text('address', $deal->address, ['class' => 'form-control', 'placeholder' => $deal->address, 'autocomplete' => 'on'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        {!! Form::label('phone_1', 'Phone Number 1') !!}
                        {{Form::text('phone_1', $deal->phone_1, ['class' => 'form-control', 'placeholder' => $deal->phone_1, 'autocomplete' => 'on'])}}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('phone_2', 'Phone Number 2 (Optional)') !!}
                            {{Form::text('phone_2', $deal->phone_2, ['class' => 'form-control', 'placeholder' => $deal->phone_2, 'autocomplete' => 'on'])}}
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        {!! Form::label('eff_date', 'Effective Date - '.$deal->effect_date) !!}
                        {{Form::date('eff_date', $deal->effect_date, ['class' => 'form-control'])}}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('ex_date', 'Expiry Date - '.$deal->expiry_date) !!}
                            {{Form::date('ex_date', $deal->expiry_date, ['class' => 'form-control'])}}
                            </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {{-- {{Form::hidden('id', $deal->id)}} --}}
                        {!! Form::submit('Edit Licence Info', ['class'=> 'btn btn-primary shadow-sm btn-lng btn-block']) !!}
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
