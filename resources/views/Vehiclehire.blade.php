@extends('master')
@include('nav')
<style>
.fas:hover {color:red;opacity: 0.4;}
</style>
<body class="bg-light">

    <div class="container-fluid mt-5">

        <div class="card">
            <div class="card-header">
                <div class="alert alert-secondary" role="alert">
                    <span class="text-primary h4">SEARCH BUSES TO HIRE</span>
                </div>
            </div>
            <div class="card-body">
                <form class="row g-4">
                    <div class="col-auto offset-md-2">
                        <input type="search" class="form-control" id="inputPassword2" placeholder="FROM">
                    </div>
                    <div class="col-auto">
                        <input type="search" class="form-control" id="inputPassword2" placeholder="TO">
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" id="inputPassword2" placeholder="DATE">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block mb-3 h5">Search</button>
                    </div>
                </form>
            </div>
        </div>
      <div class="table-responsive">
        <div class="card mt-5 offset-md-2" style="width: 58rem;">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NUMBER</th>
                            <th scope="col">NAME</th>
                            <th scope="col">FROM</th>
                            <th scope="col">TO</th>
                            <th scope="col"> TOTAL SEATS</th>
                            <th scope="col">COST</th>
                            <th scope="col">ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td>1010</td>
                            <td>SAGARMATHA EXPRESS</td>
                            <td>KATHMANDU</td>
                            <td>BIRATNAGAR</td>
                            <td>30</td>
                            <td>45,000</td>
                            <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    HIRE NOW
                                </button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
      </div>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">ENTER YOUR DETAILS</h5>
                        <i class="fas fa-times fa-2x" data-bs-dismiss="modal" aria-label="Close"   style="cursor: pointer; "></i>  
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">FULLNAME</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">PHONE1</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">PHONE2</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>