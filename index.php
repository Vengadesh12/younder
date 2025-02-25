<?php
include "db.php"; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contract_no = $_POST['contract_no'];
    $tender_no = $_POST['tender_no'];
    $project_name = $_POST['project_name'];
    $assigned_team = $_POST['assigned_team'];
    $current_status = $_POST['current_status'];
    $project_duration = $_POST['project_duration'];
    $client_name = $_POST['client_name'];
    $client_id = $_POST['client_id'];
    $pile_type = $_POST['pile_type'];
    $no_of_piles = $_POST['no_of_piles'];
    $pile_length = $_POST['pile_length'];
    $expected_installation_rate = $_POST['expected_installation_rate'];
    $penetration_record = $_POST['penetration_record'];
    $rig_details = $_POST['rig_details'];
    $address = $_POST['address'];
    $rig_length = $_POST['rig_length'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $restrike = $_POST['restrike'];
    $no_of_days_piling = $_POST['no_of_days_piling'];

    $query = "INSERT INTO projects (contract_no, tender_no, project_name, assigned_team, current_status, project_duration, client_name, client_id, pile_type, no_of_piles, pile_length, expected_installation_rate, penetration_record, rig_details, address, rig_length, start_date, end_date, restrike, no_of_days_piling) 
              VALUES ('$contract_no', '$tender_no', '$project_name', '$assigned_team', '$current_status', '$project_duration', '$client_name', '$client_id', '$pile_type', '$no_of_piles', '$pile_length', '$expected_installation_rate', '$penetration_record', '$rig_details', '$address', '$rig_length', '$start_date', '$end_date', '$restrike', '$no_of_days_piling')";
              
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Project added successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Project Management Form</h2>
    <form method="POST">
        Contract No: <input type="text" name="contract_no" required><br>
        Tender No: <input type="text" name="tender_no" required><br>
        Project Name: <input type="text" name="project_name" required><br>
        Assigned Team: <input type="text" name="assigned_team" required><br>
        Current Status: <input type="text" name="current_status"><br>
        Project Duration: <input type="text" name="project_duration"><br>
        Client Name: <input type="text" name="client_name"><br>
        Client ID: <input type="text" name="client_id"><br>
        Pile Type: <input type="text" name="pile_type"><br>
        No. of Piles: <input type="number" name="no_of_piles"><br>
        Pile Length: <input type="text" name="pile_length"><br>
        Expected Installation Rate: <input type="text" name="expected_installation_rate"><br>
        Penetration Record: <input type="text" name="penetration_record"><br>
        Rig Details: <input type="text" name="rig_details"><br>
        Address: <input type="text" name="address"><br>
        Rig Length: <input type="text" name="rig_length"><br>
        Start Date: <input type="date" name="start_date"><br>
        End Date: <input type="date" name="end_date"><br>
        Restrike %: <input type="number" name="restrike"><br>
        No. of Days Piling: <input type="number" name="no_of_days_piling"><br>

        <button type="submit">Submit</button>
    </form>

    <h2>Project Records</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Contract No</th>
            <th>Project Name</th>
            <th>Client Name</th>
            <th>Start Date</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM projects");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['contract_no']}</td>
                    <td>{$row['project_name']}</td>
                    <td>{$row['client_name']}</td>
                    <td>{$row['start_date']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
