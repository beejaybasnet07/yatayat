<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginAuth;

use App\Models\Register_user;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

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
    {
        $registeruser=Register_user::find($id);
        return response()->json($registeruser);
        
        
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
        
       $vechileid=0;
        $checkuser=Register_user::where('email',$request->input('email'))
                            ->where('password',md5($request->input('password')))
                            ->get();
        if( $checkuser){
         $request->session()->put('email',$request->input('email'));
         
         $bookdata=Book::where('pid',session('id'))->where('status',0)->get();
         $bookingcancle=Book::where('pid',session('id'))->where('status',1)->get();
         foreach($bookdata as $a){
         $vechileid= $a->vid;
        }

         return view('userprofile',['userdata'=>$checkuser, 'bookdata'=>$bookdata, 'bookingcancle'=>$bookingcancle]);
        }
        else
        {
            return view('login');
        }
                            
         
    }             
             
    

}
