<php
include = "db_conn.php;
$id = $_GET['id'];
$sql = "DELETE FROM 'Php Crud A' WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: index.php?msg=Record deleted successfully");

}
else {
    echo "Failed:" .. mysqli_error($conn);
}

?>