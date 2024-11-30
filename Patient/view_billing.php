<!DOCTYPE html>
<html>
<head>
    <title>View Medical Record, Appointments, and Billing</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>View Medical Record, Appointments, and Billing</h2>
        <?php
        // Include database connection
        include("dbconnection.php");

        // Check if patient ID is provided
        if (isset($_GET['patientid'])) {
            $patientid = $_GET['patientid'];

            // Fetch medical record for the provided patient ID
            $query = "SELECT * FROM patient WHERE patientid = $patientid";
            $result = mysqli_query($con, $query);

            // Display medical record in a table
            // Code to display medical records here...

            // Fetch appointments for the provided patient ID
            // Code to display appointments here...

            // Fetch billing records for the provided patient ID
            $query = "SELECT * FROM billing WHERE patientid = $patientid";
            $result = mysqli_query($con, $query);

            // Display billing records in a table
            if (mysqli_num_rows($result) > 0) {
                echo '<h3>Billing Record</h3>';
                echo '<table>';
                echo '<tr><th>Billing ID</th><th>Patient ID</th><th>Appointment ID</th><th>Billing Date</th><th>Billing Time</th><th>Discount</th><th>Tax Amount</th><th>Discount Reason</th><th>Discharge Date</th><th>Discharge Time</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['billingid'] . '</td>';
                    echo '<td>' . $row['patientid'] . '</td>';
                    echo '<td>' . $row['appointmentid'] . '</td>';
                    echo '<td>' . $row['billingdate'] . '</td>';
                    echo '<td>' . $row['billingtime'] . '</td>';
                    echo '<td>' . $row['discount'] . '</td>';
                    echo '<td>' . $row['taxamount'] . '</td>';
                    echo '<td>' . $row['discountreason'] . '</td>';
                    echo '<td>' . $row['discharge_date'] . '</td>';
                    echo '<td>' . $row['discharge_time'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>No billing records found for the provided patient ID.</p>';
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
