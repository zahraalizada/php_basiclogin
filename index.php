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
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                               aria-describedby="username" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               aria-describedby="password" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" name="login" class="btn btn-primary mb-3">Login</button>
                            </div>
                        </form>

                        <?php
                        session_start();

                        if ($_POST) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            if ($username == "admin" && $password == "admin") {
                                $_SESSION['cname'] = $username;
                                header("Location: control.php");
                            } else {

                                echo " 
                                <div class='alert alert-danger' role='alert'> Username or password wrong! </div>
                                
                                ";
                            }

                        }


                        ?>

                    </div>


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