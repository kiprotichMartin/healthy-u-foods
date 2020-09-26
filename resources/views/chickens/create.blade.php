@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Chicken Order</h1>
  <form action="{{ route('chickens.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="mobile">Phone number:</label>
    <input type="tel" name="mobile" id="mobile" required>
    <fieldset>
      <legend>Type of chicken:</legend>
      <input type="checkbox" name="kuku[]" value="grilled chicken">Grilled Chicken<br />
      <input type="checkbox" name="kuku[]" value="chicken soup">Chicken Soup<br />
      <input type="checkbox" name="kuku[]" value="spicy chicken breasts">Spicy Chicken Breasts<br />
      <input type="checkbox" name="kuku[]" value="lemon herb chicken">Lemon Herb Hhicken<br />
      <input type="checkbox" name="kuku[]" value="bourbon chicken">Bourbon Chicken<br />
      <input type="checkbox" name="kuku[]" value="apricot chicken">Apricot Chicken<br />
    </fieldset>
    <input type="submit" value="Order Chicken">
  </form>
</div>
@endsection