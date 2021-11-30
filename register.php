<?php

    $errorMessage = "";

    if(isset($_POST['phone'])) {

        $phone = $_POST['phone'];

        if(strlen($phone) != 10) {

            $errorMessage = "Invalid mobile number";

        }

        if(!is_numeric($phone)) {

            $errorMessage = "Please Enter a valid mobile number";

        }

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Register Now</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

        <div class="row">

            <div class="col"></div>
            <div class="col">

                <h1>Register</h1>


                <form action="register.php" method="post">

                    <div class="form-group">

                        <label for="">Your Mobile</label>

                        <input class="form-control" type="text" name="phone" placeholder="Your Phone Number" />

                    </div>

                    <?php
                        if(isset($_POST['phone'])) {

                            if(!is_null($errorMessage)) {

                                echo '<div class="alert alert-danger">
                                ' . $errorMessage .  '
                                </div>';

                            }

                        }

                    ?>

                    <div class="form-group">

                        <input type="submit" value="Register Now!" class="btn btn-primary btn-block">

                    </div>


                </form>

            </div>
            <div class="col"></div>

        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>