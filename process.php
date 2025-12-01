<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <style>
        body {
            font-family: Arial;
            background: #eef1f7;
            padding: 20px;
        }
        .box {
            background: white;
            width: 50%;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        h2 { text-align: center; }
        p { font-size: 18px; }
    </style>
</head>
<body>

<div class="box">
    <h2>Application Details</h2>

    <p><strong>Name:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
</div>

</body>
</html>
