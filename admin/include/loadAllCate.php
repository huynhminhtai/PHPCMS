<?php 
                                $query = "select * from categories";
                                $allCategories = mysqli_query($connection, $query);
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($allCategories)) {
                                    $count ++;
                                    $categoryName = $row['name'];
                                    $categoryId = $row['categoryId'];
                                    
                               
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