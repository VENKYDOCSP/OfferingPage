<?php



// if (isset($_POST['submit'])) {

// print_r($_POST);
//   exit();


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Country = $_POST['Country'];
$Text_Message = $_POST['Text_Message'];

$servername = "localhost";
$username = "atmastco";
$password = "atmastco";
$dbname = "atmastco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO contect_us (Name,Email,Phone_Number,Country,Text_Message) 
             VALUES('$Name','$Email','$Phone_Number','$Country','$Text_Message')";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (mysqli_query($conn, $sql)) {

    echo "<script>
    window.location.href='project.php?success=1';
    </script>";
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// }
