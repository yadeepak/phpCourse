<?php 
    include 'connect.php';
    $date = date('Y-m-d');
 // $query = "INSERT INTO users (`username` , `password` , `created_at`) VALUES ('abc' , '123' ,'$date')";
 // $query = "UPDATE users SET `username`='xyz' , `password`='12' WHERE id IN (2,3,4)";
 $query = "SELECT  SUM(id) as sumId from users"; 
//$query = "DELETE from users where id=2";
 $response = mysqli_query($isConnect, $query);
$data = mysqli_fetch_all($response );


?>
<table  border="1">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
<th>create at</th>
</tr>

<?php
print_r($data);
foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
     
    echo "</tr>";
}
?> 

</table> 


<?php
    if($response){
       // echo "added successfully";
    } else {
        echo mysqli_error($isConnect);
    }
?>