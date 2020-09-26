@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $juice->name }} <br> {{ $juice->mobile }}</h1>
  <p class="fruits">Fruits</p>
  <ul>
    @foreach($juice->fruits as $fruit)
    <li>{{ $fruit }}</li>
    @endforeach
  </ul><br>
  <p class="vegetables">vegetables</p>
  <ul>
    @foreach($juice->vegetables as $vegetable)
    <li>{{ $vegetable }}</li>
    @endforeach
  </ul>
  <form action="{{ route('juices.destroy', $juice->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('juices.index') }}" class="back">
  <- Back to all juice orders</a> @endsection