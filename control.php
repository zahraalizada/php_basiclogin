



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | PHP Basic Projects</title>

    <!--  Bootstrap Css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 ">
            <div class="panel-group">
                <div class="login card card-default">
                    <div class="card-header">
                        <h3>Basic Login App</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row align-items-top">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <?php
                                        session_start();

                                        if (isset($_SESSION['cname'])) {
//                                            echo "Welcome " . $_SESSION['cname']."!";

                                            echo " 
                                <div class='alert alert-success' role='alert'>
                                 <h4 class='alert-heading'>Welcome ". $_SESSION['cname'] . "! <br><br></h4></div>";
                                        } else {
                                            header("Location: index.php");
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" name="logout" class="btn btn-primary mb-3">Logout</button>
                                </div>
                            </div>

                    </div>
                    </form>

                    <?php

                    if($_POST){
                        session_destroy();
                        header("Location: index.php");
                    }

                    ?>



                </div>
            </div>
        </div>


    </div>
</div>
</div>


<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Bootstrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>

