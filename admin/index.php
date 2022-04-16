<?php
    if($_POST) {
        header('Location:inicio.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4"><br/><br/><br/><br/>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    <form action="index.php" method="post">
                    <div class = "form-group">
                    <label>User</label>
                    <input type="email" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="contrasena" placeholder="Password">
                    </div>
                    <div class="form-check">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>