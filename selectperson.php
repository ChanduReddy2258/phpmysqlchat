
         <?php
    $conn=new mysqli("localhost","root","","base1");
    if ($conn->connect_error)
    {
        die("Connection failed: "  .$connect_error);
    }
        
        $from = $_POST['from'];
        $to = $_POST['to'];
        $message = $_POST['message'];
        $tablename=$from.''.$to;


    $create="CREATE TABLE IF NOT EXISTS`{$tablename}` ( `ID` INT NOT NULL AUTO_INCREMENT , `from` CHAR(20) NOT NULL , `to` TEXT NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`ID`))";
if(mysqli_query($conn,$create))
        {
          
                echo"data inserted";
            }
    else{
        echo"data not inserted";
    }

  ?>