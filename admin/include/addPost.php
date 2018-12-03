<?php
if(isset($_POST['addPost'])){
		$post_title = $_POST['post_title_txt'];
		$category = $_POST['category'];
		$author = $_POST['author_txt'];
		$file_url = $_FILES	['image']['name'];
		$content = $_POST['content_txt'];
		$create_date = date('Y-m-d');

		$addPost_query = "insert into posts(title, categoryId, author,createDate, image, content) ";
		$addPost_query .= "value ('$post_title', '$category', '$author', '$create_date','$file_url', '$content')";
		$addPost_queryEx = mysqli_query($connection, $addPost_query);
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
		<input type="text" name="post_title_txt" class="form-control">
	</div>

	<div class="form-group">
		<label>Category</label>
		<!-- <input type="text" name="category" class="form-control"> -->
		<select name="category" >
			<?php 
			$query = "select * from categories";
			$allCategories = mysqli_query($connection, $query);
			$count = 0;
			while ($row = mysqli_fetch_assoc($allCategories)) {
				$count ++;
				$categoryName = $row['name'];
				$categoryId = $row['categoryId'];
				echo "<option value='$categoryId'>$categoryName</option>";
                                }
			 ?>
			 
			 	
		</select>

	</div>
	
	<div class="form-group">
		<label>Author</label>
		<input type="text" name="author_txt" class="form-control">
	</div>

	<div class="form-group">
		<label>Image</label>
		<input type="file" name="image" class="form-control">
	</div>

	<div class="form-group">
		<label>Content</label>
		<textarea name="content_txt" class="form-control" cols="30" rows="10">
			
		</textarea>
	</div>

	<div class="form-group">
		<input type="submit" name="addPost" value="Add" class="btn btn-primary">
	</div>


</form>
</div>
<!-- /#wrapper -->