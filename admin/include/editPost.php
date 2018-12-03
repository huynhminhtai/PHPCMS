<?php



if (isset($_GET['edit_id'])) {
	$update_id = $_GET['edit_id'];
	$get_post_query = "select * from posts where postId = '{$update_id}'";
	$update_post = mysqli_query($connection, $get_post_query);
	$post = $update_post -> fetch_assoc();

	$title = $post['title'];
	$update_cate_id = $post['categoryId'];
	$author = $post['author'];
	$createDate = $post['createDate'];
	$image = $post['image'];
	$content = $post['content'];
	$status = $post['status'];
}

 if(isset($_POST['update_post'])){
 	$update_id = $_POST['update_id'];
 	$post_title = $_POST['post_title_txt'];
 	$category = $_POST['category'];
 	$author = $_POST['author_txt'];
 	$file_url = $_FILES ['image']['name'];
 	$content = $_POST['content_txt'];
 	$create_date = date('Y-m-d');


 	$update_query = "update posts set title ='{$post_title}',";
 	$update_query .=" categoryId='$category',";
 	$update_query .=" createDate='$create_date',";
 	$update_query .=" image='$file_url',";
 	$update_query .=" content='$content'";
 	$update_query .="where postId = '$update_id'";


 	$addPost_queryEx = mysqli_query($connection, $update_query);
 	

 	header("Location: posts.php");

}


 
 ?>


 <div class="col-lg-12">
                        <h1 class="page-header">
                            Post 
                            <small>Add Post</small>
                        </h1>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>Title</label>
		<input type="text" name="update_id" value="<?php echo $update_id ?>" hidden>
		<input type="text" name="post_title_txt" class="form-control" value="<?php echo  $title?>">
	</div>

	<div class="form-group">
		<label>Category</label>
		<select name="category" >
			<?php 
			$query = "select * from categories";
			$allCategories = mysqli_query($connection, $query);
			$count = 0;
			while ($row = mysqli_fetch_assoc($allCategories)) {
				$count ++;
				$categoryName = $row['name'];
				$categoryId = $row['categoryId'];
				if ($categoryId ==$update_cate_id) {
					echo "<option value='$categoryId' selected>$categoryName</option>";
				}
				else{
					echo "<option value='$categoryId'>$categoryName</option>";
				}
				
                }
			 ?>
			 
			 	
		</select>
	</div>
	
	<div class="form-group">
		<label>Author</label>
		<input type="text" name="author_txt" class="form-control" value="<?php echo  $author?>">
	</div>

	<div class="form-group">
		<label>Image</label>
		<input type="file" name="image" class="form-control" ">
	</div>

	<div class="form-group">
		<label>Content</label>
		<textarea name="content_txt" class="form-control" cols="30" rows="10" >
			<?php echo  $content?>
		</textarea>
	</div>

	<div class="form-group">
		<input type="submit" name="update_post" value="Update" class="btn btn-primary">
	</div>


</form>
</div>
<!-- /#wrapper -->