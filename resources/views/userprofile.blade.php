@extends('master')
@include('nav')



<?php
date_default_timezone_set('Asia/Kathmandu');
$datetime = date("Y-m-d H:i:s");
$date_time = strtotime($datetime); ?>

<body>
    @if(((session()->has('cancle'))or((session()->has('update')))))
    <div class="row">
        <div class="col-4 offset-8 mt-3 mr-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('cancle')}}{{session('update')}}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
        @endif
        <div class="container rounded  mt-5 mb-5">
            <nav class="navbar navbar-light" style="background-color:#f8f9fa;">
                <a class="navbar-brand" href="">
                    <i class="fas fa-bus-alt fa-3x" style="color: #007bff;"></i>

                </a>
                <div class="float-right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Update Profile</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel" style="color:chocolate;">PROFILE SETTING</h2>
                                    <i class=" btn-close fa fa-times-circle fa-2x" data-bs-dismiss="modal" type="button" aria-hidden="true"></i>
                                </div>
                                <div class="modal-body">

                                    <h7><label for="inputlg" style="color:blue;">Leave as it is to use existing detail</label></h7><br><br>
                                    @foreach($userdata as $data)


                                    
                                    <form  action="update/{{$data->id}}" method="post">
                                    
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input class="form-control input-lg" id="name" type="text" name="name" value="{{$data->name}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact">Contact</label>
                                                    <input class="form-control input-lg" id="phone" type="number" name="phone" value="{{$data->phone}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input class="form-control input-lg" id="inputlg" type="text" name="email" value="{{$data->email}}" required readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Postal Code">District</label>
                                                    <input class="form-control input-lg" id="district" type="text" name="district" value="{{$data->district}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">City</label>
                                                    <input class="form-control input-lg" id="city" type="text" name="city" value="{{$data->city}}" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input class="form-control input-lg" id="password" type="text" name="password" placeholder="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Age</label>
                                                    <div class="form-label-group">
                                                        <input type="number" class="form-control" placeholder="age" name="age" id="age" value="{{$data->age}}" required="required" pattern="^[A-Za-z]{2,25}">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="radio" checked value="male">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit"> Save Changes</button>
                                </div>
                        </form>
                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <section style="background-color: #eee;">
                <div class="container py-5">


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{$data->name}}</h5>
                                    <p class="text-muted mb-1">{{$data->email}}</p>
                                    <p class="text-muted mb-4">{{$data->district}}{{$data->city}}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->name}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->email}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->phone}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Gender</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->gender}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Age</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->age}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->district}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-center">Booked</h4>
                            </div>
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th scope="col">Passenger</th>
                                                <th scope="col">Vechile</th>

                                                <th scope="col">From</th>
                                                <th scope="col">To</th>
                                                

                                                <th scope="col">Date</th>
                                                <th scope="col">Seat</th>
                                                <th scope="col">Status</th>
                                               
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bookdata as $bookval)

                                            <tr>
                                                
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>


                                                <td></td>
                                                <td></td>
                                                <td>{{$bookval->seat}}</td>
                                                <td>
                                                    <p class=" font-weight-bold text-success">BOOKED</p>
                                                </td>
                                                <td><?php
                                                    date_default_timezone_set('Asia/Kathmandu');
                                                    $ab = strtotime($bookval->created_at);

                                                    if ($date_time > $ab) {
                                                    ?>
                                                        <button class=" btn btn-danger btn-sm" disabled data-toggle="tool-tip" id="cancle" title="Cancle">Cancle</button></a>


                                                    <?php } else {
                                                    ?>
                                                        <a onclick="return confirm('Are you sure to cancle your booking?')" href="cancle/{{$bookval->seat}}">
                                                            <button class=" btn btn-danger btn-sm" data-toggle="tool-tip" id="cancle" title="Cancle" value="{{$bookval->seat}}">Cancle</button></a>
                                                    <?php }
                                                    ?>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-center">Booking Cancelled</h4>
                            </div>
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th scope="col">Passenger</th>
                                                <th scope="col">Vechile</th>

                                                <th scope="col">From</th>
                                                <th scope="col">To</th>
                                            

                                                <th scope="col">Date</th>
                                                <th scope="col">Seat</th>
                                                <th scope="col">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bookingcancle as $canclled)
                                            <tr>
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>
                                                <td><?php  ?></td>
                                                <td> {{$canclled->seat}}</td>
                                                <td>
                                                    <p class=" font-weight-bold text-info">Cancelled</p>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        </div>
        </section>
    </div>
@include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





    <script>
        $("#updateform").submit(function(e) {

            e.preventDefault();
            let name = $("#name").val;
            let district = $("#district").val();
            let city = $("#city").val();
            let gender = $("#gender").val();
            let phone = $("#phone").val();
            let age = $("#age").val();
            let password = md5($("#password").val());
            // echo(name);
            $.ajax({
                url: "{{route('userupdate')}}",
                type: "put",
                data: {
                    name: name,
                    district: district,
                    city: city,
                    gender: gender,
                    phone: phone,
                    age: age,
                    password: password

                },
                success: function(response) {

                }
            });
        });
    </script>


</body>