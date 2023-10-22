<?php
include_once 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST["Name"];
        $password = $_POST["password"];
        $sql="INSERT INTO logins(Name, Password) VALUES('$name', '$password')";

        if(mysqli_query($conn, $sql)) {
            
        }
        else {
            echo "Error:".
            mysqli_error($conn);
        }
        mysqli_close($conn);
        header("Location: valid.php");
        // Try-out to put it in an html file
        $try = "$name $password\n";
        file_put_contents("try1.html", $try, FILE_APPEND);
        header("Location: Valid.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
        <label for="Name">Name:</label>
        <input type="text" name="Name" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" required>

        <input type="submit" name="submit" class="submit" value="Login">
    </form>
</body>
</html>