<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: url('https://img.freepik.com/free-photo/medicine-blue-background-flat-lay_23-2149341573.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 500px;
        margin: 5px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="tel"],
    input[type="password"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #1f95c4;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    
</style>
</head>
<body>
<div class="container">
    <h2>Registration Form</h2>
    <form action="patient_reg2.php" method="post" name="frmappnt" onSubmit="return validateform()">
        <label for="name">Patient Name:</label>
        <input type="text" id="name" name="name">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <label for="mobile">Mobile No:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}">

        <label for="city">City:</label>
        <input type="text" id="city" name="city">

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode">

        <label for="loginid">Login ID:</label>
        <input type="text" id="loginid" name="loginid">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">

        <label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="blood_group">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <input type="submit" value="Submit">
    </form>
    
</div>
</body>

<script type="application/javascript">
    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
    var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
    var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 
    
    function validateform()
    {
        if(document.frmpatient.name.value == "")
        {
            alert("Patient name should not be empty..");
            document.frmpatient.name.focus();
            return false;
        }
    else if(!document.frmpatient.name.value.match(alphaspaceExp))
        {
            alert("Patient name not valid..");
            document.frmpatient.name.focus();
            return false;
        }
        else if(document.frmpatient.admissiondate.value == "")
        {
            alert("Admission date should not be empty..");
            document.frmpatient.admissiondate.focus();
            return false;
        }
        else if(document.frmpatient.admissiontme.value == "")
        {
            alert("Admission time should not be empty..");
            document.frmpatient.admissiontme.focus();
            return false;
        }
        else if(document.frmpatient.address.value == "")
        {
            alert("Address should not be empty..");
            document.frmpatient.address.focus();
            return false;
        }
        else if(document.frmpatient.mobile.value == "")
        {
            alert("Mobile number should not be empty..");
            document.frmpatient.mobilenumber.focus();
            return false;
        }
        else if(!document.frmpatient.mobile.value.match(numericExpression))
        {
            alert("Mobile number not valid..");
            document.frmpatient.mobile.focus();
            return false;
        }
        else if(document.frmpatient.city.value == "")
        {
            alert("City should not be empty..");
            document.frmpatient.city.focus();
            return false;
        }
        else if(!document.frmpatient.city.value.match(alphaspaceExp))
        {
            alert("City not valid..");
            document.frmpatient.city.focus();
            return false;
        }
        else if(document.frmpatient.pincode.value == "")
        {
            alert("Pincode should not be empty..");
            document.frmpatient.pincode.focus();
            return false;
        }
        else if(!document.frmpatient.pincode.value.match(numericExpression))
        {
            alert("Pincode not valid..");
            document.frmpatient.pincode.focus();
            return false;
        }
        else if(document.frmpatient.loginid.value == "")
        {
            alert("Login ID should not be empty..");
            document.frmpatient.loginid.focus();
            return false;
        }
        else if(!document.frmpatient.loginid.value.match(alphanumericExp))
        {
            alert("Login ID not valid..");
            document.frmpatient.loginid.focus();
            return false;
        }
        else if(document.frmpatient.password.value == "")
        {
            alert("Password should not be empty..");
            document.frmpatient.password.focus();
            return false;
        }
        else if(document.frmpatient.password.value.length < 8)
        {
            alert("Password length should be more than 8 characters...");
            document.frmpatient.password.focus();
            return false;
        }
        else if(document.frmpatient.password.value != document.frmpatient.confirm_password.value )
        {
            alert("Password and confirm password should be equal..");
            document.frmpatient.confirm_password.focus();
            return false;
        }
        
        else if(document.frmpatient.dob.value == "")
        {
            alert("Date Of Birth should not be empty..");
            document.frmpatient.dob.focus();
            return false;
        }
        
        else
        {
            return true;
        }
    }
    </script>
</html>