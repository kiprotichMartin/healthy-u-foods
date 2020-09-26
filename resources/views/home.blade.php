@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          You are logged in! <br>
          <div>
            <a href="{{ route('pizzas.index') }}">
              View all Pizza Orders
            </a><br>

            <a href="{{ route('juices.index') }}">
              View all Juice Orders
            </a><br>

            <a href="{{ route('chickens.index') }}">
              View all Chicken Orders
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection