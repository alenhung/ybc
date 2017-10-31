@extends('default.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <div class="panel panel-default">
              <div class="panel-heading">Dashboard</div>

              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  You are logged in!
              </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
          <h1>管理端說明</h1>
          <p>welcome to YBC control panel</p>
        </div>
      </div>
</div>
@endsection
