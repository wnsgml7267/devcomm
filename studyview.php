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
        $current_page = $_GET['current_page'];
        require('_conn.php');
        $sql = "SELECT * FROM `study1` WHERE `no` = $no";
        $result = mysqli_query($conn, $sql);
    ?>
    <?php require('_studyview1page.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/note.png);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>게시판 조회</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>
                        <button class="btn btn-secondary" onclick="location.href='study.php?current_page=<?=$current_page;?>'">뒤로</button>
                        <hr>
                    <?php
                        }

                        foreach($result as $study) { 
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($study['img_file']) { ?>
                                <a href="#"><img src="study_img/<?=$study['img_file'];?>" alt="study image"></a>
                            <?php } else { ?>
                                <a href="#"><img src="bbs_img/noimage.png" alt="no study image"></a>
                            <?php } ?>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php 
                                    if ($study['mod_date'] != null) {
                                        $day = date("d", strtotime($study['mod_date']));
                                        $month = date("F", strtotime($study['mod_date']));
                                        $year = date("y", strtotime($study['mod_date']));
                                    } else {
                                        $day = date("d", strtotime($study['reg_date']));
                                        $month = date("F", strtotime($study['reg_date']));
                                        $year = date("y", strtotime($study['reg_date']));
                                    }
                                ?>
                                <span><?=$day;?></span>
                                <span><?=$month;?> ‘<?=$year;?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$study['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">작성자 : <a href="#"> <?=$study['name'];?></a></p>
                                <p class="tags">카테고리 : <a href="#"> <?=$study['category'];?></a></p>
                                <p class="tags">참여인원 : <a href="#"> <?=$study['apply'];?></a></p>
                                <p class="tags">최대인원 : <a href="#"> <?=$study['recruit'];?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$study['content'];?></p>

                            <hr>

                            <!-- 수정, 삭제 버튼 -->
                            <?php 
                                if(isset($_SESSION['id'])) {
                                    if($_SESSION['id'] == $study['id']) { 
                            ?>
                                        <button class="btn btn-secondary" onclick="location.href='study1mod.php?no=<?=$study['no'];?>'">수정</button>
                                        <button class="btn btn-secondary" onclick="location.href='_study1delete.php?no=<?=$study['no'];?>'">삭제</button>
                            <?php 
                                    } else {
                            ?>
                                        <button class="ml-5 btn btn-secondary" onclick="location.href='study1apply.php?no=<?=$study['no'];?>'"> 신청하기 </button>
                                        <button class="ml-5 btn btn-secondary" name='apply' value='$cancel' onclick="location.href='study1cancel.php?no=<?=$study['no'];?>'"> 신청취소 </button>
                            <?php
                                    }
                                }
                            ?>    
                        </div>
                    </div>
                    <!-- Single Post End -->                    

                    <?php
                        }
                    ?>


                </div>            
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    
    
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