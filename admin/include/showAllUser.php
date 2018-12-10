 <div class="col-lg-12">
                        <h1 class="page-header">
                            Post 
                            <small>All Posts</small>
                        </h1>
                            <table class="table table-bordered table-hover">
                        	<thead>
                        		<tr>
                        			<td>No</td>
                        			<td>Username</td>
                        			<td>FullName</td>
                        			<td>Email</td>
                        			<td>Role</td>
                        			<td>Action</td>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<!-- show all post -->
                                

                        		<?php 
                                
                        		$query = "select * from users";
				                $allUser = mysqli_query($connection, $query);
				                $count = 0;
				                while ($user = mysqli_fetch_assoc($allUser)) {

				                	$count++;
                                    $username = $user['username'];
				                    $fullname = $user['fullname'];
                                    $email = $user['email'];
				                    $role = $user['role'];

                        		?>
                        		<tr>
                        			<td><?php echo  $count ?></td>
                        			<td><?php echo  $username; ?></td>
                        			<td><?php echo  $fullname ?></td>
                        			<td><?php echo  $email ?></td>
                        			<td><?php echo  $role ?></td>
                        			<td>
                        				<a href="posts.php?dele=<?php echo  $post_id ?>" class="btn btn-danger btn-sm">
                                          <span class="glyphicon glyphicon-remove"></span> A/Deactive
                                        </a>
                                    <p></p>
                                        <a href="posts.php?source=update&edit_id=<?php echo $post_id ?>" class="btn btn-info btn-sm">
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