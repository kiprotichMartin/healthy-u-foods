@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
  <div class="top-right links">
    @auth
    <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
  </div>
  @endif

  <div class="content">
    <img style="border-radius: 25% 25% 10% 10%; height: 350px;" src="/img/healthyou.png" alt="Healthy U logo">
    <div class="title m-b-md">
      Healthy U Foods
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    <div>
      <a href="{{ route('pizzas.create') }}"><button class="button">Order Pizza</button></a>
      <a href="{{ route('chickens.create') }}"><button class="button">Order Chicken</button></a>
      <a href="{{ route('juices.create') }}"><button class="button">Order Juice</button></a>
    </div>
  </div>
</div>
@endsection