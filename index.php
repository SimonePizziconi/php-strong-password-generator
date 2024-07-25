<?php 

function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';
    return substr(str_shuffle($characters), 0, $length);
}

$password = '';

if (isset($_GET['password'])) {
    $length = intval($_GET['password']);
    if ($length >= 8 && $length <= 32) {
        $password = generateRandomPassword($length);
    } else {
        $password = 'La lunghezza della password deve essere tra 8 e 32 caratteri.';
    }
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Generatore di Password Casuali</h1>

<!-- FORM -->
    <form method="GET" action="index.php">
        <label for="password">Lunghezza della Password:</label>
        <input type="number" id="password" name="password">
        <input type="submit" value="Genera Password">
    </form>

    <?php if ($password): ?>
        <p><strong>Password Generata:</strong> <?php echo $password; ?></p>
    <?php endif; ?>
</body>
</html>