<?php
//database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "Classwork";

//database connection using mysqli_connect
$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    //echo "Database connection successful";
}
else
{
    echo "error occurred".mysqli_error($conn);
}

//isset function to submit our form.
if( isset( $_POST["submitButton"] ) )
{
    //1. fetch form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    //2. submit to database
    $sql = mysqli_query($conn, "INSERT INTO signin(username, email) VALUES('$username','$email') ");

    //3. checkif successful
    if($sql)
    {
        echo "Data inserted successfully";
    }
    else{
        echo "error occured";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>

    <form action="index.php" method="POST">
        <label for="username">Username</label><br>
        <input type="text" Id="username" name="username"><br>

        <label for="email">Email</label><br>
        <input type="email" Id="email" name="email"><br>

        <button type="submit" name="submitButton">Submit</button>
    </form>

</body>
</html>