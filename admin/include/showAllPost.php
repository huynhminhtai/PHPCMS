 <div class="col-lg-12">
                        <h1 class="page-header">
                            Post 
                            <small>All Posts</small>
                        </h1>
<table class="table table-bordered table-hover">
                        	<thead>
                        		<tr>
                        			<td>No</td>
                        			<td>Category</td>
                        			<td>Title</td>
                        			<td>Author</td>
                        			<td>Create date</td>
                        			<td>content</td>
                        			<td>Status</td>
                        			<td>Action</td>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<!-- show all post -->
                        		<?php 
                        		$query = "select * from posts";
				                $allPost = mysqli_query($connection, $query);
				                $count = 0;
				                while ($post = mysqli_fetch_assoc($allPost)) {
				                	$count++;
				                    $title = $post['title'];
				                    $author = $post['author'];
				                    $createDate = $post['createDate'];
				                    $image = $post['image'];
				                    $content = $post['content'];
				                    $status = $post['status'];

                        		?>
                        		<tr>
                        			<td><?php echo  $count ?></td>
                        			<td>Category</td>
                        			<td><?php echo  $title ?></td>
                        			<td><?php echo  $author ?></td>
                        			<td><?php echo  $createDate ?></td>
                        			<td class=" col-xs-4"><?php echo  $content ?></td>
                        			<td><?php echo  $status ?></td>
                        			<td>
                        				<a href="posts.php?dele=<?php echo  $categoryId?>" class="btn btn-danger btn-sm">
                                          <span class="glyphicon glyphicon-remove"></span> Delete 
                                        </a>
                                    <p></p>
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
<!-- /#wrapper -->