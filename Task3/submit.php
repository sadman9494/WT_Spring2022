<?php
$uname=$pass= "";
$_language1 =$_language2 =$_language3 ="not selected";
if(isset($_POST["submit"]))
{
    $uname = $_POST["firstname"];
    if(empty($uname)||strlen($uname)<5)
    {
        echo "please enter a valid name";

    }
    else 
    {
        echo "your name has successfully submitted";
    }
    echo "<br>";

    $age = $_POST["age"];
    if (empty($age))
    {
        echo "please enter a valid age";
    }
    else 
    {
        echo "your age is successfully submitted";
    }

    echo "<br>";

    if (isset($_POST["radio"]))
    {
        echo "your data successfully submitted";
    }
    else
    {
        echo " you have not selected any radio button";
    }
    echo "<br>";

    
    
    

    if (isset($_POST["language1"])||isset($_POST["language2"])||isset($_POST["language3"]))
    {
        echo "you have selected ";
        if (isset($_POST["language1"]))
        {
            $_language1 = $_POST["language1"];
        }
        if (isset($_POST["language2"]))
        {
            $_language2 = $_POST["language2"];
        }
        if (isset($_POST["language3"]))
        {
            $_language3 = $_POST["language3"];
        }

    }
    else
    {
        echo "you have not selected  a box";
    }
    echo "<br>";

    $uemail = $_POST["email"];
    if(empty($uemail)||strlen($uemail)<5)
    {
        echo "please enter a valid email";

    }
    else 
    {
        echo "your email is ".$uemail;
    }
    echo "<br>";

    $upass = $_POST["password"];
    if(empty($upass)||strlen($upass)<5)
    {
        echo "please enter a valid password";

    }
    else 
    {
        echo "your password is successfully submitted";
    }
    echo "<br>";



    
    echo "<br>";
    echo "<br>";
    echo "<br>";



	
	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'age'=> $_POST["age"],
	      'email'=>$_POST["email"],
          'radio'=>$_POST["radio"],
          'language1' => $_language1 ,
          'language2' => $_language2 ,
          'language3' => $_language3 ,

	   );
       $existingdata = file_get_contents('Data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("Data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("Data.json");
	 $mydata = json_decode($data);

    
	 
	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	



}

 
 ?>