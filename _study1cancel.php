<?php
    require('_conn.php');

    $no = $_POST['no'];
    $apply = $_POST['apply'];
    $recruit = $_POST['recruit'];

    $sql = "UPDATE `study1` SET `apply`='$apply' WHERE `no`='$no'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('신청이 취소되었습니다.');location.href='study.php'</script>";
    }
    
?>