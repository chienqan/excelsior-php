<?php
function getlist($connect) {
    $get = "SELECT * FROM articles";
    return mysqli_query($connect, $get);
}

function get($connect) {
    $get = "SELECT * FROM articles WHERE title='".$_GET['title']."'";
    return mysqli_fetch_array(mysqli_query($connect, $get));
}

function add($connect) {
    if (isset($_GET['act']) == 'add') {
        if ($_GET['act'] = 'add') {
            $add = "INSERT INTO articles (title, url, content) VALUES ('".addslashes($_POST['title'])."', '".addslashes($_POST['image-url'])."', '".addslashes($_POST['content'])."')";
            if (mysqli_query($connect, $add)) {
                return 'The article have created successfully';
            } else {
                return 'There is something erorr'.mysqli_error($connect);
            }
        }
    }
}

function edit($connect) {
    if (isset($_GET['act']) == 'change') {
        if ($_GET['act'] == 'change') {
            if (isset($_POST['title']) && isset($_POST['image-url']) && isset($_POST['content']) && isset($_POST['content'])) {
                mysqli_query($connect, "UPDATE articles SET title='".addslashes($_POST['title'])."', url='".addslashes($_POST['image-url'])."', content='".addslashes($_POST['content'])."' WHERE title='".addslashes($_GET['title'])."'");
                header("location:edit-article.php?title=".$_POST['title']."&status=updated");
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
            $remove = "DELETE FROM articles WHERE title='".$_GET['title']."'";
            mysqli_query($connect, $remove);
            $refresh = "ALTER TABLE articles AUTO_INCREMENT = 1";
            mysqli_query($connect, $refresh);
            header("location:article.php");
        }
    }
}
?>