@extends('layouts.admin-lapp')

    @section('content')
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <p class="mb-4">List of Users on the platform. Admin can Register or Remove Users.</a>.</p>
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user fa-sm text-white-50"></i> Register New User</a>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add New User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  {{-- @include('inc.messages') --}}
                    <div class="row">
                        <div class="col-sm-2">
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

                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        {!! Form::submit('Create User', ['class'=> 'btn btn-primary shadow-sm btn-lng btn-lg']) !!}
                        </div>
                    </div>
                        {!!Form::close()!!}

                </div>
              </div>
            </div>
        </div>
        <br>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Remove</th>
                  </tr>
                </tfoot>
                <tbody>
                    @if(count($users)>0)
                        @foreach($users as $users)
                        <tr>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>
                                {!!Form::open(['action' => ['AdminController@usersDelete', $users->id], 'method' => 'POST'])!!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{Form::submit('Remove', ['class' => 'btn btn-danger btn-sm shadow-sm'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <p>No Results</p>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    @endsection
