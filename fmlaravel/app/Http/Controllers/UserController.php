<?php

namespace App\Http\Controllers;
use App\Province;
use App\District;
use App\Motel;
use Illuminate\Http\Request;
use View;

use App\Http\Requests;

class UserController extends Controller
{
   public function getAddMotel (){
        $province = Province::all();
        $district = District::all();
        return View::make('users.pages.add', compact('province', 'district'));
    }

  public function postAddMotel(Requests $request){
  		$motel = new Motel;
        $motel->name = $request->name;
        $motel->number_room = $request->number_room;
        $motel->area = $request->area;
        $motel->price = $request->price;
        $motel->description = $request-> description;
        $motel->address = $request-> address;
        $motel->phone = $request-> phone;
        $motel->lat = 1;
        $motel->lng = 1;
        $motel->status = 1;
        $motel->ward_id = $request->ward;
        $motel->user_id = 1;
        $motel->admin_id = Auth::guard('admin')->user()->id;
        $motel->save();
  }

}
