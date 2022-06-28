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
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/note.png);">
        <div class="bradcumbContent">
            <p>user info</p>
            <h2>회원 정보</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>회원 정보</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <!--class="text-danger" : 빨간색-->
                                    <label class="text-danger">* 아이디</label>
                                    <input class="form-control" placeholder="<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} ?>" disabled>
                                    
                                </div>

                                <!--name-->
                                <div class="form-group">
                                    <label class="text-danger">* 이름</label>
                                    <input class="form-control" placeholder="<?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];} ?>" disabled>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label>주소</label>
                                    <input class="form-control" placeholder="<?php if(isset($_SESSION['address'])) {echo $_SESSION['address'];} ?>" disabled>
                                </div>

                                <button type="submit" class="btn oneMusic-btn mt-30">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
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