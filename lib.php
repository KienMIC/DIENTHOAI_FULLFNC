<?php
global $con;
    $con = mysqli_connect('localhost','root','','dienthoai');

function delete($ID){
    global $con;
    $sql = "DELETE FROM sanpham WHERE ID = '$ID'";
    var_dump($sql);
    $query = mysqli_query($con,$sql);
    return $query;
}

function get_info_id($ID){
    global $con;
    $sql = "select * from sanpham where ID = {$ID}";
    $query = mysqli_query($con,$sql);
    $result = array();
    if(mysqli_num_rows($query)>0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    return $result;
}
function edit($ID,$name,$image,$maintain,$price,$status){
    global $con;
	$sql = "UPDATE sanpham SET name = '$name',image = '$image',maintain='$maintain',price = '$price',status='$status' WHERE ID = '$ID'";
    var_dump($sql);
    $query = mysqli_query($con,$sql);
    return $query;

}
?>