<?php

namespace App\Http\Controllers\back;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(20);
        return view('back.foods.foods', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('back.foods.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'categories' => 'required',
            'price' => 'required',
        ]);
        $fd = new Food();

        $fod = $fd->create($request->all());
        $fod->categories()->attach($request->categories);
        return redirect(route('admin.foods'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $categories = Category::all()->pluck('name','id');
        return view('back.foods.foodedit', compact('food','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $food->name = $request->name;
        $food->price = $request->price;


        if (!empty($request->image))
            $food->image = $request->image;

        if (!empty($request->description))
            $food->description = $request->description;


        $food->save();
        $food->categories()->sync($request->categories);
        return redirect(route('admin.foods'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect(route('admin.foods'));
    }

    public function updatedayOffer(Food $food)
    {
        if ($food->dayOffer == 1)
            $food->dayOffer = 0;
        else
            $food->dayOffer = 1;

        $food->save();
        return redirect(route('admin.foods'));
    }
}
