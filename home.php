<?php

session_start();
include "db.php";

if (isset($_POST['delete'])){
    $sql = "delete from posts ;";
    $re = $conn->query($sql);
    if (! $re){
        die("Could not delete message:");
    }
    echo "Deleted data successfully\n";
    

}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
    <form method="post" action="<?php $_PHP_SELF ?>">
        <div id = "main">
            <h1 style="background-color: #6495cd;color:white;"><?php echo $_SESSION['name']; ?>-online</h1>
            <div class = "output">
                <?php
                
                $sql = "select * from posts";
               

                $result = $conn->query($sql);
                
                if($result->num_rows >= 0)
                {
                    while($row = $result->fetch_assoc()){
                        echo "" . $row['name'],  " "."::"  . $row['msg']. "--"   .$row['date'].  "<br>";
                        echo "<br>";
                        echo "<input name='delete' value='Delete' type='submit'>"; 
                    }
                    

                }
                else{
                    echo " 0 results";
                }
                
                $conn->close();
                ?>

            </form>
            


            </div>
            <form action="send.php" method = 'post' >
                <textarea name="msg" placeholder="Type to send message...." class = "form-control"></textarea>
                <br>
                <input type = "submit" value = "Send">

            </form>
            <br>
            <form action="logout.php" >
                <input style="width: 100%;background-color:#6495cd;color:white;font-size: 20px;" type="submit" value="Logout">

            </form>

        </div>
    </body>
</html>