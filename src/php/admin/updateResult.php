<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../../style/style.css">
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-7">
                <a href="dashboard.html">
                        <img src="../../../resources/img/logo.jpg" width="200"
                        height="100">
                        <span class="header">Blood Bank</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include('../database/config.php');
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$weight=$_POST['weight'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$ldate=$_POST['ldate'];
$bloodgroup=$_POST['bloodgroup'];
$state=$_POST['state'];
$city=$_POST['city'];

$email=$_SESSION["email"];
$password=$_SESSION["password"];


 $sql = "UPDATE donor SET fullname='$fullname' ,mobileno='$mobileno',weight='$weight',address='$address',gender='$gender',bdate='$date',ldate='ldate',bloodgroup='$bloodgroup',state='$state',city='$city' WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>

</body>
</html>