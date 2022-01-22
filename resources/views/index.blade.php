@extends('master')
@include('nav')

<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


<div class="container mb-5 ">
    <div class="container" id="imgcon">
    
        <form method="GET" action="search">
            <div class="row">
                <div class="col-md-12 pt-md-5">
                    <h1 class="font-weight-bold" id="indexsearch">Search For Buses</h1>
                </div>
                <div class="col-md-12 pb-md-5">
                    <h5 class="pt-2 text-black-50" id="indexslogon">make your journey easier and faster</h5>
                </div>
            </div>
            <div class="row" id="form-box">
                <div class="col-lg-2 offset-sm-1 col-12  mb-2">
                    <input type="text" class="search-field location" placeholder="FROM" name="from" required>
                </div>
                <div class="col-lg-2  offset-sm-1  col-md-12  mb-2">
                    <input type="text" class="search-field location" placeholder="TO" name="to" required>
                </div>
                <div class="col-lg-2  offset-sm-1 col-md-12 mb-2 ">
                    <input class="search-field date" type="date" name="date" required>
                </div>
                <div class="col-lg-2 offset-sm-1  col-md-12  mb-2">
                    <button class="search-btn" type="submit" data-placement="top" title="Search" name="search">Search</button>
                </div>
            </div>
    </div>
    </form>

    <div class="container my-4">

    

        <h1>Tour Packages </h1>
        <h2>Explore Nepal</h2>


        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">SINDHUPALCHOK</h4>
                                    <h2>Bungy Nepal</h2>
                                    <p class="card-text">The Last Resort offers amazing adventures in spectular seetings,including the world famous bungy jump,the amazing new Tandem Swing, and thrilling white Water Rafting.The
                                        natural surroundings and the spa make the resort also a grreat detination those looking to just relax.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">KATHMANDU</h4>
                                    <h3> Kathmandu Paragliding</h3>
                                    <p class="card-text">Paragliding in kathmandu is now a reality.
                                        20 min flight at 2100m above sea level in Godawari.Panorama view of Highest Peaks and Mountains.City and Valley View from Eagle eye.
                                        Soar above the clouds.View of the only botanical garden of Nepal.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">KASKI</h4>
                                    <h3>Pokhara Sightseeing </h3>
                                    <p class="card-text">There are numerous temples and gumbas in and around pokhara valley.Many temples serve s combines places of worship for hindus and Buddhist.
                                        Some of the popular Temples and gumbas are :Taal Barahi temple,Bindhyabasini Temple.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


    </div>
    <div class="container" id="con" style="background-color:#39c9dc;">
        <div class="row">
            <div class="col pl-5 pt-3">
                <h2 id="book">Book yatayat seats in 3 steps</h2>
                <p id="bookp">Yatayat provies easier and faster bookings</p>
            </div>
        </div>
        <div class="card-columns mt-2 pb-2">
            <div class="card text-center">
                <blockquote class="blockquote mb-0 card-body">
                    <img src="images\search.png">
                    <footer class="blockquote-footer">
                        <h5> Search yatayat</h5>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <blockquote class="blockquote mb-0 card-body">
                    <img src="images\book.png">

                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            <h5> Book seats</h5>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <blockquote class="blockquote mb-0 card-body">
                    <img src="images\ccard.png">
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            <h5>
                                Pay and Relex
                            </h5>
                        </small>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>



</div>
@include('footer')
<!-- crousal -->

<?php // include('inc\footer.php') 
?>