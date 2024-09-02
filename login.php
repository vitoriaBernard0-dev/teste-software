<?php
session_start();

$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3',
    'user4' => 'password4',
    'user5' => 'password5'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = urlencode("Usuário ou senha incorretos!");
        header("Location: index.html?error=" . $error);
        exit();
    }
}
?>
