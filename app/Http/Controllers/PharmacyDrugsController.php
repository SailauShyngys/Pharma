<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Pharmacy;
use App\Models\PharmacyDrug;
use App\Models\Order;
use App\Models\OrderDetail;

class PharmacyDrugsController extends Controller
{
    public function show(){
        $pharmacy_drugs = PharmacyDrug::with('pharmacy', 'drugs')->get();
        return $pharmacy_drugs;
    }
    public function create(Request $request){

        $pharmacy_drugs = PharmacyDrug::create(
            ['drug_id'=>$request->drug_id, 
            'pharmacy_id'=>$request->pharmacy_id]);
            return $pharmacy_drugs;
    }
    public function update($id, Request $request){
        $pharmacy_drugs = PharmacyDrug::findOrFail($id);
        $pharmacy_drugs -> update(
            ['drug_id'=>$request->drug_id, 
            'pharmacy_id'=>$request->pharmacy_id]);
            return $pharmacy_drugs;
    }
    public function delete($id){
        try{
            $pharmacy_drugs = PharmacyDrug::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('Ne nashel');
        }
        $pharmacy_drugs->delete();
        return response()->json('Successfully deleted', 204);
    }
    //
}
