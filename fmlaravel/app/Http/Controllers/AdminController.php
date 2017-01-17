<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Motel;
use App\MotelImages;
use App\Province;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function getList(Request $req)
    {
        $data= Motel::all() ;
        return view('admin.motel.list')->withData ( $data );
    }
    public function delete(Request $req) {
        Motel::find ( $req->id )->delete ();
        return response ()->json ();
    }
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {

        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);
        $motel_img = new MotelImages;
        $motel_img->image =  $imageName;
        $motel_img->motel_id = 3;
        $motel_img->save();
        return response()->json(['success'=>$imageName]);
    }
    public function getAddMotel (){
        $province = Province::all();
        return view('admin.motel.add')->withProvince( $province );
    }
    public function postAddMotel (Request $request){
        $motel = new Motel;
        $motel->name = $request->name;
        $motel->number_room = $request->number_room;
        $motel->area = $request->area;
        $motel->price = $request->price;
        $motel->price_water = $request->price_water;
        $motel->price_electric = $request-> price_electric;
        $motel->description = $request-> description;
        $motel->address = $request-> address;
        $motel->phone = $request-> phone;
        $motel->lat = 1;
        $motel->lng = 1;
        $motel->mezzanine = 1;
        $motel->internet = 1;
        $motel->status = 1;
        $motel->ward_id = $request->ward;
        $motel->user_id = 1;
        $motel->admin_id = Auth::guard('admin')->user()->id;
        $motel->save();
        // return view('admin.motel.list');
    }
}
