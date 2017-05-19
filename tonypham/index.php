<!doctype html>
<html lang="en">
<head>
    <?php
    require('session.class.php');
    $session = new session();
    // Set to true if using https
    $session->start_session('_s', false);

    $_SESSION['id'] = '1';
    echo $_SESSION['id'];

    $_SESSION['value'] = 'nguyen.';
    echo $_SESSION['value'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="session.class.php" method="post">
    <table>
        <tr>
            <td>Session ID:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Session Value:</td>
            <td><input type="text" name="value"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Create session"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
