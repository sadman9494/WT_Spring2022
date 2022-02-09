<?php
$uname=$pass= "";
if(isset($_GET["submit"]))
{
    $uname = $_GET["firstname"];
    if(empty($uname)||strlen($uname)<5)
    {
        echo "please enter a valid name";

    }
    else 
    {
        echo "your name is ".$uname;
    }
    echo "<br>";

    $age = $_GET["age"];
    if (empty($age))
    {
        echo "please enter a valid age";
    }
    else 
    {
        echo "your age is ".$age;
    }

    echo "<br>";

    if (isset($_GET["radio"]))
    {
        echo "you have selected ".$_GET["radio"];
    }
    else
    {
        echo " you have not selected any radio button";
    }
    echo "<br>";

    if (isset($_GET["language1"])||isset($_GET["language2"])||isset($_GET["language3"]))
    {
        echo "you have selected ";
        if (isset($_GET["language1"]))
        {
            echo $_GET["language1"];
        }
        if (isset($_GET["language2"]))
        {
            echo $_GET["language2"];
        }
        if (isset($_GET["language3"]))
        {
            echo $_GET["language3"];
        }

    }
    else
    {
        echo "you have not selected  a box";
    }
    echo "<br>";

    $uemail = $_GET["email"];
    if(empty($uemail)||strlen($uemail)<5)
    {
        echo "please enter a valid email";

    }
    else 
    {
        echo "your email is ".$uemail;
    }
    echo "<br>";

    $upass = $_GET["password"];
    if(empty($upass)||strlen($upass)<5)
    {
        echo "please enter a valid password";

    }
    else 
    {
        echo "your password is successfully submitted";
    }
    echo "<br>";


}

 
 ?>