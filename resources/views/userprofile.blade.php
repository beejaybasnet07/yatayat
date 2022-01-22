@extends('master')

<body>

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



                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control input-lg" id="inputlg" type="text" name="name" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input class="form-control input-lg" id="inputlg" type="number" name="phone" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input class="form-control input-lg" id="inputlg" type="text" name="email" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Postal Code">City</label>
                                                <input class="form-control input-lg" id="inputlg" type="text" name="city" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Station</label>
                                                <input class="form-control input-lg" id="inputlg" type="text" name="station" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control input-lg" id="inputlg" type="text" name="password" value="" placeholder="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Age</label>
                                                <div class="form-label-group">
                                                    <input type="number" class="form-control" placeholder="age" name="age" id="age" value="" required="required" pattern="^[A-Za-z]{2,25}">

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

                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save Changes</button>
                            </div>
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
                                <h5 class="my-3">John Smith</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
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
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
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
                                            <!-- <th scope="col">Time</th> -->

                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>



                                            <td></td>
                                            <td>
                                                <p class=" font-weight-bold text-success">BOOKED</p>
                                            </td>
                                            <td><?php
                                                //date_default_timezone_set('Asia/Kathmandu');
                                                //$ab = strtotime($row->timestamp);

                                                // if ($date_time > $ab) { 
                                                ?>
                                                <button class=" btn btn-danger btn-sm" disabled data-toggle="tool-tip" id="cancle" title="Cancle">Cancle</button></a>


                                                <?php //} //else { 
                                                ?>
                                                <a onclick="return confirm('Are you sure to delete this entry?')" href="">
                                                    <button class=" btn btn-danger btn-sm" data-toggle="tool-tip" id="cancle" title="Cancle">Cancle</button></a>
                                                <?php //} 
                                                ?>
                                            </td>
                                        </tr>
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
                                            <!-- <th scope="col">Time</th> -->

                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>



                                            <td></td>
                                            <td>
                                                <p class=" font-weight-bold text-success">BOOKED</p>
                                            </td>
                                            <td><?php
                                                //date_default_timezone_set('Asia/Kathmandu');
                                                //$ab = strtotime($row->timestamp);

                                                // if ($date_time > $ab) { 
                                                ?>
                                                <button class=" btn btn-danger btn-sm" disabled data-toggle="tool-tip" id="cancle" title="Cancle">Cancle</button></a>


                                                <?php //} //else { 
                                                ?>
                                                <a onclick="return confirm('Are you sure to delete this entry?')" href="">
                                                    <button class=" btn btn-danger btn-sm" data-toggle="tool-tip" id="cancle" title="Cancle">Cancle</button></a>
                                                <?php //} 
                                                ?>
                                            </td>
                                        </tr>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>