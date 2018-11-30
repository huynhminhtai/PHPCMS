<?php include "include/header.php"  ?>



<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include/navigation.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                        <?php 
                        if(isset($_GET['source'])){
                        	$source = $_GET['source'];
                        	switch ($source) {
                        		case 'view_all_post':
                        			include "include/showAllPost.php";
                        			break;
                        		case 'add_post':
                        		include "include/addPost.php";
                        			break;
                        	}
                        }
                        if(isset($_GET['dele'])){

                        }
                        ?>
                         
                        
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



<?php include "include/footer.php"  ?>