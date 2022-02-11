<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Vehicle;
use Illuminate\Http\Request;
 use App\Http\Controllers\Redirect;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    { 
        
       $from=$request['from'];
       $to=$request['to'];
       $date=$request['date'];
        $vehicle=Vehicle::where('from','=',$from)
                  ->where('to','=',$to)
                  ->where('date','=',$date)
                   ->get();
       // $vehicle=Vehicle::all();
       $book=Book::where('status',0)->get();
       if( session('email')==""){
       session()->flash('notlogin',' Please login First !!.');
    }
       if($vehicle){
        return view('search',['vehicle'=>$vehicle],['books'=> $book]);
       }
       else{
        
           $session1=$request->session()->put('session1','own');
           echo "<script>alert('RESULT NOT FOUND');</script>";
           return view('/index');
       }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return view('check');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show()

    {
   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
    public function showdata(Request $request){
         echo "man";

           /* $data=$request->travelname;
             echo $data;
            $vehicle=Vehicle::whereIN('id', explode(',',$data))
            ->get();
            dd($vehicle);*/
        
    }
    public function showajax(Request $request)
    {
         
         echo"okey";           
        
    }
}
