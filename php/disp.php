<html>
<head>
<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
</style>
<body style="background-color:#000000;color:white" >
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt = $conn->prepare("SELECT * FROM vol WHERE id = ?");
$stmt->bind_param("s", $editID);
$editID=$_COOKIE["id"];
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$name=$row["fullname"];
$phone=$row["phone"];
$email=$row["email"];
$address=$row["address"];
$gender=$row["gender"];
$fan=$row["fan"];

$conn->close();

?>

<h2 align="center"> <br>We are happy to have Sir/Ma'am <?php echo $name ?> as our fan member. <br><br>We will contact you for details via <?php echo $email." and/or ".$phone?> to keep you updated.</h2>
<br>

<h1></h1>
</body>
</head>
</html>