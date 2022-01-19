<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Thông Tin Người Dùng</h2>

<table border="2">
  <tr>
    <td>MaNguoiDung</td>
    <td>TenNguoiDung</td>
    <td>NgaySinh</td>
    <td>QuocTich</td>
    <td>Anh</td>
    <td>Edit</td>
    <td>delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from db_linkedln.thongtinnguoidung"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['MaNguoiDung']; ?></td>
    <td><?php echo $data['TenNguoiDung']; ?></td>
    <td><?php echo $data['NgaySinh']; ?></td>    
    <td><?php echo $data['QuocTich']; ?></td>    
    <td><?php echo $data['Anh']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['MaNguoiDung']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['MaNguoiDung']; ?>">delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>