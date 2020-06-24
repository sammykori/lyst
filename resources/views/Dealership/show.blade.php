@extends('layouts.lapp')

    @section('content')
     <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{strtoupper($deal->company_name)}}</h1>
        <br>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">

                    <h3 class="h3 mb-2 text-gray-800">Dealership Licence Class {{$deal->class}}</h3><br>

                    <p class="text-gray-800">Contact Information</p>
                    <hr>
                    <br>

                <div class="row">
                    <a class="btn btn-secondary btn-icon-split btn-sm">
                        <span class="icon text-gray-50">
                          <i class="fas fa-mail-bulk"></i>
                        </span>
                        <span class="text">{{$deal->email}}</span>
                      </a>
                    <br>
                </div>
                <br>
                <div class="row">
                    <a class="btn btn-info btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-phone"></i>
                        </span>
                        <span class="text">{{$deal->phone_1}}</span>
                      </a>
                </div>
                <br>
                <div class="row">
                    <a class="btn btn-info btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-phone"></i>
                        </span>
                        <span class="text">{{$deal->phone_2}}</span>
                      </a>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    @endsection
