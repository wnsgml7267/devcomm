<?php
    require('_conn.php');

    $no = $_POST['no'];
    $name = $_SESSION['name'];
    $category = $_POST['category'];
    $field = $_POST['field'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE `project` SET `name`='$name', `category`='$category', `field`='$field', `title`='$title', `mod_date`=CURRENT_TIMESTAMP(), `content`='$content' WHERE `no`='$no'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('글 수정이 완료되었습니다.');location.href='project.php'</script>";
    }
?>