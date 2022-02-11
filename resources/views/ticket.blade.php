@extends('master')
<div class="container" style="background-color:#f8f9fa;">
    <nav class="navbar navbar-light " style="background-color:#f8f9fa;">
        <a class="navbar-brand" href="..\index.php">
      
            <span class="font-weight-normal text-info">Yatayat</span></a>
        </a>
        
 <a style="color:skyblue;" data-toggle="tooltip"  title="myprofile" class="nav-link" href="../userprofile"><i class="fa fa-user fa-2x"></i></a>

    </nav>
    <div class="container" style="border:2px solid whitesmoke;margin-bottom:10px;border-radius:10px; background-color:white;">
        <div class="row">
            <div class="col">
                <h1 style="color: greenyellow; padding-left:100px;">Congratulations your booking is successful !!!</h1>
                <div class="col pr-5" id="ple">
                    <h5> Please carry required verification documents for validation.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="border: 2px solid whitesmoke;background-color:rgb(230,225,225,0.2);padding-top:20px;border-radius:5px;">
        <div class="row">
            <div class="col pl-2">

                <div class=" text-center float-left">
                    <button class="btn btn-info profile-button" name="print" type="submit">Print</button>
                </div>
            </div>
            <div class="col offset-5">
                <form method="POST" action="">
                <!--
                    <input type="hidden" name="receiver_email" id="receiver_email" value="" />
                    <input type="hidden" name="receiver_pname" id="receiver_pname" value="" />
                    <input type="hidden" name="receiver_pre" id="receiver_pre" value="">
                    <input type="hidden" name="receiver_tname" id="receiver_tname" value="">
                    <input type="hidden" name="receiver_tdate" id="receiver_tdate" value="">
                    <input type="hidden" name="receiver_time" id="receiver_time" value="">
                    <input type="hidden" name="code" id="s_to" value="" />
                    <input type="hidden" name="code" id="code" value="" />
                    <input type="hidden" name="code" id="s_from" value="" />
                    <input type="hidden" name="code" id="class" value="" />
                    -->
                    <div class=" text-center float-right pb-3">
                        <button class="btn btn-info profile-button" type="submit" name="send" id="send">SendToMail</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2 mb-2" id="tcon1" style=" background-color: white;
              border-radius: 10px;
              border: 1px solid skyblue;">
                <div class="row">
                    <div class="col-md offset-1">
                        <h2 class="pt-md-1"> Passenger's Details</h2>
                        <hr>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md pl-5 ">
                        <h6>Passenger </h6>
                        <h3 id="name"></h3>
                    </div>
                </div>
                <div class="row">
                    


                    <div class="col-md pl-5">
                        <h6> phone</h6>
                        <h3 id="phone"></h3>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md pl-md-5">
                        <h6>Email</h6>
                        <h4 id="email"></h4>
                    </div>
                </div>


            </div>
            <div class="col-md-5 offset-md-1" id="con2">

                <div class="row">
                    <div class="col-md offset-md-1 pt-md-1">
                        <h2 class="pt-1"> <i class="fa fa-train" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp; Journey Details</h2>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md pl-5">
                        <h3>&nbsp;&nbsp;<span id="from"></span>

                            <i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;<span id="to"></span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md pl-5">
                        <h6>Travels Name</h6>
                        <h3 id="travel"></h3>
                    </div>
                    <div class="col-md">
                        <h6>Date</h6>
                        <h3 id="date"></h3>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md pl-5">
                        <h6> Seat Number</h6>
                        <h3 id="seatnumber">  </h3>
                    </div>


                    <div class="col-md">
                        <h6>Dropping off</h6>
                        <h3 id="dropping"> </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md pl-5">
                        <h6>Picking At</h6>
                        <h4 id="boarding"></h4>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md" id="bord">
            <h6> ** Please be at boarding station ahead of departure time.</h6>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  document.getElementById("seatnumber").innerHTML = localStorage.getItem("seat");
    document.getElementById("from").innerHTML = localStorage.getItem("from1");
    document.getElementById("to").innerHTML = localStorage.getItem("to1");
    document.getElementById("date").innerHTML = localStorage.getItem("date1");
    document.getElementById("travel").innerHTML = localStorage.getItem("travels1");
    document.getElementById("travelsid").innerHTML = localStorage.getItem("travelsid");
    document.getElementById("depart_time").innerHTML = localStorage.getItem("depart_time");
</script>

<script type="text/javascript">

$( document ).ready(function() {
    
    document.getElementById("name").innerHTML= localStorage.getItem("user_name");
    document.getElementById("email").innerHTML=localStorage.getItem("user_email");
    document.getElementById("phone").innerHTML=localStorage.getItem("user_phone");
    document.getElementById("boarding").innerHTML=localStorage.getItem("user_boarding");
    document.getElementById("dropping").innerHTML=localStorage.getItem("user_dropping");
  


   
  
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#send").on("click", function(e) {
            alert("checked");
            e.preventDefault();
            var name = $('#receiver_pname').val();
            var email = $('#receiver_email').val();
            var train = $('#receiver_tname').val();
            var date = $('#receiver_tdate').val();
            var pre = $('#receiver_pre').val();
            var clas = $('#class').val();
            var time = $('#receiver_time').val();
            var sto = $('#s_to').val();
            var sfrom = $('#s_from').val();
            var code = $('#code').val();
            alert(name);
            $.ajax({
                url: "mail/index.php",
                type: "POST",
                data: {
                    username: name,
                    useremail: email,
                    usertrain: train,
                    userdate: date,
                    userpre: pre,
                    userclass: clas,
                    userto: sto,
                    userfrom: sfrom,
                    usertime: time,
                    code: code
                },
                success: function(data) {

                    if (data == "1") {
                        alert(" sorry !! mail not delevered.'\r\n'\check your EmailId and try again.'\n'Thank you.");

                    } else {
                        alert("mail delevired sucessfully.Thank you.");
                    }

                }
            });
        });
    });
</script>
