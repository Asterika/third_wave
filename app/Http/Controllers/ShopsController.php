<?php

namespace App\Http\Controllers;

//define global namespace root and import project class so class can be referenced later on without including root
use App\Shop;

// use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index()
    {

      $shops = Shop::all();

      // return $shops;

      return view('shops.index', compact('shops'));
    }

    // create a new method to reflect create route
    public function create()
    {
      return view('shops.create');
    }

    public function show($id)
    {
      $shop = Shop::findOrFail($id);

      return view('shops.show', compact('shop'));
    }

    public function edit($id)
    {

      $shop = Shop::findOrFail($id);

      return view('shops.edit', compact('shop'));
    }

    public function update($id)
    {
      $shop = Shop::findOrFail($id);

      $shop->name_location = request('name_location');
      $shop->address1 = request('address1');
      $shop->hours1 = request('hours1');
      $shop->phone1 = request('phone1');
      $shop->address2 = request('address2');
      $shop->hours2 = request('hours2');
      $shop->phone2 = request('phone2');
      $shop->website = request('website');
      $shop->favorite_drink = request('favorite_drink');

      $shop->save();

      return redirect('/shops');

      // return view('shops.patch');
      // dd(request()->all());
    }

    public function destroy($id)
    {
      Shop::findOrFail($id)->delete();
      // dd('delete ' . $id);
      // return view('shops.destroy');
      return redirect('/shops');
    }

    //create a method to store new shop data
    //request all fields be returned from input form
    public function store()
    {

      $shop = new Shop();

      $shop->name_location = request('name_location');
      $shop->address1 = request('address1');
      $shop->hours1 = request('hours1');
      $shop->phone1 = request('phone1');
      $shop->address2 = request('address2');
      $shop->hours2 = request('hours2');
      $shop->phone2 = request('phone2');
      $shop->website = request('website');
      $shop->favorite_drink = request('favorite_drink');

      $shop->save();

      return redirect('/shops');
    }
}
