<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>
<body>

<?php
require "db-connection.php";
$sql = "select * from category";
$res = mysqli_query($con, $sql);

if (isset($_REQUEST['msg'])) {
    print "<div class='alert alert-success'>$_REQUEST[msg]</div>";
}

print "<div class='card mx-auto w-50 p-3 mt-3' >

<div>
<h1 class='float-start'>Category</h1>
    <a class='btn btn-primary float-end' href='add-category.php'>Add More...</a>
</div>
</div>";

print "<table border='1' width='300' class='m-4 table table-striped w-50 mx-auto' >
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ISACTIVE</th>
    <th>OPTION</th>
</tr>
";
while ($row = mysqli_fetch_assoc($res)) {
    print "<tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td>
        <a href='edit-category.php?id=$row[id]'><i class='fa-solid fa-pen-to-square text-success me-1'></i></a>
         <a href='del-cat.php?id=$row[id]'> <i class='fa-sharp fa-solid fa-trash text-danger'></i> </a></td>
    </tr>";
}
print "</table>";

?>

</body>
</html>