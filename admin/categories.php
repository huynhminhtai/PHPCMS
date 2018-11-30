<?php include "include/header.php"  ?>
<?php include "include/getUpdateCate.php" ?>
<?php include "include/categoryFunction.php" ?>
<!-- delete -->
<?php deleteCate(); ?>
<!-- add new -->
<?php addNewCate(); ?>
<!-- update -->
<?php updateCate(); ?>

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
                        
                        

                       <!-- get update catefory -->
                        <?php getUpdateCate(); ?>

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
                            <input type="text" name="update_cate_id" value="<?php echo $update_id ?>" disable hidden>
                                 <input class="form-control" type="text" 
                                 name="update_catename_txt" value="<?php  echo  $update_Row['name'] ?>" 
                                 required >
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-primary" type="submit" name="update_cate_btn" value="Update">
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
                                 <!-- load all update cate -->
                                <?php include "include/loadAllCate.php" ?>

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