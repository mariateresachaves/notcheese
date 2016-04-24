<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['firstname'] || !$_POST['lastname'] || !$_POST['password'] ||
  !$_POST['email'] || !$_POST['phone']) {
    $_SESSION['error_messages'][] = 'Todos os campos são obrigatórios.';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/registerVolunteer.php');
    exit;
  }

  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));
  
  try {
    createStudent($firstname, $lastname, $email, $phone, $password, 1, 0, $photo); //city, isElder
	move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $email . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/registerVolunteer.php');
	$_SESSION['error_messages']['email'] = 'Email já está registado.';
    exit;
  }
  $_SESSION['success_messages'][] = 'Foi registado com sucesso!';  
  header("Location: $BASE_URL");
?>
