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
    ?>

    <?php require('_projectviewpage.php'); ?>

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
                        <button class="btn btn-secondary" onclick="location.href='project.php?current_page=<?=$current_page;?>'">뒤로</button>
                        <hr>
                    <?php
                        }

                        foreach($result as $project) { 
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($project['img_file']) { ?>
                                <a href="#"><img src="project_img/<?=$project['img_file'];?>" alt="project image"></a>
                            <?php } else { ?>
                                <a href="#"><img src="project_img/noimage.png" alt="no project image"></a>
                            <?php } ?>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php 
                                    if ($project['mod_date'] != null) {
                                        $day = date("d", strtotime($project['mod_date']));
                                        $month = date("F", strtotime($project['mod_date']));
                                        $year = date("y", strtotime($project['mod_date']));
                                    } else {
                                        $day = date("d", strtotime($project['reg_date']));
                                        $month = date("F", strtotime($project['reg_date']));
                                        $year = date("y", strtotime($project['reg_date']));
                                    }
                                ?>
                                <span><?=$day;?></span>
                                <span><?=$month;?> ‘<?=$year;?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$project['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">작성자 : <a href="#"> <?=$project['name'];?></a></p>
                                <p class="tags">카테고리 : <a href="#"> <?=$project['category'];?></a></p>
                                <p class="tags">모집군 : <a href="#"> <?=$project['field'];?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$project['content'];?></p>

                            <hr>

                            <!-- 수정, 삭제 버튼 -->
                            <?php 
                                if(isset($_SESSION['id'])) {
                                    if($_SESSION['id'] == $project['id']) { 
                            ?>
                                        <button class="btn btn-secondary" onclick="location.href='projectmod.php?no=<?=$project['no'];?>'">수정</button>
                                        <button class="btn btn-secondary" onclick="location.href='_projectdelete.php?no=<?=$project['no'];?>'">삭제</button>
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