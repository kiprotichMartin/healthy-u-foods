@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Juice Orders</h1>
  @foreach($juices as $juice)
  <div class="pizza-item">
    <img src="/img/healthyou.png" alt="Healthy U icon">
    <h4><a href="{{ route('juices.show', $juice->id) }}">{{ $juice->name }} <br> {{ $juice->mobile }}</a></h4>
  </div>
  @endforeach

</div>

@endsection