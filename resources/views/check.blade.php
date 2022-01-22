@extends('master')
@include('nav');


<div class="container pt-5" style="background-color: #fbfbfb;">

    <div class="row">


        <div class="col-md-5  offset-md-2 mb-5 " id="main" style="background-color:white;border:1px solid white;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">

            <form method="GET" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col py-2 px-2 " style="border:1px solid white;justify-content:center;align-items:center;background-color:#fbfbfb">
                        <h5 class="text-black-50 font-weight-bold">PASSENGER DETAILS</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Name of Passenger</label>
                                <input type="text" class="form-control" placeholder="Your Name" id="name" name="pname" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label> Email Address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="required" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mt-2">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" placeholder="eg.(98**********)" name="phone" id="phone" required="required" pattern="^[98][0-9]{9}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 mt-2" <div class="form-group">
                        <div class="form-label-group">
                            <label>Boarding Point</label>
                            <input type="text" class="form-control" placeholder="Station" name="station" id="station" required="required">

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mt-2 pl-md-5">
                        <h5>Payment Method</h5>
                        <p>Esewa</p>
                    </div>
                </div>
                <div class="row px-4 py-2" >
                    <div class="col mt-2  " style="background-color: #fbfbfb;height:50px;justify-content:center">
                        <a href="#"> GO BACK</a>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col mt-2">
                        <input type="submit" class="btn btn-success btn-block" id="loginbtn" name="submit" onclick="verify()" value="PROCEED TO CONFORIRMATION"></input>
                    </div>
                </div>
            </form>
            <div class="row" style="background-color:#535455;height:2px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
                <div class="col mt-5">
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-1 mt-2 mb-2" style="background-color: white; border:1px solid white;">
            <h5 class="px-3 py-3">TRAVEL DETAILS</h5>
            <div class="row px-3 pt-3" style="justify-content:center;align-items:center;background-color:#fbfbfb">
                <div class="col">

                    <div class="row">
                        <h6>Route:</h6>
                    </div>
                    <div class="row">
                        <h6>Date:</h6>
                    </div>
                    <div class="row">
                        <h6>Seats:</h6>
                    </div>
                    <div class="row">
                        <h6>Travel:</h6>
                    </div>
                </div>
            </div>
            <h5 class="px-3 py-3">PAYMENT DETAILS</h5>

            <div class="row">

                <div class="col" style="background-color:#fbfbfb">
                    <div class="row px-3 pt-3">
                        <h6>Per ticket Cost:</h6>
                    </div>
                    <div class="row px-3">
                        <h6>Total Cost:</h6>
                    </div>

                </div>
            </div>
            <h5 class="px-3 py-3">TIME REMAINING</h5>
            <div class="row mx-3" style="justify-content:center;align-items:center;background-color:#3484c3;height:80px;color:white;">
              
                <h6>540 Seconds Left</h6>
            </div>
        </div>
    </div>
</div>
@include('footer')