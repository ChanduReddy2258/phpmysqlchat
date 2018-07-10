      <?php
    $conn=new mysqli("localhost","root","","base1");
    if ($conn->connect_error)
    {
        die("Connection failed: "  .$connect_error);
    }
        $value1=$_POST['from'];
        $value2=$_POST['to'];
        $value=$value1.''.$value2;

    $sql = "INSERT INTO dropdown(dropvalue) VALUES('$value')";
if(!mysqli_query($conn,$sql))
{
    echo"Not Inserted";
}
else
{
    echo"Inserted";
}
    ?>
