
<?php
    include 'connection.php';

    if (isset($_POST['urid'])) {
        $urstatus = $_POST['urstatus'];
        $urid = $_POST['urid'];
        // $q = "UPDATE ufeedback SET viral='$viral' WHERE fid=$fid";
        $q="UPDATE `user_review` SET `urstatus`='$urstatus' WHERE urid=$urid";
        if ($rs = mysqli_query($cn, $q)) {
            // echo "<script>alert('Feedback Published')</script>";
            echo 1;
        } else {
            // echo "<script>alert('Feedback Unpublished')</script>";
            echo 0;
        }
    }

?>