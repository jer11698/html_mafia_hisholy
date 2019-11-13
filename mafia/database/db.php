<?php

session_start();

function dd($value) // to be deteted

{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // return reconds that match conditions ...
        // $sql = "SELECT * FROM $table WHERE username='admin' AND admin=1";
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        //dd($sql);
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    // $sql = "SELECT * FROM $table WHERE username='admin' AND admin=1" LIMIT 1;
    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    //dd($sql);
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;

}

function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)";
    // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"

    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;

}

function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users (username, admin, email, password) VALUES (?, ?, ?, ?) WHERE id=?";
    // $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?"

    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;

}

$data = [
    'username' => 'Tester_GuyBoi',
    'admin' => 0,
    'email' => 'tester_guy@blogmafia.com',
    'password' => 'alohaWifi1234',
];

$conditions = [
    'id' => 2,
    'username' => 'Tester_Guy',
];

//$users = update('users', 2, $data);
//$users = selectAll('users', $conditions);
//dd($users);
//var_dump($users);
