@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizza)
  <div class="pizza-item">
    <img src="/img/healthyou.png" alt="Healthy U icon">
    <h4><a href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }} <br> {{ $pizza->mobile }}</a></h4>
  </div>
  @endforeach

</div>

@endsection