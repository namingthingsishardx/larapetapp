<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use App\Models\PetshopItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PetShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemIsPet = PetshopItem::where('category', 'pet')->get();
        $itemIsFood = PetshopItem::where('category', 'food')->get();
        return view('petshop.index', compact('itemIsPet', 'itemIsFood'));
    }

    public function adopt($id)
    {
        $itemPet = PetshopItem::find($id);

        if (Auth::user()->pawchips - $itemPet->price <= 0) {
            flash('Jumlah Pawchips kamu kurang untuk mengadopsi pet ini 😥');
            return back();
        }

        $pet = new Pet;
        $pet->user_id = Auth::user()->id;
        $pet->name = $itemPet->name;
        $pet->age = $itemPet->age;
        $pet->photo = $itemPet->picture;
        $pet->save();
        User::find(Auth::user()->id)->decrement('pawchips', $itemPet->price);
        return redirect()->route('pets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
