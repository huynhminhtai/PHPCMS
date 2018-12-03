<?php 

function addNewCate(){
  global $connection;
	if(isset($_POST['addCatebtn'])){
                           $categoryTitle = $_POST['cateTitletxt'];
                           $query = "insert into categories(name) value ('{$categoryTitle}')";
                           $result = mysqli_query($connection, $query);
                           
                       }
}


function deleteCate(){
  global $connection;
	if (isset($_GET['dele'])) {
                                    $deleId = $_GET['dele'];
                                    $delequery = "delete from categories where categoryId = $deleId";  
                                    $deleteEx = mysqli_query($connection, $delequery);
                                    // if($deleteEx){
                                    //     echo "<script type='text/javascript'>alert('ok!')</script>";
                                    // }
                                    header("Location: categories.php");
                                }
}

function getUpdateCate(){
  global $connection;
	if (isset($_GET['update'])) {
                            $update_id = $_GET['update'];
                            $get_update_cate_query = "select * from categories where categoryId = $update_id";
                            $update_Rows = mysqli_query($connection, $get_update_cate_query);
                            $update_Row =  $update_Rows -> fetch_assoc();
                            $display_updateDiv = "block";

                            }
}                          


function updateCate(){
  global $connection;
	if(isset($_POST['update_cate_btn'])){
		$update_id = $_POST['update_cate_id'];
		$update_name = $_POST['update_catename_txt'];
		$upate_query = "update categories set name = '$update_name'";
		$upate_query .= "where categoryId = '$update_id'";
		$updateEx = mysqli_query($connection, $upate_query);

	}
}

 ?>