<?php

namespace App\Http\Controllers\back;

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
        $factures = Facture::where('payed', 0)->orderby('id', 'desc')->get();
        return view('back.orders.orders', compact('factures'));
    }

    public function serve(Order $order)
    {
        if ($order->served == 0)
            $order->served = 1;
        else
            $order->served = 0;
        $order->save();
        return redirect()->back();
    }

    /*
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


        $facture->orders()->save($order);

        $msg = "به سفارشات افزودن شد";
        return redirect()->back()->with('success', $msg);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
    */
}
