@extends('master')
@include('nav')
@foreach($vehicle as $data)
@endforeach



<body>

  <div class="container">
 
    <div class="row">
      <form method="GET" action="search">
        <div class="row" id="ro2">

          <div class="col-lg">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" class="form-control" id="from" name="from" aria-describedby="emailHelp" value="{{$data->from}}" placeholder="From">
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="to" class="form-control" placeholder=" to" name="to" required="required" value="{{$data->to}}" pattern="^[A-Za-z][A-Za-z ,.'-]+">
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="form-group">
              <div class="form-label-group">

                <input type="date" id="date" class="form-control" placeholder=" Date" name="date" required="required" value="{{$data->date}}">
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="form-group">
              <div class="form-label-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Both</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">day</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input form-check-radio-border-radius" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">night</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="form-group">
              <div class="form-label-group">
                <input type="submit" class="btn btn-info btn-block" id="register" name="search" value="Search"></input>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-2">

        <h5>Travels</h5>


        @foreach($vehicle as $data)

        <div class="form-check">
          <input class="form-check-input travel" type="checkbox" value="{{$data->id}}">
          <label class="form-check-label" for="flexCheckDefault">
            {{ucfirst( $data->travels)}}
          </label>
        </div>
        @endforeach
        <h5>Bus Type</h5>
        @foreach($vehicle as $data)
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="{{$data->bus_type}}" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            {{ucfirst($data->bus_type)}}
          </label>
        </div>
        @endforeach
      </div>


      <div class="col-md-10">
        <div class="container ">
          <div class="row">
            <div class="col offset-md-10">


              <select class="form-select" aria-label="Default select example">
                <option selected> Sort By</option>
                <option >Available Seat</option>
                <option >Price</option>
                <option >Operator Name</option>
              </select>


            </div>
          </div>
          <div class="row ">
            <div class="col-md-4">

              <p>{{ucfirst($data->to)}}</p>

            </div>
            <div class="col-md-3">
              <p>Date:{{$data->date}}</p>
            </div>
            <div class="col-md-5 ">
              <button type="button" class="btn btn-outline-secondary btn-sm float-right">Next</button>
              <button type="button" class="btn btn-outline-secondary btn-sm float-right">Previous</button>
            </div>
          </div>
        </div>



        <table class="table">
          <thead>
            <tr>
              <th scope="col">Travels</th>
              <th scope="col">Bus Type</th>
              <th scope="col">Departure Time</th>
              <th scope="col">Fare</th>
              <th scope="col">seats available</th>
            </tr>
          </thead>
        </table>
        @foreach($vehicle as $data)
        
   {{$data->id}}
        <div id="accordion">
            <div class="card-header" id="headingOne{{$data->id}}">
              <h5 class="mb-0">
                <button class="btn btn-block" data-toggle="collapse" data-target="#collapseOne{{$data->id}}" aria-expanded="true" aria-controls="collapseOne{{$data->id}}">
                  <table class="table">
                    <tbody>
                                <td>{{ucfirst($data->travels)}}</td>
                                <td>{{ucfirst($data->bus_type)}}</td>
                                <td>{{$data->depart_time}}</td>
                                <td>{{$data->fare}}</td>
                                <?php $count=0;
?>@foreach($books as $bookval)
<?php $count=$count+1;?>
@endforeach
                                <td><?php echo (15-$count) ?></td>
                    </tbody>
                  </table>
                </button>
              </h5>
            </div>
            <div id="collapseOne{{$data->id}}" class="collapse" aria-labelledby="headingOne{{$data->id}}" data-parent="#accordion">
              <div class="card-body">
                <div class="container checkclass" id="checkclass" name="con">
                  <div class="container one">
                    <form method="get" action="check" name="form{{$data->id}}" onclick="getform(this)" id="form1">
                      <div class="row">
                        <input type="hidden" name="vid" value="{{$data->id}}">
                        <div class="col col-1 offset-1">
                          <div class="form-check">

                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A1{{$data->id}}" <?php  foreach($books as $bookval){if (($bookval->seat)=="A1".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?> onchange="return validate(this)">

                          </div>
                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A2{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A2".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>

                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A3{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A3".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">

                          </div>
                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A4{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A4".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col offset-2 col-1 ">
                        <i class="fas fa-circle fa-1x" style="color: red; margin-top:10p"><span style="color:teal">Booked</span></i>
                        </div>

                      </div>
                      <div class="row mt-5">
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A5{{$data->id}}" <?php  foreach($books as $bookval){if (($bookval->seat)=="A5".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?> onchange="return validate(this)">

                          </div>
                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A6{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A6".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">

                          </div>

                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A7{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A7".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">

                          </div>

                        </div>
                        <div class="col col-1">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A8{{$data->id}}" 
                              <?php  foreach($books as $bookval){if (($bookval->seat)=="A8".$data->id) { 
                              echo "disabled style='background-color : red ;cursor:text'";}} ?>  placeholder="{{$bookval->seat}}" onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col col-1">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="A9{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="A9".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">

                          </div>
                        </div>
                        <div class="col offset-2 col-1 ">
                        <i class="fas fa-circle fa-1x" style="color:#a5a5a5; margin-top:10p"><span style="color:teal">Available</span></i>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B1{{$data->id}}" <?php  foreach($books as $bookval){if (($bookval->seat)=="B1".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?> onchange="return validate(this)">
                          </div>
                        </div>

                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B2{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="B2".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col col-1 offset-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B3{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="B3".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col col-1 offset-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B4{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="B4".$data->id) { 
                             echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B5{{$data->id}}"  <?php  foreach($books as $bookval){if (($bookval->seat)=="B5".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?>onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col col-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="check" value="B6{{$data->id}}" <?php  foreach($books as $bookval){if (($bookval->seat)=="B6".$data->id) { 
                               echo "disabled style='background-color : red ;cursor:text'";}} ?> onchange="return validate(this)">
                          </div>
                        </div>
                        <div class="col offset-2 col-1 ">
                        <i class="fas fa-circle fa-1x" style="color:#5bcd3e; margin-top:10p"><span style="color:teal">Selected</span></i>
                        </div>
                      </div>

                    
                  </div>
                  <div class="row mt-5">
                    <div class="card" style="width: 100%;">
                      <div class="card-header">Biratnagar to pokhara</div>
                      <div class="card-body ">

                        <div class="col-5">
                          <div class="form-group">
                            <label>Seat Numbers:</label>
                            <input type="email" class="form-control form-control-sm" id="checkvalue" aria-describedby="emailHelp" readonly>
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-group">
                            <label>Total Price:</label>
                            <input type="email" class="form-control form-control-sm" id="checkvalue2" aria-describedby="emailHelp" readonly>
                          </div>
                        </div>
                      
                        <button class="btn btn-primary btn-block" type="submit" name="{{$data->id}}">Continue Booking</button>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5 mb-5">
                    <div class="col-3">
                      <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#boarding" aria-expanded="false" aria-controls="collapseExample">
                        Boarding Points
                      </button>

                      <div class="collapse" id="boarding">
                        <div class="card card-body p-0">
                          <ul>
                            <li>Gaushala</li>
                            <li>Kalanki</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#dropping" aria-expanded="false" aria-controls="collapseExample">
                        Dropping Points
                      </button>

                      <div class="collapse" id="dropping">
                        <div class="card card-body p-0">
                          <ul>
                            <li>Itahari</li>
                            <li>Damak</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#policies" aria-expanded="false" aria-controls="collapseExample">
                        Booking Policies
                      </button>

                      <div class="collapse" id="policies">
                        <div class="card card-body p-0">
                          <ul>
                            <li>No return</li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <button class="btn btn-light m-0" type="button" data-bs-toggle="collapse" data-bs-target="#Amenities" aria-expanded="false" aria-controls="collapseExample">
                        Amenities
                      </button>

                      <div class="collapse" id="Amenities">
                        <div class="card card-body p-0">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <input type="hidden"  id="travels"   value="{{$data->travels}}"> 
        <input type="hidden"  id="travelsid" value="{{$data->id}}"> 
        <input type="hidden"  id="depart_time" value="{{$data->depart_time}}"> 
        @endforeach
      
      </div>
    </div>
</body>

<script type="text/javascript">
       $('.travel').click(function() {
        alert("kvo?");
        var travelname = [];
        $('.travel').each(function() {
            if ($(this).is(":checked")) {
                travelname.push($(this).val());
            }
        });
        name = travelname.toString();
        alert(name);

       
    });
    </script>

<script type="text/javascript">

let formvalue;
 function getform(a){
   formvalue=a.name;
   
 }
  function seatdisable(a){
    document.getElementById("myCheck").disabled = true
  }


  function validate(o) {
    var count = "";
    var total = ""; 
    
    for (i = 0; i < document.form1.check.length; i++) { 
      
      if (document.form1.check[i].checked) {
        total += document.form1.check[i].value + ' ';
        count++;
      }
    }
    if (total == "") {
      alert("selet one");
      document.getElementById("checkvalue").value = "";
      document.getElementById("checkvalue2").value = "";
    } else {
      document.getElementById("checkvalue").value = total;
      localStorage.setItem("seat",total);
      document.getElementById("checkvalue2").value = count * 1000;
      return false;
    }
    
  }
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    var date = document.getElementById("date").value;
    var travels = document.getElementById("travels").value;
    var depart_time = document.getElementById("depart_time").value;
    var travelsid = document.getElementById("travelsid").value;
    localStorage.setItem("from1", from);
    localStorage.setItem("to1", to);
    localStorage.setItem("date1", date);
    localStorage.setItem("travels1", travels);
    localStorage.setItem("depart_time", depart_time);
    localStorage.setItem("travelsid", travelsid);
    

</script>