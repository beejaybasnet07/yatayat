<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Register_user;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
    
        $checkuser=Register_user::where('email',session('email'))->get();
        
        foreach ($checkuser as $flight) {
          $request->session()->put('id',$flight->id);
            
        }
        date_default_timezone_set('Asia/Kathmandu');
         $new_time = date("Y-m-d H:i:s", strtotime('3 hours'));
        
       
        $data=new Book;
        
        //$data->name=$request->get('name');
       // $data->district=$request->get('email');
        $data->cost=$request->get('cost');
        $data->date=$request->get('dateval');
        $data->seat=$request->get('seat');
        $data->pid=session('id');
        $data->vid=$request->get('travelsid');
        $data->status=0;
        $data->bording_point=$request->get('boarding_point');
        $data->dropping_point=$request->get('dropping_point');
        $data->created_at=$new_time;
         //$data->depart_time=$request->get('depart_time');
       
        
    //dd($data);
        $data->save();
        return view('ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
