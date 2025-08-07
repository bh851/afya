
<?php
include 'db.php';



$search = "";
if (isset($_POST['search_patient'])) {
    $search = $conn->real_escape_string($_POST['search_patient']);
    $sql = "SELECT * FROM registration WHERE patientname LIKE '%$search%' OR patientid LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM registration";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>All Patient Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f7f6;
            padding: 20px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .search {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        input[type="search"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #2ecc71;
            border: none;
            border-radius: 0 5px 5px 0;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60;
        }

     
      

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            min-width: 1000px; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 14px;
            text-align: center;
        }

        th {
            background-color: #007b5e;
            color: white;
            position: sticky;
            top: 0;
        }
  
       

       
        @media (max-width: 768px) {
            h1 {
                font-size: 20px;
            }

            .search {
                flex-direction: column;
            }

            input[type="search"] {
                width: 100%;
                margin-bottom: 10px;
            }

            button {
                width: 100%;
            }

            table {
                font-size: 12px;
            }

            th, td {
                padding: 6px;
            }
        }

       
        @media (max-width: 480px) {
            h1 {
                font-size: 18px;
            }

            table {
                font-size: 10px;
            }

            th, td {
                padding: 5px;
            }

            .delete-btn {
                font-size: 12px;
            }
        }
        a{
             text-decoration: none;
        }
    </style>
</head>
<body>
    <h2><a href="home.html">Home</a></h2>

<h1>All Patient Details</h1>

<form action="" method="post">
    <div class="search">
        <input type="search" name="search_patient" placeholder="Search patient" value="<?= htmlspecialchars($search) ?>" />
        <button type="submit">Search</button>
    </div>
</form>


<div class="table-wrapper">
    <table>
        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Diagnosis</th>
            <th>Weight</th>
            <th>Height</th>
            <th>MUAC</th>
            <th>Pressure</th>
            <th>Service</th>
            <th>Group</th>
            <th>Price</th>
            <th>History</th>
            <th>Follow Up</th>
            <th>Planning</th>
            <th>Registration Date</th>
             <th>referal/non referal</th>
           
        </tr>

        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['patientid']) ?></td>
                <td><?= htmlspecialchars($row['patientname']) ?></td>
                <td><?= htmlspecialchars($row['dateofbirth']) ?></td>
                <td><?= htmlspecialchars($row['sex']) ?></td>
                <td><?= htmlspecialchars($row['age']) ?></td>
                <td><?= htmlspecialchars($row['phoneno']) ?></td>
                <td><?= htmlspecialchars($row['diagnosis']) ?></td>
                <td><?= htmlspecialchars($row['weight']) ?></td>
                <td><?= htmlspecialchars($row['height']) ?></td>
                <td><?= htmlspecialchars($row['muac']) ?></td>
                <td><?= htmlspecialchars($row['pressure']) ?></td>
                <td><?= htmlspecialchars($row['servicename']) ?></td>
                <td><?= htmlspecialchars($row['patientgroup']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td><?= htmlspecialchars($row['phistory']) ?></td>
                <td><?= htmlspecialchars($row['followup']) ?></td>
                <td><?= htmlspecialchars($row['planning']) ?></td>
                <td><?= htmlspecialchars($row['registrationdate']) ?></td>
                   <td><?= htmlspecialchars($row['referal']) ?></td>
                <td>
                 
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="19">No patients found.</td></tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>
