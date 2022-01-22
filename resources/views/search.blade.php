@extends('master')
@include('nav')
@foreach($vehicle as $data)
@endforeach

<div class="container">
  <div>
    <form method="GET" action="search">
      <div class="row" id="ro2">

        <div class="col-lg">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" id="exampleInputEmail1" name="from" aria-describedby="emailHelp" value="{{$data->from}}" placeholder="From">
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="name" class="form-control" placeholder=" to" name="to" required="required" value="{{$data->to}}" pattern="^[A-Za-z][A-Za-z ,.'-]+">
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="form-group">
            <div class="form-label-group">

              <input type="date" id="name" class="form-control" placeholder=" Date" name="date" required="required" value="{{$data->date}}">
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
  <hr>
  <div class="row py-3">
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
              <option value="1">Available Seat</option>
              <option value="2">Price</option>
              <option value="3">Operator Name</option>
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

      <div class="container showvechiledata">
        <div class="card">
          <div class="card-header">
            <table class="table ml-6">
              <thead>
                <tr>
                  <th scope="col">Travels</th>
                  <th scope="col">Bus Type</th>
                  <th scope="col">Departure Time</th>
                  <th scope="col">Fare</th>
                  <th scope="col">seats available</th>
                </tr>
              </thead>
              <tbody>
                @foreach($vehicle as $data)

                <tr>
                  <td>{{ucfirst($data->travels)}}</td>
                  <td>{{ucfirst($data->bus_type)}}</td>
                  <td>{{$data->depart_time}}</td>
                  <td>{{$data->fare}}</td>
                  <td><button class="btn btn-primary" id="divshow" onclick="showhide()">click</button></td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="container checkclass" id="checkclass" name="con">
      <div class="container one">
        <form method="GET" action="check" name="form1">
          <div class="row">
            <div class="col col-1 offset-1">
              <div class="form-check">

                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A1" onchange="return validate(this)">

              </div>
            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A2" onchange="return validate(this)">
              </div>
            </div>

            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A3" onchange="return validate(this)">

              </div>
            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A4" onchange="return validate(this)">
              </div>
            </div>

          </div>
          <div class="row mt-5">
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A5" onchange="return validate(this)">

              </div>

            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A6" onchange="return validate(this)">

              </div>

            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A7" onchange="return validate(this)">

              </div>

            </div>
            <div class="col col-1">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A8" onchange="return validate(this)">

              </div>
            </div>
            <div class="col col-1">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="A9" onchange="return validate(this)">

              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B1" onchange="return validate(this)">
              </div>
            </div>

            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B2" onchange="return validate(this)">
              </div>
            </div>
            <div class="col col-1 offset-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B3" onchange="return validate(this)">
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col col-1 offset-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B4" onchange="return validate(this)">
              </div>
            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B5" onchange="return validate(this)">
              </div>
            </div>
            <div class="col col-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="check" value="B6" onchange="return validate(this)">
              </div>
            </div>
          </div>
          <button class="btn-group-lg btn-primary mt-5" type="submit">Continue Booking</button>
        </form>
        <div>
          <div><label>Seat Numbers:</label>
            <input type="text" name="" id="checkvalue"><br>
            <label>Total Price:</label>
            <input type="text" name="" id="checkvalue2">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')


<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

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
    $ajax({
      url: 'search',
      type: 'POST',
      dataType: 'html',
      data: "travelname" + name,
      success: function(response) {
        console.log(response);
        $('.showvechiledata').html(response);

      }
    });
  });

  document.getElementById("checkclass").style.display = "none";
  var a;

  function showhide() {
    if (a == 1) {
      document.getElementById("checkclass").style.display = "none";
      return a = 0;
    } else {
      document.getElementById("checkclass").style.display = "flex";
      return a = 1;
    }
  }

  function validate(o) {
    var count = "";
    var total = "";
    for (i = 0; i < document.form1.check.length; i++) {
      if (document.form1.check[i].checked) {
        total += document.form1.check[i].value + ',';
        count++;
      }
    }
    if (total == "") {
      alert("selet one");
      document.getElementById("checkvalue").value = "";
      document.getElementById("checkvalue2").value = "";
    } else {
      document.getElementById("checkvalue").value = total;
      document.getElementById("checkvalue2").value = count * 1000;
      return false;
    }
  }
</script>