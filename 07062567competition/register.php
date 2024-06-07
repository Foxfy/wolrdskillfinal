<?php
    session_start();
    include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script type="module" crossorigin src="./assets/compiled/js/bootstrap.esm.js"></script>
    <link rel="stylesheet" href="./assets/compiled/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/compiled/css/styles.css">
</head>
<body>
    <main class="container">
        <div class="form-group margin-form">
            <div>
                <h2>Register</h2>
                <?php
                    if(isset($_SESSION['login_error'])){
                ?>
                <div>
                    <p style="color: #FF0000;"><?=$_SESSION['login_error']?></p>
                </div>
                <?php
                    unset($_SESSION['login_error']);
                    }
                ?>
            </div>
                        <!-- ให้ทำงานร่วมกับไฟล์ register_save -->
            <form action="register_save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="" value="" class="form-control" required>
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="" value="" class="form-control" required>
                </div>
                <div class="row f-button">
                    <input type="submit" class="btn from-control" value="Register">
                    <a href="index1.php" class="">back</a>
                </div>

            </form>
        </div>
    </main>
</body>
</html>