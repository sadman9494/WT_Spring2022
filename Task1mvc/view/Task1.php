<html>
    
<body>
    <?php
    include "../control/registration.php";
    ?>
<h3> Ragistration Form</h3>
    
    <form action = "" method ="POST" enctype="multipart/form-data">
    <table> 
        <tr>
           <td> First Name : </td>
            <td><input type ="text" name = "firstname" > </td>
        </tr>
        <tr>
            <td>Last name :</td>
            <td><input type = "text" name = "lastname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type = "number" name = "age" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Designation :</td>
            <td>
            <input type = "radio" name = "designation" value= "Junior Programmer"> Junior Programmer 
             <input type = "radio" name = "designation" value ="Senior Programmer"> Senior Programmer
             <input type = "radio" name = "designation" value = "Project lead"> Project Lead
            </td> 
        <tr>
            <td>Preffered Language :</td> 
            <td><input type = "checkbox" name = "language1" value = "Java"> Java 
            <input type = "checkbox" name = "language2" value = "PHP"> PHP
            <input type = "checkbox" name = "language3" value = "C++">C++
         
        </tr>
        <tr>
            <td>First Eamil :</td> 
            <td><input type ="text" name = "email" ></td>  
        </tr>
        <tr>
        <td>Password :</td> 
        <td><input type ="password" name = "password"  ></td> 
        </tr>
        <tr>  
        <td>Please choose a file :</td>  
        <td><input type = "file" name = "file"> </td> 
        </tr>
        <tr>
        <td><input type = "submit" name = "submit"> </td> 
        <td><input type = "reset"></td> 
        </tr>
    </table>
 </from>

    </body>
</html>
