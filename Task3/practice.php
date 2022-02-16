<html>
    
<body>
<h3> Ragistration Form</h3>
    
    <form action = "submit.php" method = "post">
    <table> 
        <tr>
           <td>  Name : </td>
            <td><input type ="text" name = "firstname" > </td>
        </tr>
       
        <tr>
            <td>Age:</td>
            <td><input type = "number" name = "age" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Designation :</td>
            <td>
            <input type = "radio" name = "radio" value = "Junior Programmer" > Junior Programmer 
             <input type = "radio" name = "radio"value = "Seniro Programmer" > Senior Programmer
             <input type = "radio" name = "radio"value = " Progect Lead" > Project Lead
            </td> 
        <tr>
        <td>preferedlanguage :</td>
              <td>
                            <input type = "checkbox" name = "language1" value = "c++"> C++
                           
                            <input type = "checkbox" name = "language2" value = "java" >JAVA
                            
                            <input type = "checkbox" name = "language3" value = "php" >  php
                            
                 </td>
        </tr>
        <tr>
            <td>Eamil :</td> 
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
        <td><input type = "submit" name = submit> </td> 
        <td><input type = "reset"></td> 
        </tr>
    </table>
 </from>
    </body>
</html>