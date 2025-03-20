<?php
$default_theme = "light";

if (isset($_POST['theme'])) {
    setcookie('user_theme', $_POST['theme'], time() + 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['reset'])) {
    setcookie('user_theme', $default_theme, time() + 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$current_theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : $default_theme;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Selector</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="<?php echo $current_theme; ?>">

    <h1>Select Theme</h1>
    <form method="post">
        <button type="submit" name="theme" value="dark">Dark Theme</button>
        <button type="submit" name="theme" value="light">Light Theme</button>
        <button type="submit" name="reset">Reset to Default</button>
    </form> 
    <p>Current Theme: <?php echo htmlspecialchars($current_theme); ?></p>

</body>
</html>
