<html>
    
<body>
<h3> Ragistration Form</h3>
    
    <form action = "/action_page.php">
    <table> 
        <tr>
           <td> First Name : </td>
            <td><input type ="text" fname = "firstname" > </td>
        </tr>
        <tr>
            <td>Last name :</td>
            <td><input type = "text" lname = "lastname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type = "number" age = "age" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Designation :</td>
            <td>
            <input type = "radio" name = "designation" > Junior Programmer 
             <input type = "radio" name = "designation" > Senior Programmer
             <input type = "radio" name = "designation" > Project Lead
            </td> 
        <tr>
            <td>Preffered Language :</td> 
            <td><input type = "checkbox" name = "language1" value = "Java"> 
            <input type = "checkbox" name = "language1" value = "PHP"> 
            <input type = "checkbox" name = "language1" value = "C++"></td> 
        </tr>
        <tr>
            <td>First Eamil :</td> 
            <td><input type ="text" email = "email" ></td>  
        </tr>
        <tr>
        <td>Password :</td> 
        <td><input type ="password" password = "password"  ></td> 
        </tr>
        <tr>  
        <td>Please choose a file :</td>  
        <td><input type = "file" file = "file"> </td> 
        </tr>
        <tr>
        <td><input type = "submit"> </td> 
        <td><input type = "reset"></td> 
        </tr>
    </table>
 </from>

    </body>
</html?
