 <?php
        $conn = mysqli_connect("localhost", "nuo", "12345678", "nutritiondb");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $patientno = $_REQUEST['patientno'];
        $patientname = $_REQUEST['patientname'];
        $date = $_REQUEST['date'];
        $sex = $_REQUEST['sex'];
        $age = $_REQUEST['age'];
        $phoneno = $_REQUEST['phoneno'];
        $nutritionstatus = $_REQUEST['nutritionstatus'];
        $weight = $_REQUEST['weight'];
        $height = $_REQUEST['height'];
        $muac = $_REQUEST['muac'];
        $history = $_REQUEST['history'];
        $followup = $_REQUEST['followup'];
        $planning = $_REQUEST['planning'];
        $muac = $_REQUEST['muac'];
        $history = $_REQUEST['history'];
        $followup = $_REQUEST['followup'];
        $planning = $_REQUEST['planning'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO patienttable VALUES ('$patientno', '$patientname','$date', '$sex','$age', '$phoneno','$nutritionstatus','$weight', '$height','$muac', '$history','$followup','$planning')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3> Customer Data Inserted successfully

</h3>";

            echo nl2br("\n$patientno\n");
            echo nl2br("\n$$patientname\n");
            echo nl2br("\n$date\n");
            echo nl2br("\n$sex\n");
            echo nl2br("\n$age\n");
            echo nl2br("\n$phoneno\n");
            echo nl2br("\n$nutritionstatus\n");
            echo nl2br("\n$weight\n");
            echo nl2br("\n$height\n");
            echo nl2br("\n$muac\n");
            echo nl2br("\n$history\n");
            echo nl2br("\n$followup\n");
            echo nl2br("\n$planning\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>