<?php 
// Koneksi Ke Database
$conn=mysqli_connect("localhost" , "root", "", "smkplussukaraja");

function query($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) )  {
        $rows [] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nama = $data["nama"];
    $nohp = $data["nohp"];
    $email = $data["email"];
    $subjek = $data["subjek"];
    $tatanya= $data["tatanya"]; 
     
   $query = "INSERT INTO hubungi 
   VALUES
   ('', '$nama','$nohp', '$email', '$subjek', '$tatanya')";
 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);


}








?>