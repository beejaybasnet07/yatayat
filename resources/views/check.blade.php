@extends('master')
@include('nav');
<style>
    #p1,
    #p2,
    #p3,
    #p4 {
        color: #007bff;
    }
</style>


<div class="container pt-5" style="background-color: #fbfbfb;">

    <div class="row">
        <div class="col-md-5  offset-md-2 mb-5 " id="main" style="background-color:white;border:1px solid white;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
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
                <div class="col-md-6 offset-md-1 mt-2">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label>Boarding Point</label>
                            <input type="text" class="form-control" placeholder="BordingStation" name="boarding" id="boarding" required="required">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label>dropping Point</label>
                            <input type="text" class="form-control" placeholder="DroppingStation" name="dropping_point" id="dropping_point" required="required">
                        </div>
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
            <div class="row px-4 py-2">
                <div class="col mt-2  " style="background-color: #fbfbfb;height:50px;justify-content:center">
                    <a href="#"> GO BACK</a>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col mt-2">
                    <input class="btn btn-success btn-block" data-bs-toggle="modal" name="submit" onclick="verify()" data-bs-target="#exampleModal" value="PROCEED TO CONFORMATION"></input>
                </div>
            </div>

            <div class="row" style=" margin-top:10px;background-color:#535455;height:2px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
                <div class="col mt-5">
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-1 mt-2 mb-2" style="background-color: white; border:1px solid white;">
            <h5 class="px-3 py-3">TRAVEL DETAILS</h5>
            <div class="row px-3 pt-3" style="justify-content:center;align-items:center;background-color:#fbfbfb">
                <div class="col">
                    <div class="row">
                        <h6>Route:<span id="from"></span><span id="to"></span></h6>
                    </div>
                    <div class="row">
                        <h6>Date:<span id="date"></span></h6>
                    </div>
                    <div class="row">
                        <h6>Seats:<span id="two"></span></h6>
                    </div>
                    <div class="row">
                        <h6>Travel:<span id="travel"></span></h6>
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



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-right" style="background-color: #fbfbfb;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CONFIRM YOUR DETAILS</h5>
                    <i class=" btn-close fa fa-times-circle fa-2x" data-bs-dismiss="modal" type="button" aria-hidden="true"></i>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col" style="background-color:white;border:1px solid white;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">

                                <form method="post" action="book" enctype="multipart/form-data">
                                    @csrf
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
                                                    <input type="text" id="p1" name="name" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label> Email Address</label>

                                                    <input type="text" id="p2" name="email" readonly>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mt-2">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label>Mobile Number</label>

                                                    <input type="text" id="p3" name="phone" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label>Boarding Point</label>

                                                    <input class="form-group" type="text" id="p4" name="boarding_point" readonly>
                                                </div>
                                                <div class="form-label-group">
                                                    <label>Dropping Point</label>

                                                    <input class="form-group" type="text" id="p5" name="dropping_point" readonly>
                                                </div>
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
                                    <hr>


                                    <div class="row" style="background-color:#535455;height:2px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
                                        <div class="col mt-5">
                                        </div>
                                    </div>
                            </div>
                            <div class="col" style="background-color: white; border:1px solid white;">
                                <h5 class="px-3 py-3">TRAVEL DETAILS</h5>
                                <div class="row px-3 pt-3" style="justify-content:center;align-items:center;background-color:#fbfbfb">
                                    <div class="col">

                                        <div class="row">
                                            <h6>Route:<span id="modelfrom"></span><span id="modelto"></span></h6>
                                        </div>
                                        <div class="row">
                                            <h6>Date:<span id="modeldate"></span></h6>
                                        </div>
                                        <div class="row">
                                            <h6>Seats:<span id="modeltwo"></span></h6>
                                        </div>
                                        <div class="row">
                                            <h6>Travel:<span id="travels"></span></h6>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="px-3 py-3">PAYMENT DETAILS</h5>

                                <div class="row">

                                    <div class="col" style="background-color:#fbfbfb">
                                        <div class="row px-3 pt-3">
                                            <h6>Per Ticket Cost: Rs 1,000</h6>
                                        </div>
                                        <div class="row px-3">
                                            <h6>Total Cost: Rs 1,000</h6>
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
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="seat" name="seat">
                    <input type="hidden" id="dateval1" name="dateval">
                    <input type="hidden" id="travelsid1" name="travelsid">
                    <input type="hidden" id="depart_time1" name="depart_time">
                    <input type="hidden" id="" name="cost" value="2450">

                    <button type="submit" class="btn btn-success btn-block">Proceed To Payment</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("two").innerHTML = localStorage.getItem("seat");
    document.getElementById("from").innerHTML = localStorage.getItem("from1");
    document.getElementById("to").innerHTML = localStorage.getItem("to1");
    document.getElementById("date").innerHTML = localStorage.getItem("date1");
    document.getElementById("travel").innerHTML = localStorage.getItem("travels1");
    document.getElementById("travelsid").innerHTML = localStorage.getItem("travelsid");
    document.getElementById("depart_time").innerHTML = localStorage.getItem("depart_time");

    //for-model-data 
    function verify() {



        let name=document.getElementById("name").value;
        let email= document.getElementById("email").value;
        let boarding=document.getElementById("boarding").value;
        let phone=document.getElementById("phone").value;
        let dropping=document.getElementById("dropping_point").value;
         alert(name);
        localStorage.setItem("user_name",name );
        localStorage.setItem("user_email",email );
        localStorage.setItem("user_phone",phone );
        localStorage.setItem("user_boarding",boarding);
        localStorage.setItem("user_dropping",dropping );
        
        
       


        document.getElementById("travels").innerHTML = localStorage.getItem("travels1");
        document.getElementById("modeltwo").innerHTML = localStorage.getItem("seat");
        document.getElementById("modelfrom").innerHTML = localStorage.getItem("from1");
        document.getElementById("modelto").innerHTML = localStorage.getItem("to1");
        document.getElementById("modeldate").innerHTML = localStorage.getItem("date1");
        document.getElementById("p1").value = document.getElementById("name").value;
        document.getElementById("p2").value = document.getElementById("email").value;
        document.getElementById("p3").value = document.getElementById("phone").value;
        document.getElementById("p4").value = document.getElementById("boarding").value;
        document.getElementById("p5").value = document.getElementById("dropping_point").value;
        //this is for submitting form data
        document.getElementById("seat").value = localStorage.getItem("seat");
        document.getElementById("dateval1").value = localStorage.getItem("date1");
        document.getElementById("depart_time1").value = localStorage.getItem("depart_time");
        document.getElementById("travelsid1").value = localStorage.getItem("travelsid");
       
        //storing  values from input to make ticket 
      


    }
</script>
@include('footer')