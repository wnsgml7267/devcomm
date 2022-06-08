<?php
    require('_conn.php');

    $no = $_POST['no'];
    $apply = $_POST['apply'];
    $recruit = $_POST['recruit'];

    if ($apply >= $recruit) {
        echo "<script>alert('마감되었습니다.');location.href='study.php'</script>";
    } else {
        $sql = "UPDATE `study1` SET `apply`='$apply' WHERE `no`='$no'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('신청이 완료되었습니다.');location.href='study.php'</script>";
        }
    }
?>