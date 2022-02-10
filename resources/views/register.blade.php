 @extends('master')
 

 <div class="container" style="background-color:#f4f7f7">
     <div class="row pl-md-5 pt-md-3">
         <i class="fas fa-bus-alt fa-3x" style="color: #007bff;"></i>
         <div class="col offset-md-9 mt-2">
             <p class="text-black-50 ">Already have an Account ?? &nbsp;<a href="login" class="stretched-link">LOGIN</a>
             <p>
         </div>

         <div class="col offset-md-1 pb-2">
             <strong>
                 <h4 class="text-black-50 "><u> Register your account now</u></h4>
             </strong>
         </div>
     </div>

     <div class="row">
         <div class="col-md  mb-5 pb-1" id="main" style="background:white;">
             <form method="get" action="a" enctype="multipart/form-data">
              @csrf
                 <h5 class="text-black-50 pl-5 pt-3 my-3">Personal Details</h5>
                 <div class="row" id="row1" style="background-color:#f4f7f7">
                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" >
                             </div>
                         </div>
                     </div>
                     <div class="col-md-2 pt-3 ml-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="number" class="form-control" placeholder="Age" name="age" id="age"  pattern="^[A-Za-z]{2,25}">
                             </div>
                         </div>
                     </div>

                     <div class="col-md-4 pt-3 ml-3">
                         <div class="form-group">
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="radio" value="male" checked>
                                 <label class="form-check-label" for="inlineRadio1">Male</label>
                             </div>

                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="radio" value="female">
                                 <label class="form-check-label" for="inlineRadio2">Female</label>
                             </div>

                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="radio" value="others">
                                 <label class="form-check-label" for="inlineRadio3">Others</label>
                             </div>
                         </div>
                     </div>
                 </div>

                 <h5 class="text-black-50 pl-5 my-3"> Address</h5>
                 <div class="row" id="row2" style="background-color:#f4f7f7">
                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="text" class="form-control" placeholder="City" name="district" id="district"  pattern="[A-Za-z]+">
                             </div>
                         </div>
                     </div>

                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="text" class="form-control" placeholder="Station" name="city" id="city" >
                             </div>
                         </div>
                     </div>
                 </div>

                 <h5 class="text-black-50  pl-5 my-3">Contact Details</h5>
                 <div class="row" id="row3" style="background-color:#f4f7f7">
                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="number" class="form-control" placeholder="eg.(98**********)" name="phone" id="phone"  pattern="^[98][0-9]{9}">
                             </div>
                         </div>
                     </div>

                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="email" class="form-control" placeholder="Email" name="email" id="email"  pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                             </div>
                         </div>
                     </div>
                 </div>

                 <h5 class="text-black-50  pl-5 my-3">Password</h5>
                 <div class="row" id="row4" style="background-color:#f4f7f7">
                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="password" class="form-control" placeholder="Must contain 8 characters" id="password" name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                             </div>
                         </div>
                     </div>
                     <div class="col-md-5 pt-3">
                         <div class="form-group">
                             <div class="form-label-group">
                                 <input type="password" class="form-control" placeholder="Retype Password" id="repassword" name="repassword"  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" onblur="check()">
                             </div>
                             <label id="lb"></label>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4 offset-md-1 pt-4 pb-3">
                         <input type="submit" class="btn btn-primary btn-block" id="loginbtn" name="submit" onclick="verify()" value="submit"></input>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <script>
     function check() {

         var text1 = document.getElementById("password").value;
         var text2 = document.getElementById("repassword").value;

         if (text1 != text2) {
             document.getElementById("lb").style.color = "red";
             document.getElementById('lb').innerHTML = "password do not match";
         } else {
             document.getElementById('lb').innerHTML = "";
         }
     }
 </script>