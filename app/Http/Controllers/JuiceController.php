<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juice;

class JuiceController extends Controller
{
  public function index()
  {

    $juices = Juice::latest()->get();

    return view('juices.index', [
      'juices' => $juices,
    ]);
  }

  public function show($id)
  {

    $juice = Juice::findOrFail($id);

    return view('juices.show', ['juice' => $juice]);
  }

  public function create()
  {
    return view('juices.create');
  }

  public function store()
  {

    $juice = new Juice();

    $juice->name = request('name');
    $juice->mobile = request('mobile');
    $juice->fruits = request('fruits');
    $juice->vegetables = request('vegetables');

    $juice->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');
  }

  public function destroy($id)
  {

    $juice = Juice::findOrFail($id);
    $juice->delete();

    return redirect('/juices');
  }
}
