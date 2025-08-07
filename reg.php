<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $patientid = $_REQUEST['patientid'];
        $patientname = $_REQUEST['patientname'];
        $dateofbirth = $_REQUEST['dateofbirth'];
        $sex = $_REQUEST['sex'];
        $age = $_REQUEST['age'];
        $phoneno = $_REQUEST['phoneno'];
        $nutritionstatus = $_REQUEST['diagnosis'];
        $weigh = $_REQUEST['weight'];
        $height = $_REQUEST['height'];
        $muac = $_REQUEST['muac'];
     
        $pressure= $_REQUEST['pressure'];
        $servicename=$_POST['servicename'];
        $patientgroup=$_POST['patientgroup'];
        $price=$_POST['price'];
        $patienthis=$_POST['phistory'];
        $followup=$_POST['followup'];
        $planning=$_POST['planning'];
        $registration=$_POST['registrationdate'];
            $referal=$_POST['referal'];
     $sql = "INSERT INTO registration(patientid, patientname, dateofbirth, sex, age, phoneno, diagnosis, weight, height, 
muac, pressure, servicename, patientgroup, price,phistory, followup, planning,registrationdate,referal) 
VALUES ('$patientid', '$patientname', '$dateofbirth', '$sex', '$age', '$phoneno', '$nutritionstatus', '$weigh', '$height',
'$muac', '$pressure', '$servicename', '$patientgroup', '$price', '$patienthis', '$followup', '$planning',' $registration','$referal')";

if($conn->query($sql)){
    echo "registration successfully. <a href='register.html'>back</a>";
} else {
    echo "Error: " . $conn->error;
}

     
}
?>