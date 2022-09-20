
<?php
// will post variables defined to corresponding data fields in Users table on postgres server
// $userName = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// database connection
$conn = pg_connect("host=database-1.cu913zjtpwxf.us-east-1.rds.amazonaws.com port=5432 dbname=movieshop
    user=postgres password=MovieShopCS370!");
// if($conn){
// 	echo "connect_error";
// 	die("Connection Failed : ");
// }
?>