<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-header">
                        user data
                    </div>
                    <div class="card-body">
                        <form method="get">
                            @csrf
                               
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Course</label>
                                <input type="text" class="form-control" id="course" aria-describedby="emailHelp" placeholder="Enter your Course">
                            </div>
                        
                            <div class="form-check">
                                <input class="form-check-input checkbox" type="checkbox"  value="2">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            
                                <input class="form-check-input checkbox" type="checkbox"   value="1">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
     $('#submit').click(function() {
            alert();
            $.ajax({
                url:'formsubmit',
                data:$('form').serialize(),
                type:'get',
                success:function(result) {
                    alert(result);
                }
            });
        });
       
        
        $('.checkbox').click(function() {

            var checkboxvalue = [];
            $('.checkbox').each(function() {
                if ($(this).is(":checked")) {
                    checkboxvalue.push($(this).val());
                }
            });
            alert(checkboxvalue);
        });
        name = travelname.toString();
        alert(name);
       
        </script>
</body>

</html>