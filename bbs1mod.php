<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>개발자 커뮤니티</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php require('lib/top.php'); ?>

    <?php
        $no = $_GET['no'];
        require('_conn.php');
        $sql = "SELECT * FROM `bbs1` WHERE `no` = $no";
        $result = mysqli_query($conn, $sql);
    ?>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/note.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>글 작성</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <?php foreach($result as $mod) { ?>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="_bbs1mod.php" method="post">
                            <div class="row">

                                <input name="no" type="hidden" value="<?=$no;?>">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="title" type="text" class="form-control" placeholder="제목을 작성해주세요." value="<?=$mod['title'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="category" type="text" class="form-control" placeholder="카테고리를 작성해주세요." value="<?=$mod['category'];?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="본문을 작성해주세요."><?=$mod['content'];?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="img_file" type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">작성 <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <?php require('lib/bottom.php'); ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>