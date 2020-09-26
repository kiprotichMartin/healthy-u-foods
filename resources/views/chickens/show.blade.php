@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $chicken->name }} <br> {{ $chicken->mobile }}</h1>
  <p class="kuku">Chicken Types:</p>
  <ul>
    @foreach($chicken->kuku as $kuk)
    <li>{{ $kuk }}</li>
    @endforeach
  </ul><br>
  <form action="{{ route('chickens.destroy', $chicken->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('chickens.index') }}" class="back">
  <- Back to all chicken orders</a> @endsection