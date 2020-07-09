@extends('layouts.lapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="{{url('/home/export')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">
        <div class="container">
        <!-- Approach -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Welcome Dashboard</h6>
          </div>
          <div class="card-body">
            <h3>Welcome to the User Dashboard</h3>
          </div>
        </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="{{url('/fixed')}}">Fixed Line Service</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($fixed)}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-phone fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="{{url('/cellular')}}">Cellular Mobile Service</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($cell)}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-signal fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('/umts')}}">Universal Mobile Telecommunications</a></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($umts)}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-globe fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="{{url('/bwa')}}">Broadband Wireless Access</a></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($bwa)}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-wifi fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="{{url('/igl')}}">International Gateway Licence</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($igl)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-cloud fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('/terrest')}}">Terrestrial Fibre Netwok</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($terrest)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-plug fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="{{url('/virtual')}}">Mobile Virtual Newtwork</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($virtual)}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-shield-alt fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="{{url('/iwcl')}}">International Wholesale Carrier</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($iwcl)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-globe fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('/submarine')}}">Submarine Cable Landing Station</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($sub)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-water fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="{{url('/infras')}}">Communications Infrastructure Tower</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($infras)}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-broadcast-tower fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('/ich')}}">InterConnect Clearing House</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($ich)}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-house-damage fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="{{url('/vas')}}">Value Added Service</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($vas)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="{{url('/dealers')}}">Dealers Licence</a></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($deal)}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-ship fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

  </div>
  <!-- /.container-fluid -->
@endsection
