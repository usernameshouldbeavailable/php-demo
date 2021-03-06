<!doctype html>
<html lang="en">
  <head>
    <title>Check if you can vote</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">

        <div class="row">

            <div class="col">
                <h1>Check if you can vote?</h1>

                <form action="get.php" method="get">

                    <div class="form-group">

                        <label for="">Enter your age</label>

                        <input name="age" type="number" class="form-control" placeholder="Enter your age?">

                    </div>

                    <div class="form-group">

                        <label for="">Enter your name</label>

                        <input name="name" type="text" class="form-control" placeholder="Enter your name?">

                    </div>

                    <div class="form-group">

                        <input type="submit" class="btn btn-primary" value="Check" />

                    </div>

                    <?php
                    
                        if(isset($_GET['age']) && isset($_GET['name'])) { 

                            $age = $_GET['age'];

                            $name = $_GET['name'];

                            if($age >= 18) {

                                echo '<div class="alert alert-success">Hey ' . $name . ', you can vote</div>';

                            } else {
                                
                                echo '<div class="alert alert-danger">Hey ' . $name . ', you cannot vote</div>';

                            }

                        } else {

                        }

                    ?>

                </form>

            </div>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>