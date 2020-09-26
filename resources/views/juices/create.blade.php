@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Juice Order</h1>
  <form action="{{ route('juices.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="mobile">Phone number:</label required>
    <input type="tel" name="mobile" id="mobile">
    <fieldset>
      <legend>Fruits</legend>
      <input type="checkbox" name="fruits[]" value="passion">Passion<br />
      <input type="checkbox" name="fruits[]" value="mango">Mango<br />
      <input type="checkbox" name="fruits[]" value="orange">Orange<br />
      <input type="checkbox" name="fruits[]" value="apple">Apple<br />
      <input type="checkbox" name="fruits[]" value="banana">Banana<br />
      <input type="checkbox" name="fruits[]" value="grape">Grape<br />
    </fieldset><br>
    <fieldset>
      <legend>Vegetables</legend>
      <input type="checkbox" name="vegetables[]" value="spinach">Spinach<br />
      <input type="checkbox" name="vegetables[]" value="kales">Kales<br />
      <input type="checkbox" name="vegetables[]" value="cucumbers">Cucumbers<br />
      <input type="checkbox" name="vegetables[]" value="tomatoes">Tomatoes<br />
      <input type="checkbox" name="vegetables[]" value="carrots">Carrots<br />
      <input type="checkbox" name="vegetables[]" value="beetroot">Beetroot<br />
    </fieldset>
    <input type="submit" value="Order Juice">
  </form>
</div>
@endsection