<!-- filter_var():
 is used to vaildate user input data
 -->

<!-- <?php

$name = 25;
echo"$name";
echo "<br>";
echo "<br>";
if(filter_var($name, FILTER_VALIDATE_INT)){
    echo "true";
}
else{
    echo "false";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

$email = "amityadav123.bhk@gmail.com";
echo "<br>";
echo "$email <br>";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "it is a email <br>";
}
else{
    echo "Invaild";
}
?>
XSS Attack -->

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $error=[];
    if(empty($_POST["name"])){
        $error[] = "Name is required";
    }
    else{
        $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
        if( !preg_match("/^[a-zA-Z ]*$/", $name)){
            $error[] = "invaild name";
        }
    }
    if(empty($_POST["email"])){
        $error[] = "Email is required";
    }
    else{
        $email = htmlspecialchars(strip_tags(trim($_POST["email"]),
        FILTER_SANITIZE_EMAIL));
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error[] = "email is invlid";
        }
    }

    if(empty($error)){
        echo"The name is $name and email is $email";
    }
    else{
        foreach($error as $e){
            echo "<p style='color:red;'>$e</p>";
        }
    }

}
else{
    echo "invaild request";
}

?>


