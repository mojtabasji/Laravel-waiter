<?php

namespace App\Http\Controllers\front;

use App\Models\User;
use App\Models\Facture;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index(User $user)
    {
        $facture = $user->factures()->where('payed', 0)->first();
        $orders = $facture->orders()->get();
        return view('front.basket.orders', compact('orders', 'facture'));
    }

    public function delete(Order $order)
    {
        if ($order->served == 0) {
            $facture = $order->facture()->first();
            $order->delete();
            $this->facture_cost($facture);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function increase(Order $order)
    {
        if ($order->served == 0) {
            $order->count = $order->count + 1;
            $order->save();
            $facture = $order->facture()->first();
            $this->facture_cost($facture);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function decrease(Order $order)
    {
        if ($order->served == 0) {
            $order->count = $order->count - 1;
            $order->save();
            $facture = $order->facture()->first();
            $this->facture_cost($facture);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function facture_cost(Facture $facture)
    {
        $orders = $facture->orders()->get();
        $cost = 0;
        //dd($orders);
        foreach ($orders as $order) {
            $cost = $cost + ($order->count * $order->food->price);
        }

        $facture->cost = $cost;
        $facture->save();
    }
}
