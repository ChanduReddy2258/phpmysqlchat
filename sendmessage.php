
         <?php
    $conn=new mysqli("localhost","root","","base1");
    if ($conn->connect_error)
    {
        die("Connection failed: "  .$connect_error);
    }
        
        $from = $_POST['from'];
        $to = $_POST['to'];
        $message = $_POST['message'];
        $tablename = $from.''.$to;

$sql = "INSERT INTO `{$tablename}`(from,to,message) VALUES('$from','$to','$message')";


if(!mysqli_query($conn,$sql))
{
    echo"Not Inserted";
}
else
{
    echo"Inserted";
}
    ?>
