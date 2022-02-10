@extends('master')
@include('nav')
@foreach($user as $data)
@endforeach
<div class="container">
    <div class="row " style="border-radius:20px;box-shadow: 0 5px 5px rgba(0,0,0,.4);margin: 5em auto;">
        <div class="col-md-4 offset-md-4">
            <div class="row mt-md-3">
                <div class="col pl-md-3">
                    <h5 style=" color:#008080;" class="pl-4"> log into your Account</h5>
                    <hr>
                </div>
            </div>
            <div class="row ">
            <div class="col">
                <form method="POST" action="userprofile" >
                    @csrf
                    <div class="row ">
                        <input type="email" name="email" placeholder="Email" class="form-control my-md-2 p-md-2 " pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                    </div>
                    <div class="row">
                        <input type="password" name="password" placeholder="Password" class="form-control my-md-2 p-md-2">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn mt-3 mb-3 loginbtn">login</button>
                    </div>
                </form>
            </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <p>Don't have an account? <a href="#">Register Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')