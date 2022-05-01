<?php
class DB
{
    function connection ()
    {
        $servernaem = "localhost";
        $user = "root";
        $password = "";

        $con = new mysqli($servernaem , $user, $password, "user");
        if ($con->connect_error)
        {
            die ("connection eas failed to eastablish");
        }
         return $con;
    }

    function inserdata ($fname,$lname,$age,$designation,$language,$email,$password,$file,$tablename,$con)

    {
        $sql = "INSERT INTO $tablename ( firstname, lastname,age,email,designation,planguage,pass,f_name)
        VALUES ('$fname','$lname',$age,'$email','$designation', '$language','$password','$file')";

        if( $con->query($sql)===TRUE)
        {
            echo "inserted successfully";
        }
        else 
        echo "failed to insert".$con->error;
    }

    function closecon($con)
    {
        $con->close();
    }
}

?>