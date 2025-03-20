<?php
$default_theme = "light";
if ((isset($_POST['theme']))) {
    setcookie('user_theme', $_POST['theme'], time() + 3600, path: '/');
}

if (isset($_POST['reset'])) {
    setcookie('user_theme', $default_theme, time() + 3600, path: '/');
}

$current_theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : $default_theme;
?>

<html>
    <head>
        <title>cookies</title>
        <link rel="stylesheet" href="cookies.css">
    </head>
    <body style="background-color: <?php echo $current_theme == 'dark' ? '#333' : '#fff'; ?>; 
             color: <?php echo $current_theme == 'dark' ? '#fff' : '#000'; ?>;">

    <h1>Select theme</h1>
    <form method="post">
    <button type="submit" name="theme" value="dark">Dark theme</button>
    <button type="submit" name="theme" value="light">Light theme</button>
    <button type="submit" name="reset">Reset to defult</button>
    </form> 
    <p>current_theme:<?php echo $current_theme;?></p>

    </body>
</html>