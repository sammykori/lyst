@extends('layouts.lapp')

    @section('content')
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Universal Mobile Telecommunication System 3G Licence</h1>
        <p class="mb-4">3G (Third Generation) cellular networks services means telecommunications services that are 3G Licensees deliver services in the 2100MHz Band. The Licensee is required to own and operate facilities for the operation and provision of Third Generation (3G) Mobile Services.</p>
        <a href="{{url('umts/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-folder-plus fa-sm text-white-50"></i> New UMTS Licence</a>
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
                        <th>Name of Company</th>
                        <th>Effective Date</th>
                        <th>Expiry Date</th>
                        <th>Duration</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name of Company</th>
                        <th>Effective Date</th>
                        <th>Expiry Date</th>
                        <th>Duration</th>
                        <th>More</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        @if(count($deal)>0)
                            @foreach($deal as $deal)
                            <tr>
                                <td>{{$deal->company_name}}</td>
                                <td>{{date_format(date_create_from_format("Y-m-j",$deal->effect_date), "j F, Y")}}</td>
                                <td>{{date_format(date_create_from_format("Y-m-j",$deal->expiry_date), "j F, Y")}}</td>
                                <td>15 years</td>
                                <td><a href="/umts/{{$deal->id}}" class="btn btn-sm btn-info shadow-sm">More</a></td>
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
        <a href="{{ url('/umts/export')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
      </div>
      <!-- /.container-fluid -->
    @endsection
