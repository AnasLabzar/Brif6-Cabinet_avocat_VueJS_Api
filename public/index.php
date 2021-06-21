<?php
 session_start();
 include './app/controllers/employees.php';
 if (isset($_POST["submit"])) {
    // print_r($_POST);
    // $customers1= new Employee;
    $customers1->createEmployee();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>token : copier token sur input token</h1>
    <?php
    // Thanks to: https://thisinterestsme.com/generating-random-token-php/
    
    //Generate a random string.
    $token = openssl_random_pseudo_bytes(5);
     
    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);
     
    //Print it out for example purposes.
    echo $token;
    
    ?><br><br>
    <input type="cin"id="cin" name="cin" placeholder="CIN"><br><br>
    <input type="text"id="token" name="token" placeholder="Token"><br><br>
    <input type="text"id="name" name="name" placeholder="Nom compléte"><br><br>
    <input type="email"id="Email" name="Email" placeholder="Email"><br><br>
    <input type="text"id="phone" name="phone" placeholder="Number Phone"><br><br>
    <input type="text"id="country" name="country" placeholder="Pays"><br><br>
    <input type="text"id="gender" name="gender" placeholder="gender">
    <button type="submit" id="submit" name="submit"></button>
</body>
</html>