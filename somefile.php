<?php 
$message = '';
require 'db.php';

if ( isset($_POST['name']) && isset($_POST['email']) ) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);

  if (empty( $name ) && empty ($email) ) {
    $message = 'you can\'t put empty name and email field';
  } else {
    $sql = 'INSERT INTO people (name, email) VALUES(:name, :email)';
    $statement = $connection->prepare($sql);
    $statement->execute([
      ':name' => $name,
      ':email' => $email
    ]);
    $message = 'Database updated successfully.';

  }

}
// if ( isset($_POST['name']) && isset($_POST['email']) ) {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $sql = 'INSERT INTO people (name, email) VALUES(:name, :email)';
//   $statement = $connection->prepare($sql);
//   $statement->bindParam(':name', $name);
//   $statement->bindParam(':email', $email);
//   $statement->execute();
// }

 ?>
