<?php
require_once("admin/db/mysql.php");

if (isset($_GET['act']) == 'do') {
    if ($_GET['act'] == 'do') {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password1']) && isset($_POST['email']) && isset($_POST['urls']) && isset($_POST['name']) && isset($_POST['birthday'])) {
            //Use this syntax below to prevent SQL Injection and use md5() to encrypt password
            $username = addslashes($_POST['username']);
            $password = addslashes(md5($_POST['password']));
            $checkusername = mysqli_num_rows(mysqli_query($connect, "SELECT username FROM members WHERE username='".$username."'"));
            $email = addslashes($_POST['email']);
            $urls = addslashes($_POST['urls']);
            $name = addslashes($_POST['name']);
            $birthday = addslashes($_POST['birthday']);
            if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password1']) && !empty($_POST['email']) && !empty($_POST['urls']) && !empty($_POST['name']) && !empty($_POST['birthday'])) {
                if(strlen($_POST['username']) <= 32) {
                    if ($_POST['password'] == $_POST['password1']) {
                        if ($checkusername == 0) {
                            $query = "INSERT INTO members (username, password, email, urls, name, birthday) VALUES('" . $username . "', '" . $password . "', '" . $email . "', '" . $urls . "', '" . $name . "', '" . $birthday . "')";
                            $create = mysqli_query($connect, $query);
                            if (!$create) {
                                $result = 'Error creating user account' . mysqli_error($connect);
                            } else {
                                $result = 'Your account have created successfully';
                            }
                        } else {
                            $result = "This username is already created";
                        }
                    } else {
                        $result = 'Your password is not equal to verify password';
                    }
                } else {
                    $result = 'Your name is too long';
                }
            } else {
                $result = 'You don\'t input all field required above';
            }
        } else {
            $result = 'Type any information required below';
        }
    } else {
        $result = 'Please input information to input field';
    }
} else {
    $result = '';
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Register</title>
            <meta name="Description" content="This page is help user to create account">
            <meta name="Keywords" content="register">
            <meta name="Author" content="Chien">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <link rel="stylesheet" href="assets/css/style.css">
            <style>
                .alertform {
                    display:block;
                    font-size:12px;
                    color:#f00;
                    float:left;
                }
            </style>
        </head>
        <body>
            <div class="login-form">
                <h1>eXcelsior</h1>
                <form id="login" action="login.php?act=do" method="post">
                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Username " name="username" id="UserName">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="Passwod">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group">
                          <input type="password" class="form-control" placeholder="Verify Password" name="password1">
                          <i class="fa fa-lock"></i>
                      </div>
                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Email Address" name="email">
                          <i class="fa fa-inbox"></i>
                      </div>
                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Urls" name="urls">
                          <i class="fa fa-link"></i>
                      </div>
                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Birthday" name="birthday">
                          <i class="fa fa-birthday-cake"></i>
                      </div>
                    <span class="alertform"><?php echo $result ?></span>
                </form>
                <button form="login" type="submit" class="log-btn" >Register</button>
            </div>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script src="assets/js/index.js"></script>

        </body>
    </html>