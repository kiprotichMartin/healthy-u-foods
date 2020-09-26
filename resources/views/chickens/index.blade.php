@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Chicken Orders</h1>
  @foreach($chickens as $chicken)
  <div class="pizza-item">
    <img src="/img/healthyou.png" alt="Healthy U icon">
    <h4><a href="{{ route('chickens.show', $chicken->id) }}">{{ $chicken->name }} <br> {{ $chicken->mobile }}</a></h4>
  </div>
  @endforeach

</div>

@endsection