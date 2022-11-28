<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Pharmacy;
use App\Models\PharmacyDrugs;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function show(){
        $order = Order::with('drugs')->paginate(10);
        return $order;
    }
    public function create(Request $request){

        $order = Order::create(
            ['drug_id'=>$request->drug_id, 
            'user_id'=>$request->user_id]);
            return $order;
           
    }
    public function update($id, Request $request){

        $order = Order::findOrFail($id);
        $order -> update(
            ['drug_id'=>$request->drug_id, 
            'user_id'=>$request->user_id]);
            return $order;
           
    }
    public function delete($id){
        try{
            $order = Order::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('Ne nashel');
        }
        $order->delete();
        return response()->json('Successfully deleted', 204);
    }

    public function show_D(){
        $order_details = OrderDetail::with('drugs')->paginate(10);
        return $order_details;
    }
    public function create_D(Request $request){
            $order_details = OrderDetail::create(
            ['sale_id'=>$request->sale_id, 
            'product_id'=>$request->product_id, 
            'price'=>$request->price]);
            return $order_details;
           
    }
    public function update_D($id, Request $request){

        $order_details = OrderDetail::findOrFail($id);
        $order_details -> update(
            ['sale_id'=>$request->sale_id, 
            'product_id'=>$request->product_id, 
            'price'=>$request->price]);
            return $order_details;
           
    }
    public function delete_D($id){
        try{
            $order_details = OrderDetail::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('Ne nashel');
        }
        $order_details->delete();
        return response()->json('Successfully deleted', 204);
    }
    //
}
