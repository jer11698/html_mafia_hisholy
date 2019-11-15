<?php
include ROOT_PATH . '/database/db.php';
include ROOT_PATH . '/database/helper/vaildatePost.php';

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

if (isset($_POST['add-post'])) {
    // $_POST['user_id'] = 1;
    //$_POST['published'] = 1;
    $errors = vaildatePost($_POST);
    //dd($_FILES['image']);
    //$_FILES['image'];
    //$post_id = create($table, $_POST);
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/static/img/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed to upload image');
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['slug'] = strtolower($_POST['title']);
        //dd($_POST);
        $_POST['slug'] = trim(preg_replace('/\s+/', '-', $_POST['slug']));
        //dd($_POST);

        //dd($_POST);
        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully.';
        $_SESSION['type'] = 'success';

        header('location: ' . BASE_URL . 'admin/post');
        exit();

    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne($table, ['id' => $id]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}


if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    //dd($id);
    //unset($_GET['id']);
    $count = delete($table, $id);

    $_SESSION['message'] = 'Post deleted successfully.';
    $_SESSION['type'] = 'success';

    header('location: ' . BASE_URL . 'admin/post');
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Post deleted successfully.';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'admin/post');
    exit();
}

if (isset($_POST['edit-post'])) {
    $id = $_POST['id'];
    unset($_POST['edit-post'], $_POST['id']);
    //dd($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/static/img/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed to upload image');
        }
    } else {
        array_push($errors, "Post image required");
    }

    $errors = vaildatePost($_POST, 0);
    if (count($errors) === 0) {
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post updated successfully.';
        $_SESSION['type'] = 'success';

        header('location: ' . BASE_URL . 'admin/post');
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}
