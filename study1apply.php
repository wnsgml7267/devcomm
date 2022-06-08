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

    <!-- Style <select> -->
    <style>
        select {
            width: 100px;
            font-family: inherit;
            background: url(./img/select-img/arrow.png) no-repeat 95% 50%;
            color: #FFF;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 0px solid #FFF;
            border-radius: 0px;
        }
        select option {
            color: #000;
        }

        select::-ms-expand {
            /* for IE 11 */
            display: none;
        }
    </style>

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
        $sql = "SELECT * FROM `study1` WHERE `no` = $no";
        $result = mysqli_query($conn, $sql);
    ?>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/note.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>신청하기</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <?php foreach($result as $ap) { ?>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="_study1apply.php" method="post">
                            <div class="row">

                                <input name="no" type="hidden" value="<?=$no;?>">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p class="form-control">현재인원 : <a href="#"> <?=$ap['apply'];?></a></p>
                                        <p class="form-control">최대인원 : <a href="#"> <?=$ap['recruit'];?></a></p>
                                        <div class="form-control">신청 인원 : 
                                            <select name="apply">
                                                <?php if ($ap['recruit'] == $ap['apply']) { ?>
                                                    <?= $apl = $ap['apply'];?>    
                                                <?php } else { ?>
                                                    <?= $apl = $ap['apply']+1;?>
                                                <?php } ?>
                                                <option value="<?=$apl?>">1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">신청 <i class="fa fa-angle-double-right"></i></button>
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