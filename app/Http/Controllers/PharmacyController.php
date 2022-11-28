<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Pharmacy;
use App\Models\PharmacyDrugs;
use App\Models\Order;
use App\Models\OrderDetail;

class PharmacyController extends Controller
{
    public function show(){
        $pharmacy = Pharmacy::with('phamacy_drugs')->paginate(10);
        return $pharmacy;
    }
    public function create(Request $request){

        $pharmacy = Pharmacy::create(
            ['name'=>$request->name, 
            'adress'=>$request->adress]);
            return $pharmacy;
    }
    public function update($id, Request $request){
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy -> update(
            ['name'=>$request->name, 
            'adress'=>$request->adress]);
            return $pharmacy;
    }
    public function delete($id){
        try{
            $pharmacy = Pharmacy::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('Ne nashel');
        }
        $pharmacy->delete();
        return response()->json('Successfully deleted', 204);
    }
    //
}
