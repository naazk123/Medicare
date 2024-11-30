<!DOCTYPE html>
<html>
<head>
    <title>Appointment Form</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size:cover;
    background-attachment:fixed;
    /* background-color: #f0f0f0; */
    /* background-image:url('https://st2.depositphotos.com/2065849/7859/i/450/depositphotos_78594982-stock-photo-medical-drip-on-the-background.jpg') */
    background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2TQy0sE6fr86CcXGdG5R72li75C4mLYS26Ir_URN0ws1RQPZqprfvqRlm2TIMoSqvppY&usqp=CAU')
}

.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="time"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color:  #528AAe;
    color: black;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    font-size:15px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Appointment Form</h2>
        <form action="apt2.php" method="post">
            <label for="appointmenttype">Appointment Type:</label>
            <input type="text" id="appointmenttype" name="appointmenttype" required><br><br>

            <label for="patientid">Patient ID:</label>
            <input type="text" id="patientid" name="patientid" required><br><br>

            <label for="roomid">Room ID:</label>
            <input type="text" id="roomid" name="roomid" required><br><br>

            <label for="departmentid">Department ID:</label>
            <input type="text" id="departmentid" name="departmentid" required><br><br>

            <label for="appointmentdate">Appointment Date:</label>
            <input type="date" id="appointmentdate" name="appointmentdate" required><br><br>

            <label for="appointmenttime">Appointment Time:</label>
            <input type="time" id="appointmenttime" name="appointmenttime" required><br><br>

            <label for="doctorid">Doctor ID:</label>
            <input type="text" id="doctorid" name="doctorid" required><br><br>

            <label for="app_reason">Reason for Appointment:</label><br>
            <textarea id="app_reason" name="app_reason" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
