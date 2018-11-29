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
                           if($result){
                            echo "ok";
                           }
                       }

                       ?>
                       <div class="col-xs-6">
                           <form action="categories.php" method="POST" >
                              <div class="form-group">
                                 <input class="form-control" type="text" name="cateTitletxt" required>
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-primary" type="submit" name="addCatebtn" value="Add Category">
                             </div>
                         </form>
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
                                        <label name="cateId" hidden><?php echo  $categoryId ?></label>
                                        <?php echo  $count?>
                                    </td>
                                    <td>
                                        <?php echo  $categoryName?>
                                    </td>
                                    <td>
                                        
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