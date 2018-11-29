<?php include "include/header.php"  ?>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include/navigation.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Category 
                            <small>Add new</small>
                        </h1>
                        
                        <?php 
                        if(isset($_POST['addCatebtn'])){
                           $categoryTitle = $_POST['cateTitletxt'];
                           $query = "insert into categories(name) value ('{$categoryTitle}')";
                           $result = mysqli_query($connection, $query);
                           
                       }

                       ?>

                       <!-- update -->
                         <?php 
                            if (isset($_GET['update'])) {
                            $update_id = $_GET['update'];
                            $get_update_cate_query = "select * from categories where id = $update_id";
                            $update_Rows = mysqli_query($connection, $get_update_cate_query);
                            $update_Row =  $update_Rows -> fetch_assoc();
                            $display_updateDiv = "block";

                            }
                           

                         ?>
                       <div class="col-xs-6">
                        <div class="addDiv">
                           <form action="categories.php" method="POST" >
                              <div class="form-group">
                                 <input class="form-control" type="text" name="cateTitletxt" required>
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-primary" type="submit" name="addCatebtn" value="Add Category">
                             </div>
                         </form>
                        </div>
                        <div class="updateDiv" style="display: <?php echo $display_updateDiv ?>" >
                           <form action="categories.php" method="POST" >
                              <div class="form-group">
                                 <input class="form-control" type="text" 
                                 name="cateTitletxt" value="<?php  echo  $update_Row['name'] ?>" 
                                 required >
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-primary" type="submit" name="addCatebtn" value="Add Category">
                             </div>
                         </form>
                        </div>
                     </div>


                     <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Category
                                    </td>
                                    <td>
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- delete -->
                                <?php 
                                if (isset($_GET['dele'])) {
                                    $deleId = $_GET['dele'];
                                    $delequery = "delete from categories where id = $deleId";  
                                    $deleteEx = mysqli_query($connection, $delequery);
                                    // if($deleteEx){
                                    //     echo "<script type='text/javascript'>alert('ok!')</script>";
                                    // }
                                    header("Location: categories.php");
                                }
                                 ?>


                                <?php 
                                $query = "select * from categories";
                                $allCategories = mysqli_query($connection, $query);
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($allCategories)) {
                                    $count ++;
                                    $categoryName = $row['name'];
                                    $categoryId = $row['id'];
                                    
                               
                                ?>
                                <tr>
                                    <td>
                                        <?php echo  $count?>
                                    </td>
                                    <td>
                                        <?php echo  $categoryName?>
                                    </td>
                                    <td>
                                        <a href="categories.php?dele=<?php echo  $categoryId?>" class="btn btn-danger btn-sm">
                                          <span class="glyphicon glyphicon-remove"></span> Delete 
                                        </a>

                                        <a href="categories.php?update=<?php echo  $categoryId?>" class="btn btn-info btn-sm">
                                          <span class="glyphicon glyphicon-pencil"></span> Update 
                                        </a>

                                    </td>
                                </tr>
                                <?php 
                                     }
                                 ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "include/footer.php"  ?>