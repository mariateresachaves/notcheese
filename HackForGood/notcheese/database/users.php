<?php

  function createUser($firstName, $lastName, $email, $phoneNumber, $password, $cityID, $isElder) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users(lastName, firstName, email, phoneNumber, password, cityID, isElder)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($lastName, $firstName, $email, $phoneNumber, sha1($password), $cityID, $isElder));

    return true;
  }
/*
  function createStudent($firstName, $lastName, $email, $phoneNumber, $password, $cityID, $isElder, $rate, $image) {
    global $conn;

    createUser($firstName, $lastName, $email, $phoneNumber, $password, $cityID, $isElder);

 //   $userID = getLastUserID();
 //   $stmt = $conn->prepare("INSERT INTO students VALUES(?, ?, ?)");
   // $stmt->execute(array($userID, $rate, $imageID));

    return true;
  }

  function addImage($image) {
    global $conn;

   // move_uploaded_file($image["tmp_name"], $BASE_DIR . "img/users/" . $image["name"]);
   // $stmt = $conn->prepare("INSERT INTO images VALUES (?, ?)");
   // $stmt->execute(array($BASE_DIR . "img/users/" . $image["name"]));

    return true;
  }

  function getLastImageID() {
    global $conn;
    $stmt = $conn->prepare("SELECT imageID FROM images ORDER BY imageID DESC LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetch();
    return $result["imageID"];
  }

  function getLastUserID(){
    global $conn;
    $stmt = $conn->prepare("SELECT userID FROM users ORDER BY userID DESC LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetch();
    return $result["userID"];
  }
​*/
function isUser($email) {
  global $conn;
  $stmt = $conn->prepare("SELECT *
                            FROM users
                            WHERE email = ?");
  $stmt->execute(array($email));
  return $stmt->fetch() == true;
}

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM users
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() == true;
  }
