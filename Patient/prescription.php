<!DOCTYPE html>
<html>
<head>
  <title>Prescription Form</title>
  <style>
    body {
  font-family: Arial, sans-serif;
}

.container {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="submit"] {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Prescription Form</h2>
    <form action="process_prescription.php" method="POST">
      <label for="treatment_records_id">Treatment Records ID:</label>
      <input type="text" id="treatment_records_id" name="treatment_records_id" required><br>

      <label for="doctorid">Doctor ID:</label>
      <input type="text" id="doctorid" name="doctorid" required><br>

      <label for="patientid">Patient ID:</label>
      <input type="text" id="patientid" name="patientid" required><br>

      <label for="delivery_type">Delivery Type:</label>
      <input type="text" id="delivery_type" name="delivery_type" required><br>

      <label for="delivery_id">Delivery ID:</label>
      <input type="text" id="delivery_id" name="delivery_id" required><br>

      <label for="prescriptiondate">Prescription Date:</label>
      <input type="date" id="prescriptiondate" name="prescriptiondate" required><br>

      <label for="status">Status:</label>
      <input type="text" id="status" name="status" required><br>

      <label for="appointmentid">Appointment ID:</label>
      <input type="text" id="appointmentid" name="appointmentid" required><br>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
