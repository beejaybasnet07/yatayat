<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginAuth;

use App\Models\Register_user;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Vehicle;

class Registeruser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Register_user;
        $data->name=$request->get('name');
        $data->district=$request->get('district');
        $data->city=$request->get('city');
        $data->gender=$request->get('gender');
        $data->phone=$request->get('phone');
        $data->email=$request->get('email');
        $data->age=$request->get('age');
        $data->password= md5($request->get('password'));
        $data->save();
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register_user  $register_user
     * @return \Illuminate\Http\Response
     */
    public function show(Register_user $register_user)
    {
        $user=Register_user::all();
        return view('login',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register_user  $register_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Register_user $register_user)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register_user  $register_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register_user $register_user,$id)
    {   $data=Register_user::find($request->id);
      echo  $data->name=$request->get('name');
      echo  $data->district=$request->get('district');
       echo  $data->city=$request->get('city');
       echo $data->gender=$request->get('gender');
      echo   $data->phone=$request->get('phone');
       echo $data->email=$request->get('email');
       echo $data->age=$request->get('age');
       echo $data->password= md5($request->get('password')); 
       $data->save();
       session()->flash('update',' Your Record is Successfully Updated.'); 
       return redirect('userprofile');

        
        
    }
    public function updateuserdata(Request $request){

        $data=Register_user::find($request->id);
        $data->name=$request->get('name');
        $data->district=$request->get('district');
        $data->city=$request->get('city');
        $data->gender=$request->get('gender');
        $data->phone=$request->get('phone');
        $data->email=$request->get('email');
        $data->age=$request->get('age');
        $data->password= md5($request->get('password'));
        $data->save();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register_user  $register_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register_user $register_user)
    {
        //
    }
    public function checklogin(Request $request)
    {    
        
        if(session('email')!=""){

         $checkuser=Register_user::where('email',session('email'))->get();
         foreach( $checkuser as $key => $c){
         session(['id' => $c->id]);
         }
         $bookdata=Book::where('pid',session('id'))->where('status',0)->get();
         $bookingcancle=Book::where('pid',session('id'))->where('status',1)->get();
         return view('userprofile',['userdata'=>$checkuser, 'bookdata'=>$bookdata, 'bookingcancle'=>$bookingcancle]);
         }
         else
        {     
          $checkuser=Register_user::where('email',$request->input('email'))
                            ->where('password',md5($request->input('password')))
                            ->get();
         if( $checkuser){
         $request->session()->put('email',$request->input('email'));
         foreach( $checkuser as $key => $c){
            session(['id' => $c->id]);
            }

         $bookdata=Book::where('pid',session('id'))->where('status',0)->get();
         $bookingcancle=Book::where('pid',session('id'))->where('status',1)->get();
         /*
        $ac=DB::table('Vehicles')
            ->chunkById(100, function ($bookdata) {
              foreach ($bookdata as $user) {
            DB::table('books')
                ->where('id', $user->vid)->get();
        }
    });*/
         return view('userprofile',['userdata'=>$checkuser, 'bookdata'=>$bookdata, 'bookingcancle'=>$bookingcancle]);
        }
        else
        {
            return view('login');
        }
                            
    }
    }    
    public function cancle($id){
/*
          DB::table('books')
         ->where('seat', $id)
         ->update(['status' => 1]);*/
         session()->flash('cancle',' Your Booking is Successfully Cancelled.');
         

         return redirect('userprofile');
         
        
    }         
             
    

}
