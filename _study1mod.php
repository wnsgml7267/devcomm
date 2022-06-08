<?php
    require('_conn.php');

    $no = $_POST['no'];
    $name = $_SESSION['name'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $recruit = $_POST['recruit'];
    $apply = $_POST['apply'];

    $sql = "UPDATE `study1` SET `name`='$name', `category`='$category', `title`='$title', `mod_date`=CURRENT_TIMESTAMP(), `content`='$content', `recruit`='$recruit', `apply`='$apply' WHERE `no`='$no'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('글 수정이 완료되었습니다.');location.href='study.php'</script>";
    }
?>