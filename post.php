<?php include "include/header.php" ?>
<?php include "include/db.php" ?>

<body>

    <!-- Navigation -->
    <?php include "include/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                    <?php 
                    if(isset($_GET['postid'])){


                        $post_id = $_GET['postid'];
                        $get_post_query = "select * from posts where postId = $post_id";
                        $get_post_queryEx = mysqli_query($connection, $get_post_query);
                        $post =     $get_post_queryEx -> fetch_assoc();                   


                        $title = $post['title'];
                        $author = $post['author'];
                        $createDate = $post['createDate'];
                        $image = $post['image'];
                        $content = $post['content'];
                        }
                     ?>


                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo   $title?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $createDate ?></p>
                    <hr>
                    <img class="img-responsive" src="<?php echo $image ?>" alt="">
                    <hr>
                    <p><?php echo $content ?></p>


                    

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "include/sidebar.php" ?>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <?php include "include/footer.php" ?>