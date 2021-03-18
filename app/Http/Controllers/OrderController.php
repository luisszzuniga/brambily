<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderModel::all();
        return view('orders.index', compact('orders'));
    }

    public function see(int $id)
    {
        $order = OrderModel::find($id);
        return view('orders.see', compact('order'));
    }

    public function archive(int $id)
    {
        $order = OrderModel::find($id);
        return view('orders.archive', compact('order'));
    }

    public function archiveConfirm(int $id)
    {
        $order = OrderModel::find($id);
        $order->archive = 1;
        $order->save();

        return redirect('/orders');
    }

    public function old(int $id)
    {
        $orders = OrderModel::all();
        return view('orders.archiveOrders', compact('orders'));
    }

    public function unarchive(int $id)
    {
        $order = OrderModel::find($id);
        $order->archive = 0;
        $order->save();

        return redirect('/orders/old/1');
    }

    public function order()
    {
        $name = $_POST['name'];
        $orderText = $_POST['order'];
        $phone = $_POST['phone'];

        $order = new OrderModel;
        $order->name = $name;
        $order->order = $orderText;
        $order->phone = $phone;
        $order->save();

        Session::flash('succes', 'Votre commande a bien été prise en compte! Vous pouvez venir la récupérer d\'ici peu.');

        return redirect('/');
    }
}
