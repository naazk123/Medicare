<!DOCTYPE html>
<html>
<head>
    <title>View Medical Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 6px 10px;
            text-decoration: none;
            background-color: #f2f2f2;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>View Medical Record</h2>
        <?php
        // Include database connection
        include("dbconnection.php");

        // Check if patient ID is provided
        if (isset($_GET['patientid'])) {
            $patientid = $_GET['patientid'];

            // Fetch medical record for the provided patient ID
            $query = "SELECT * FROM appointment WHERE patientid = $patientid";
            $result = mysqli_query($con, $query);

            // Fetch appointments for the provided patient ID
            $query = "SELECT * FROM appointment WHERE patientid = $patientid";
            $result = mysqli_query($con, $query);

            // Display appointments in a table
            if (mysqli_num_rows($result) > 0) {
                echo '<h3>Appointments</h3>';
                echo '<table>';
                echo '<tr><th>Appointment ID</th><th>Appointment Type</th><th>Appointment Date</th><th>Appointment Time</th><th>Doctor ID</th><th>Status</th><th>Action</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['appointmentid'] . '</td>';
                    echo '<td>' . $row['appointmenttype'] . '</td>';
                    echo '<td>' . $row['appointmentdate'] . '</td>';
                    echo '<td>' . $row['appointmenttime'] . '</td>';
                    echo '<td>' . $row['doctorid'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td>';
                    echo '<form action="update_form.php" method="post">';
                    echo '<input type="hidden" name="appointmentid" value="' . $row['appointmentid'] . '">';
                    echo '<input type="submit" value="Update">';
                    echo '</form>';
                    echo '<br>';
                    echo '<form action="delete_appointment.php" method="post">';
                    echo '<input type="hidden" name="appointmentid" value="' . $row['appointmentid'] . '">';
                    echo '<input type="submit" value="Delete">';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';

                }
                echo '</table>';
            } else {
                echo '<p>No appointments found for the provided patient ID.</p>';
            }
        } else {
            echo '<p>Please provide a valid patient ID.</p>';
        }

        // Close database connection
        mysqli_close($con);
        ?>
    </div>
</body>
</html>
