<?php
function getusers($connect) {
    $get = "SELECT * FROM members WHERE username='".$_SESSION['username']."'";
    return mysqli_fetch_array(mysqli_query($connect,$get));
}

function getlist($connect) {
    $list = "SELECT * FROM members WHERE admin='1'";
    return mysqli_query($connect, $list);
}

function get($connect) {
    $get = "SELECT * FROM members WHERE username='".$_GET['edit']."' AND admin='1'";
    return mysqli_fetch_array(mysqli_query($connect,$get));
}

function add($connect) {
    if (isset($_GET['act']) == 'do') {
        if ($_GET['act'] == 'do') {
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password1']) && isset($_POST['email']) && isset($_POST['urls']) && isset($_POST['name']) && isset($_POST['birthday']) && isset($_POST['permission'])) {
                $checkusername = mysqli_num_rows(mysqli_query($connect, "SELECT username FROM members WHERE username='".addslashes($_POST['username'])."'"));
                if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password1']) && !empty($_POST['email']) && !empty($_POST['urls']) && !empty($_POST['name']) && !empty($_POST['birthday']) && !empty($_POST['permission'])) {
                    if(strlen($_POST['username']) <= 32) {
                        if ($_POST['password'] == $_POST['password1']) {
                            if ($checkusername == 0) {
                                $query = "INSERT INTO members (username, password, email, urls, name, birthday, admin) VALUES('".addslashes($_POST['username'])."', '".addslashes(md5($_POST['password']))."', '".addslashes($_POST['email'])."', '".addslashes($_POST['urls'])."', '".addslashes($_POST['name'])."', '".addslashes($_POST['birthday'])."', '".addslashes($_POST['permission'])."')";
                                if (!mysqli_query($connect, $query)) {
                                    return 'Error creating user account' . mysqli_error($connect);
                                } else {
                                    return 'Your account have created successfully';
                                }
                            } else {
                                return "This username is already created";
                            }
                        } else {
                            return 'Your password is not equal to verify password';
                        }
                    } else {
                        return'Your name is too long';
                    }
                } else {
                    return 'You don\'t input all field required above';
                }
            } else {
                return 'Type any information required below';
            }
        } else {
            return 'Please input information to input field';
        }
    } else {
        return '';
    }
}

function edit($connect) {
    if (isset($_GET['act']) == 'change') {
        if ($_GET['act'] == 'change') {
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['urls']) && isset($_POST['name']) && isset($_POST['birthday'])) {
                mysqli_query($connect, "UPDATE members SET username='".addslashes($_POST['username'])."', password='".addslashes(md5($_POST['password']))."', email='".addslashes($_POST['email'])."', urls='".addslashes($_POST['urls'])."', name='".addslashes($_POST['name'])."', birthday='".addslashes($_POST['birthday'])."' WHERE username='".addslashes($_GET['edit'])."' AND admin='1'");
                header("location:edit-user.php?edit=".$_POST['username']."&status=updated");
            } else {
                return 'Please change any information below';
            }
        } else {
            return 'Please change any information below';
        }
    }
}

function users($connect) {
    if (isset($_GET['act']) == 'change') {
        if ($_GET['act'] == 'change') {
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['urls']) && isset($_POST['name']) && isset($_POST['birthday'])) {
                mysqli_query($connect, "UPDATE members SET username='".addslashes($_POST['username'])."', password='".addslashes(md5($_POST['password']))."', email='".addslashes($_POST['email'])."', urls='".addslashes($_POST['urls'])."', name='".addslashes($_POST['name'])."', birthday='".addslashes($_POST['birthday'])."' WHERE username='".addslashes($_SESSION['username'])."'");
                $_SESSION['username'] = $_POST['username'];
                header("location:".$_SERVER['PHP_SELF']."?status=updated");
            } else {
                return 'Please change any information below';
            }
        } else {
            return 'Please change any information below';
        }
    }
}
function update() {
    if (isset($_GET['status']) == 'updated') {
        if ($_GET['status'] == 'updated') {
            return 'Updated successfully';
        } else {
            return 'Updated fail';
        }
    }
}

function remove($connect) {
    if (isset($_GET['act']) == 'remove') {
        if ($_GET['act'] == 'remove') {
            $remove = "DELETE FROM members WHERE username='".$_GET['username']."' AND admin='1'";
            mysqli_query($connect, $remove);
            $refresh = "ALTER TABLE members AUTO_INCREMENT = 1";
            mysqli_query($connect, $refresh);
            header("location:user.php");
        }
    }
}
?>