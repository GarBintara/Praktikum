
<html lang="en">
    <head>
        <meta charshet="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Login Page</title>
    </head>
    <body>
        <form action="ceklogin.php" method="post" class="from-login">
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "<h1><center>username dan password tidak sesuai  !</center></h1>";
                    }
                }
                ?>
            <div class="container">
                <div class="f-out">
                    <h4>Login</h4>
                    <div class="line">
                        <input type="text" placeholder="username" name="uname" class="from- cotrol bg-secondary"
                        required>
            </div>
            <div class="line">
                <input type="password" placeholder="password" name="psw" class="from- cotrol bg-secondary"
            </div>
            <div class="line">
                <button type="submit" class="btn btn-success"> login</button>
                <a href="index.php"><button type="button" class="btn btn-primary">cancel</button></a>
            </div>
            <div class="line">
                <label>Don't have an account? click <a href="register.php" class="btn btn-warning">here</a></label>
            </div>
            </div>
        </div>
            </form>
        </body>
            </html>

            <!-- http://localhost/Gardiva/login.php -->