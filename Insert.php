<!doctype html>
<html>
    <head>
        <h1>insert data into our 
        </head>
        <body>
            <center>
                <?php

                require"dbconnect.php";
                $first name=$_REQUEST['first_name'];
                $lasr name=$_REQUEST['last_name']
                $gender=$_REQUEST['gender']
                $address=$_REQUEST['adress'];
                $sql="insert ito staff value('$firstname','$lastname','$gender','$address')"
                if($conn->query($sql)===true){
                    echo"records inserted";
                }else{
                    echo"error";
                }
                ?>
                </center>
            </body>
            <html>