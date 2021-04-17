<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderMedicineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orderMedicine(Request $request ,$id)
    {
        //dd($request);
        $validated = $request->validate([
            'quantity' => 'required',
            'contact_no' => 'required',
        ]);

        $data=array();
        $data['medicine_id']=$id;
        $data['quantity']=$request->quantity;
        $data['contact_no']=$request->contact_no;
    
        $product=DB::table('order_medicines')
        ->insert($data);

        $notification=array(
            'message'=>'Order for this medicine collected',
            'alert-type'=>'success'
        );
        return redirect('/')->with($notification);
    }
}
