function validation()
{    
    let valid=true
    if (document.getElementById('fname').value == "") 
    {
    alert("Input Field cannot be empty");
    valid=false;
    } 
    else if (/^[a-zA-Z]+$/.test(document.getElementById("fname").value) == false) 
    {
    alert("First Name cannot contain any number or symbol");
    valid=false;
    } 

    if (document.getElementById('lname').value == "") 
    {
    alert("Last name cannot be empty");
    valid=false;
    } 
    else if (/^[a-zA-Z]+$/.test(document.getElementById("lname").value) == false) 
    {
    alert("Last Name cannot contain any number or symbol");
    valid=false;
    } 

    if (document.getElementById('age').value == "") 
    {
    alert("Age cannot be empty");
    valid=false;
    } 
    else if (/^[0-9]+$/.test(document.getElementById("age").value) == false) 
    {
    alert("age can only contain numbers");
    valid=false;
    } 

    if (document.getElementById('email').value == "") 
    {
    alert("Email cannot be empty");
    valid=false;
    } 
    else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value) == false) 
    {
    alert("Invalid email");
    valid=false;
    } 

    if (document.getElementById('password').value == "") 
    {
    alert("Password cannot be empty");
    valid=false;
    } 
    else if (/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/.test(document.getElementById("password").value) == false) 
    {
    alert("Password must contain an upper case, a lowercase, a number, a symbol and length of 8 characters");
    valid=false;
    } 

    if (document.querySelectorAll('input[type="radio"]:checked').length == 0)
    {
        alert('Please Select a designation');
        valid= false;
    }

    if (document.querySelectorAll('input[type="checkbox"]:checked').length == 0)
    {
        alert('Please Select Preferred Language');
        valid=false;
    }
    return valid;
}