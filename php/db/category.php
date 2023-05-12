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
// pagination count
$sql = "select * from category";
$res = mysqli_query($con, $sql);
$total = mysqli_num_rows($res);
$limit = 4;
$pages = ceil($total / $limit);
$start = 0;

// search
$where = "";
if (isset($_REQUEST['srch'])) {
    $where = "WHERE `name` like '%$_REQUEST[srch]%'";
}

//pagination
if (isset($_REQUEST['p'])) {
    $start = ($_REQUEST['p'] - 1) * $limit;
}

$sql = "select * from category $where LIMIT $start,$limit";
print $sql;
$res = mysqli_query($con, $sql);

if (isset($_REQUEST['msg'])) {
    print "<div id='msg' class='alert alert-success'>$_REQUEST[msg]</div>";
}

print "<div class='card mx-auto w-50 p-3 mt-3' >

<div>
<h1 class='float-start'>Category</h1>
    <a class='btn btn-primary float-end' href='add-category.php'>Add More...</a>
</div>
</div>";

print "<div class='card mx-auto w-50 p-0 mt-3 border-0' >


<div>
    <span class='float-start'><a href='category.php'>view all</a></span>


    <form action='' method='get'>
    <span class='float-end '>
        <button class='btn btn-sm btn-warning'><i class='fa-sharp fa-solid fa-magnifying-glass text-dark'></i> Search</button>
    </span>
    <input type='search' name='srch' class=' float-end'>
    </form>
</div>
</div>";

print "<table border='1' width='300' class='m-4 mt-0 table table-striped w-50 mx-auto' >
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

print "<div class='w-50 mx-auto border-0'>
 <nav aria-label='Page navigation example w-50 mx-auto'>
  <ul class='pagination'>";
for ($i = 1; $i <= $pages; $i++) {
    print "
    <li class='page-item'><a class='page-link' href='?p=$i'>$i</a></li>
    ";
}
print "
</ul>
</nav>
</div>";

?>



</body>
</html>


<!--
     hw:
     1. form search state management,
     2. proper messaging for no search result found
     3. msg box auto disappear
     4. msg box x click to close manually
-->


