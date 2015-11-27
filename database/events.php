<?php

/*   function getAllPosts($dbh) {
    $stmt = $dbh->prepare('SELECT * FROM post');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getPostById($dbh, $id) {
    $stmt = $dbh->prepare('SELECT * FROM post WHERE id = ?');
    $stmt->execute(array($_GET['id']));
    return $stmt->fetch();
  }
  
  function updatePost($dbh, $id, $title, $introduction, $fulltext) {
    $stmt = $dbh->prepare('UPDATE post SET title = ?, introduction = ?,  fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));
  } */
  
  function insertNewUser($dbh, $userName, $email, $password, $dob, $gender) {
    $stmt = $dbh->prepare('INSERT INTO Users (userName, email, password, dob, gender) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute(array($userName, $email, $password, $dob, $gender));
  }
  
  function getAllUsers($dbh) {
    $stmt = $dbh->prepare('SELECT * FROM Users');
    $stmt->execute();
    return $stmt->fetchAll();
  }

?>



















