<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

if (!$_POST['email'] || !$_POST['password']) {
  $_SESSION['error_messages'][] = 'Invalid login';
  $_SESSION['form_values'] = $_POST;
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
}

$email = $_POST['email'];
$password = $_POST['password'];


if (!isUser($email)) {
  $_SESSION['error_messages']['email'] = 'Email não registado.';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
}

if (isLoginCorrect($email, $password)) {
  $_SESSION['email'] = $email;
  global $conn;
  $statement = $conn->prepare("SELECT isElder FROM Users WHERE email = ?");
  $statement->execute(array($email));
  $result = $statement->fetch();
  $_SESSION['isElder'] = $result['isElder'];
  $_SESSION['success_messages'][] = 'Login successful';

} else {
  $_SESSION['error_messages']['password'] = 'A password está errada.';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
}

header("Location: $BASE_URL");
