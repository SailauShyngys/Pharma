<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Pharmacy;
use App\Models\PharmacyDrugs;
use App\Models\Order;
use App\Models\OrderDetail;



class DrugController extends Controller
{
    public function show(){
        $drug = Drug::with('orders', 'order_details', 'pharmacy_drugs')->paginate(10);
        return $drug;
    }
    public function create(Request $request){

        $drug = Drug::create(
        ['drug_name'=>$request->drug_name, 
        'country'=>$request->country, 
        'price'=>$request->price]);
        return $drug;
    }
    public function update($id, Request $request){
        $drug = Drug::findOrFail($id);
        $drug->update(
            ['drug_name'=>$request->drug_name, 
            'country'=>$request->country, 
            'price'=>$request->price]);
            return $drug;
    }
    public function delete($id){
        try{
            $drug = Drug::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('Ne nashel');
        }
        $drug->delete();
        return response()->json('Successfully deleted', 204);
    }
    //
}
