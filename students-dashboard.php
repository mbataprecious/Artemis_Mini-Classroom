<?php
    session_start();
    error_reporting (1);
    include('functions/connection.php');
    $con = connect();
    
if( (!isset($_SESSION["userId"])) && ($_SESSION["role"] != 'student') ) {
    header('Location:signin?role=student.php');
}
    
    // get enrolled courses
    $enrolledQuery = 'SELECT * FROM enrolment WHERE student_id = '.$_SESSION["userId"].'';
    $enrolledResult = mysqli_query($con, $enrolledQuery);
    $enrolledCount = mysqli_affected_rows($con);
    if($enrolledCount > 1) {
        $addS = "ES";
    } else {
        $addS = " ";
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class List</title>
    <link rel="icon" href="https://res.cloudinary.com/oluwamayowaf/image/upload/v1569387265/team%20artemis/Artemis_logo2_dp6b6u.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="style/classList.css">
    <link rel="stylesheet" href="style/student-dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Imprima&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/942fa82be2.js"></script>
    
    <style>
        h5, p {
            color: #000;
        }
        
    </style>
</head>

<body>
    
    <?php include('fragments/students_header.php'); ?>
    
    <div class="wrapper" style="border: none !important;">
        
        <div class="db-box">
            <h5>CURRENTLY ENROLLED IN</h5>
            <p><?php echo $enrolledCount; ?> CLASS<?php echo $addS; ?></p>
            <?php
                // check if user has enrolled classes
                if($enrolledCount > 0) {
                    echo '<a href="students_enrolments.php">
                    <button style="padding: 10px; fong-size: 28px;">View Enrolled classes</button>
                    </a>';
                } else {
                    echo '<a href="students_class_list.php">
                    <button style="padding: 10px; fong-size: 28px;">Enroll In a Class Now</button>
                    </a>';
                }
            ?>
            
        </div>
        
        <div class="db-box">
            <h5>ASSIGNMENTS</h5>
            <p>PENDING</p>
        </div>

    </div>
    
   <!-- <div id="main">
        <section>
        </section>
    </div>-->
    <script src="js/classList.js"></script>
    <script src="js/header.js"></script>
</body>

</html>