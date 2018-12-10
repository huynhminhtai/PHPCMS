<div class="col-md-4">

    <!-- Blog Search Well -->

    <form action="search.php" method="POST">
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
                <input name="searchtxt" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" name="searchbtn" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            <!-- /.input-group -->
        </div>

    </form>
    <form action="include/login.php" method="POST">
    <div class="well">
            <h4>Login</h4>
            <div class="form-group">
                <input name="username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-default" name="login_btn" type="submit"> Login</button>
            </div>
            <!-- /.input-group -->
        </div>
</form>
    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php 
                    $query = "select * from categories";
                    $allCategories = mysqli_query($connection, $query);
                    while ( $row = mysqli_fetch_assoc($allCategories)) {
                        $category_id = $row['categoryId'];
                        $category = $row['name'];

                        ?>


                        <li><a href="category.php?category_id=<?php echo $category_id ?>"><?php echo $category ?></a>


                            <?php 
                        }
                        ?>
                    </ul>
                </div>

            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>

</div>