

@extends('master')

<body>
    <div class="container">
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col offset-lg-2">
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
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <table class="table">
                                       <tbody>
                                        <td>Makalu Yatayat</td>
                                        <td>Delux</td>
                                        <td>12:00pm</td>
                                        <td>1500</td>
                                        <td>25</td>
                                       </tbody>
                                    </table>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
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

                                        </form>
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

                                                <button class=" btn btn-primary  btn-block " type="submit">Continue Booking</button>

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
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
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

