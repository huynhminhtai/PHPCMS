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
                                if (isset($_GET['dele'])) {
                                    $delete_id = $_GET['dele'];
                                    $delete_query = "delete from posts where id = '{$delete_id}'";
                                    $deleteEx = mysqli_query($connection, $delete_query);
                                }
                               
                                 ?>
                   
                        <?php 
                        if(isset($_GET['source'])){
                        	$source = $_GET['source'];
                        } else{
                        	$source = "";
                        }
                        switch ($source) {
                        		case 'view_all_post':
                        			include "include/showAllPost.php";
                        			break;

                        		case 'add_post':
                        		    include "include/addPost.php";
                        			break;

                        		case 'update':
                        		    include "include/editPost.php";
                        			break;
                                    
                        		default:
                        			include "include/showAllPost.php";
                        			break;

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