<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chicken;

class ChickenController extends Controller
{
  public function index()
  {

    $chickens = Chicken::latest()->get();

    return view('chickens.index', [
      'chickens' => $chickens,
    ]);
  }

  public function show($id)
  {

    $chicken = Chicken::findOrFail($id);

    return view('chickens.show', ['chicken' => $chicken]);
  }

  public function create()
  {
    return view('chickens.create');
  }

  public function store()
  {

    $chicken = new Chicken();

    $chicken->name = request('name');
    $chicken->mobile = request('mobile');
    $chicken->kuku = request('kuku');

    $chicken->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');
  }

  public function destroy($id)
  {

    $chicken = Chicken::findOrFail($id);
    $chicken->delete();

    return redirect('/chickens');
  }
}
