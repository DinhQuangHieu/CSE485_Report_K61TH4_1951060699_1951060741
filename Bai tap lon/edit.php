<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from db_linkedln.ThongTinNguoiDung where MaNguoiDung='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $TenNguoiDung = $_POST['TenNguoiDung'];
    $NgaySinh = $_POST['NgaySinh']; 
    $QuocTich = $_POST['QuocTich']; 
    $Anh = $_POST['Anh']; 

   	
    $edit = mysqli_query($db,"update db_linkedln.ThongTinNguoiDung set TenNguoiDung='$TenNguoiDung', NgaySinh='$NgaySinh', QuocTich='$QuocTich' where MaNguoiDung='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="TenNguoiDung" value="<?php echo $data['TenNguoiDung'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="NgaySinh" value="<?php echo $data['NgaySinh'] ?>" placeholder="Enter NgaySinh" Required>
  <input type="text" name="QuocTich" value="<?php echo $data['QuocTich'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="Anh" value="<?php echo $data['Anh'] ?>" placeholder="Enter Full Name" Required>

  <input type="submit" name="update" value="Update">
</form>