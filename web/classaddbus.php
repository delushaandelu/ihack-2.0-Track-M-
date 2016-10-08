<?php
    include ('config/database.php');
    if(isset($_POST["submit"])){
    $pnum = $_POST['pnum'];
    $rnum = $_POST['rnum'];
    $root = $_POST['root'];
    $dept = $_POST['dept'];
    $track = $_POST['track'];
    $mac = $_POST['mac'];

    $sql="INSERT INTO buses (pnum,rnum,root,dept,track,mac) VALUES ('$pnum','$rnum','$root','$dept','$track','$mac')";


    if (mysqli_query($con, $sql) === TRUE) {
        echo'<script>';
        echo"alert('We will give your account authentication soon! Thank you')";
        echo'</script>';
        header('location:addbus.php');
    } else {

        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
    }
    mysqli_close($conn);
    }
?>