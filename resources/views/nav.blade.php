<style>#close:hover {color:red;opacity: 0.4;}</style>
<nav class="navbar navbar-expand-lg" style=" background-color: #71bfe3;width:100%;">
  <nav class="navbar" style="background-color: #71bfe3;">
    <a class="navbar-brand" href="">


      <span class="font-weight-normal text-white">Yatayat</span>
    </a>
  </nav>

  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{Route('main')}}" style="display:inline; color:white">Home</a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="aboutus" style="display:inline;color:white">About us</a>
      </li>

      <?php
      if (session('email') != "") { ?>
        <li class="nav-item">
          <a class="nav-link" href="/logout" style="display:inline;color:white">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="userprofile" style="display:inline;color:white"><i class="fa fa-user fa-1x"></i></a>
        </li><?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="register" style="display:inline;color:white">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login" style="display:inline;color:white">Login</a>
        </li><?php } ?>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="border-bottom: 0px solid #71bfe3">
  <div class="row">
    <div class="col-md-1 mt-1">
      <i class="fas fa-bus-alt fa-3x " style="color: #007bff; display:none;"></i>
    </div>
    <div class="col offset-md-8 mt-2 mb-2">
      <div class="dropdown float-right">
        <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          VEHICLE HIRE
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="Vehiclehire">Bus</a></li>
          <li><a class="dropdown-item" href="#">Car</a></li>
          <li><a class="dropdown-item" href="#">Jeep</a></li>
        </ul>
      </div>
      <!-- Example single danger button -->
      <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          BUS TICKETS
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View Ticket</a></li>

        </ul>
      </div>
      

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary" id="staticBackdropLabel">View Ticket</h5>
              <i class="fas fa-times fa-2x" id="close" data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;"></i>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ticket Number:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Eg:124xyba4677">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button " class="btn btn-primary btn-block">Search</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>