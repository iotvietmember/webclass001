<?php 
 echo "-------------------PHP & MySQL----------------<br><br>";

// Kết nối CSDL
$_host = "localhost";
$_user = "root";
$_pass = "aA@123456";
$_db = "lopweb";
$_table = "tblInfo";

$conn = mysqli_connect($_host, $_user, $_pass, $_db);
mysqli_set_charset($conn, 'UTF8');

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Câu SQL lấy danh sách----------------------------------------------------------
$sql = "SELECT * FROM $_table";
 
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($conn, $sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) 
{
    // echo table on page
    echo "<table border=1 cellspacing=0 cellpading=0>";
    echo "<tr><th>Họ và tên</th><th>Năm sinh</th><th>Quê quán</th><th>Thường trú</th><th>Nghề nghiệp</th><th>Ghi chú</th></tr>";

    // Sử dụng vòng lặp while để lặp kết quả
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr><td>".$row["hoten"]."</td> <td>".$row["namsinh"]."</td> <td>".$row["quequan"]."</td> <td>".$row["thuongtru"]."</td> <td>".$row["nghenghiep"]."</td> <td>".$row["ghichu"]."</td></tr>";
    }

    //
    echo "</table>";
} 
else {
    echo "Không có record nào";
}

// Câu SQL thêm bản ghi----------------------------------------------------------
// $sql = "INSERT INTO $_table(hoten, namsinh, quequan, thuongtru, nghenghiep, ghichu) VALUES ('Nguyen Van A',1987,'Hung Yen','TPHCM','Sinh vien','Khong co ghi chu')";
// // Thực thi câu truy vấn và gán vào $result
// $result = mysqli_query($conn, $sql);

// // Câu SQL sửa bản ghi----------------------------------------------------------
// $sql = "UPDATE $_table SET hoten='A  Nguyen Van' WHERE hoten='Nguyen Van A'";
// // Thực thi câu truy vấn và gán vào $result
// $result = mysqli_query($conn, $sql);

// Câu SQL xóa bản ghi----------------------------------------------------------
// $sql = "DELETE * FROM $_table WHERE hoten='Nguyen Van A'";
// // Thực thi câu truy vấn và gán vào $result
// $result = mysqli_query($conn, $sql);



// ngắt kết nối ----------------------------------------------------------------
mysqli_close($conn);



?>



<!-- INSERT INTO `tblinfo`(`hoten`, `namsinh`, `quequan`, `thuongtru`, `nghenghiep`, `ghichu`) VALUES ("Nguyen Van A",1987,"Hung Yen","TPHCM","Sinh vien","Khong co ghi chu") -->

<!-- UPDATE `tblinfo` SET `hoten`="Nguyễn Văn Quân",`namsinh`=1999,`quequan`="Nam Định",`thuongtru`="TPHCM",`nghenghiep`="Sinh viên",`ghichu`="tq" WHERE namsinh=1999 -->

