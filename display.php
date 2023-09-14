<?php
     include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
    th,td{
    border:  1px double #000;
    padding: 7px;
}
</style>
</head>
<body>
    <h1>Display data</h1>
    <a href="user.php">Back</a>

    <!-- <table>  first time then if not want to get table to show when no data
        <thead>
            <th>sl No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Operation</th>


        </thead>
        <tbody> -->

 <?php
$disply_data= mysqli_query($conn,"select * from `phpcrud`"); // mysql theke data nilam
$num = 1;

// $number_rows = mysqli_num_rows($disply_data);
// echo $number_rows;

if(mysqli_num_rows($disply_data)>0){
    echo "<table>
    <thead>
        <th>sl No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Operation</th>
    </thead>
    <tbody> ";
    while($row = mysqli_fetch_assoc($disply_data)){
        // echo $row['username'];
?>


<tr>
    
                <td><?php echo $num;?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['address']?></td>
                <td>
                    <a href="delete.php?delete=<?php echo $row['id']?>" onclick = "return confirm('Are you sure you want to delete this data??');">Remove</a>
                    <a href="update.php?edit=<?php echo $row['id']?>">Edit</a>

                </td>
            </tr>
<?php

// <?php echo $row['id'] ----echo $num; 
$num++;

    }
}else{
    echo "<div>No data</div>";
}

?>


        </tbody>
    </table>
    
</body>
</html>