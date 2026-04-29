<?php
include(__DIR__ . '/../config/db.php');

class UserController {

    public function index() {
        global $conn;
        return $conn->query("SELECT * FROM users");
    }

    public function store($data) {
        global $conn;
        $name = $data['name'];
        $adress = $data['adress'];
        $age = $data['age'];

        $conn->query("INSERT INTO users (name_users, adress, age)
                      VALUES ('$name','$adress','$age')");
    }

    public function update($id, $data) {
        global $conn;
        $conn->query("UPDATE users SET
            name_users='{$data['name']}',
            adress='{$data['adress']}',
            age='{$data['age']}'
            WHERE id=$id");
    }

    public function delete($id) {
        global $conn;
        $conn->query("DELETE FROM users WHERE id=$id");
    }

    public function find($id) {
        global $conn;
        return $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
    }
}
?>