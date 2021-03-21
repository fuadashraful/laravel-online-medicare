<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\File;
use App\Medicine;

class MedicineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.add_medicine');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'company_name' => 'required',
            'price' => 'required',
            'description'=>'required',
            'photo'=>'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['company_name']=$request->company_name;
        $data['price']=$request->price;
        $data['description']=$request->description;
        
        // dd($data);
        $image=$request->file('photo');
        // echo "<pre>";
        // print_r($data);
        // exit();
        $time=date('Y-m-d H:i:s');
      //  dd($time);
        try
        {
            if($image)
            {
                $image_name=$time;
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path="images/medicine/";
                $image_url=$upload_path.$image_full_name;
    
                $success=$image->move($upload_path,$image_full_name);
                if($success)
                {
                    $data['image']=$image_url;
                }
                else
                {
                    $data['image']=$image;
                }
            }
            else
            {
                $data['image']=$image;
            }

            $product=DB::table('medicines')
            ->insert($data);
            $notification=array(
                'message'=>'Peoduct inserted successfully',
                'alert-type'=>'success'
            );
            return redirect('dashboard')->with($notification);
        }
        catch(Exception $e)
        {
            $notification=array(
                'message'=>'Can not insert Product',
                'alert-type'=>'danger'
            );
            return redirect('dashboard')->with($notification);
        }

    }

    public function allMedicine()
    {
        $medicines=Medicine::all();
       // dd($medicines);
       return view('admin.all_medicine',compact('medicines'));
    }

    public function editMedicine($id)
    {
        try
        {
            $medicine=Medicine::find($id);
            return view('admin.edit_medicine',compact('medicine'));
        }
        catch(Exception $e)
        {
            $notification=array(
                'message'=>'Can not find the supplier',
                'alert-type'=>'danger'
            );
            return redirect('dashboard')->with($notification);
        }
    }

    public function updateMedicine(Request $request ,$id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'company_name' => 'required',
            'price' => 'required',
            'description'=>'required',
            'photo'=>'required',
        ]);

        try
        {
            $data=array();
            $data['name']=$request->name;
            $data['company_name']=$request->company_name;
            $data['price']=$request->price;
            $data['description']=$request->description;

            $image=$request->file('photo');
            $medicine=Medicine::find($id);
            
            if($image)
            {
                if (File::exists($medicine->image)) {
                    //File::delete($image_path);
                    unlink($medicine->image);
                }
                $time=date('Y-m-d H:i:s');
                $image_name=$time;
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path="images/medicine/";
                $image_url=$upload_path.$image_full_name;
                
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
    
            }
            DB::table('medicines')->where('id', $id)->update($data);

            $notification=array(
                'message'=>'Employee Updated Successfully',
                'alert-type'=>'success'
            );
            return redirect('dashboard')->with($notification);

        }
        catch(Exception $e)
        {
            $notification=array(
                'message'=>'Can not find the employee',
                'alert-type'=>'danger'
            );
            return redirect('dashboard')->with($notification);
        }        
    }

    public function toggleMedicineStatus($id)
    {
        $medicine = Medicine::find($id);
        $medicine->is_active=!$medicine->is_active;
        $medicine->save();
        return redirect('dashboard');
    }
}
