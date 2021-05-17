<?php

$error = null;

if  (isset($_POST) && !empty($_POST)) {
  $error = [];

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    $error['not_email'] = 'L\'email entré n\'est pas valide';
  }
  if (empty($_POST['password']) && $_POST['password'] !== $_POST['passwordConfirmed']) {
    $error['password_same'] = 'Les mots de pass ne sont pas identiques';
  }
  if (strlen($_POST['password']) < 3 && strlen($_POST['password']) > 30) {
    $error['password_length'] = 'Le mot de passe dois comporter 3 caractères minimum et 30 maximum';
  }
  if (strlen($_POST['username']) < 3 && strlen($_POST['username']) > 30) {
    $error['username'] = 'Votre pseudo dois comporter 3 caractères minimum et 30 maximum';
  }
  if (empty($error)) {
    $pseudo = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $roles = json_encode((['user']));

    $sql = "INSERT INTO users(email,password,pseudo,roles) VALUES ('$email','$password','$pseudo','$roles')" ;

    if ($mysqli->query($sql) === true) {
      $_SESSION['msg-flash'] = 'Votre compte à été créer avec succée';

      redirectToRoute('login.php');
    } else {
      $error = 'Une error est survenu, compte non crée';
    }
  }
}