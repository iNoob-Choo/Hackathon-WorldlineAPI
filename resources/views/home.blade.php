@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <ul class="no-bullets">
                          <li><a  class="btn btn-primary btn-block" href="{{route('index.user')}}">View Admins</a></li>
                          <li><a  class="btn btn-primary btn-block " href="{{ route('settings') }}">Settings</a></li>
                          <li><a  class="btn btn-primary btn-block " href="{{ route('api.status') }}">View API Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
