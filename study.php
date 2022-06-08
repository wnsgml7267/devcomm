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
    
    <?php require('_study1page.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/note.png);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>스터디</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### study Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>
                        <button class="btn btn-secondary" onclick="location.href='study1write.php'">글쓰기</button>
                        <hr>
                    <?php
                        }

                        foreach($result as $study) { 
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <!-- BBS Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <div class="post-meta d-flex mb-10">
                                <p class="tags">언어 : <a href="#"> <?=$study['category'];?></a></p>
                                <a href="studyview.php?no=<?=$study['no'];?>&current_page=<?=$current_page;?>" class="pr-5 post-title"><?=$study['title'];?></a>

                                <p class="post-author">작성자 : <a href="#"> <?=$study['name'];?></a></p>
                                <p class="post-date">작성일 :  <a href="#"> <?=$study['reg_date'];?></a></p>
                                <p class="post-date">참여인원 : <a href="#"> <?=$study['apply'];?></a> </p>
                                <p class="post-date">모집인원 : <a href="#"> <?=$study['recruit'];?></a> </p>
                                
                                <!-- 수정, 삭제 버튼 -->
                                <?php 
                                    if(isset($_SESSION['id'])) {
                                        if($_SESSION['id'] == $study['id']) { 
                                ?>
                                            <button class="ml-5 btn btn-secondary" onclick="location.href='study1mod.php?no=<?=$study['no'];?>'">수정</button>
                                            <button class="ml-1 btn btn-secondary" onclick="location.href='_study1delete.php?no=<?=$study['no'];?>'">삭제</button>
                                <?php 
                                        } else {
                                ?>
                                        <button class="ml-5 btn btn-secondary" onclick="location.href='study1apply.php?no=<?=$study['no'];?>'"> 신청하기 </button>
                                <?php
                                      }
                                    }
                                ?> 
                         

                            </div>


                        </div>
                    </div>
                    <!-- Single Post End -->                    

                    <?php
                        }
                    ?>



                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="study.php?current_page=1">&laquo;</a></li>
                                
                                <?php if ($current_page > 1) { ?>
                                    <li class="page-item active"><a class="page-link" href="study.php?current_page=<?=$prev_page;?>">앞</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a class="page-link" href="#">앞</a></li>
                                <?php } ?>

                                <?php if ($current_page < $end_page) { ?>
                                    <li class="page-item active"><a class="page-link" href="study.php?current_page=<?=$next_page;?>">뒤</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a class="page-link" href="#">뒤</a></li>
                                <?php } ?>

                                <li class="page-item active"><a class="page-link" href="study.php?current_page=<?=$end_page;?>">&raquo;</a></li>
                            <p>현 페이지 <?=$current_page;?> / 총 페이지 <?=$end_page;?></p>
                            </ul>
                        </nav>
                    </div>
                </div>            

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>카테고리</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Python</a></li>
                                    <li><a href="#">Java</a></li>
                                    <li><a href="#">Javascript</a></li>
                                    <li><a href="#">C</a></li>
                                    <li><a href="#">C++</a></li>
                                    <li><a href="#">C#</a></li>
                                    <li><a href="#">Kotlin</a></li>
                                    <li><a href="#">Ruby</a></li>
                                    <li><a href="#">Go</a></li>
                                    <li><a href="#">Swift</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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