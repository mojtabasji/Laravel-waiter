<?php

namespace App\Http\Controllers\front;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Facture;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Request $request)
    {
        //$facture = $table->factures()->where('factures_payed',0);
        $facture = Facture::where('payed',0)->where('user_id',$user->id)->first();

        if(empty($facture))
        {
            $facture = new Facture();
            $facture->date = date('Y-m-d H:i:s');
            $facture = $user->factures()->save($facture);
        }

        $order = new Order();
        $order->food_id = $request->food_id;
        $order->count = $request->count;


        $order = $facture->orders()->save($order);

        $facture->cost = $facture->cost + ($order->count * $order->food->price) ;
        $facture->save();
/*
        $order = new Order();
        $order->facture_id = $facture->id;
        $order->food_id = $request->food_id;
        $order->count = $request->count;
        $order->save();*/
        $msg = "به سفارشات افزودن شد";
        return redirect()->back()->with('success', $msg);
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
