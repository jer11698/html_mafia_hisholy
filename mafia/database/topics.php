<?php
include ROOT_PATH . '/database/db.php';
include ROOT_PATH . '/database/helper/vaildateTopic.php';

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);
//dd($topics);

if (isset($_POST['add-topic'])) {

    $errors = validateTopic($_POST, 1);
    if (count($errors) === 0) {
        unset($_POST['add-topic']);
        $_POST['description'] = htmlentities($_POST['description']);
        //dd($_POST);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully.';
        $_SESSION['type'] = 'success';

        header('location: ' . BASE_URL . 'admin/topics');
        exit();
    } else {
      $name = $_POST['name'];
      $description = $_POST['description'];
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}


if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    //dd($id);
    //unset($_GET['id']);
    $count = delete($table, $id);

    $_SESSION['message'] = 'Topic deleted successfully.';
    $_SESSION['type'] = 'success';

    header('location: ' . BASE_URL . 'admin/topics');

}

if (isset($_POST['edit-topic'])) {
    $id = $_POST['id'];
    unset($_POST['edit-topic'], $_POST['id']);

    $errors = validateTopic($_POST, 0);
    if (count($errors) === 0) {
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Topic updated successfully.';
    $_SESSION['type'] = 'success';

    header('location: ' . BASE_URL . 'admin/topics');
    } else {
      $id = $_GET['del_id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
    }
}
