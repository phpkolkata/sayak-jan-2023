<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>

<h1>Page 2 - age is <?php echo $age ?></h1>

<?php

if ($age <= 3) {
    echo "toddler";
} else if ($age <= 12) {
    echo "kid";
} else if ($age <= 19) {
    echo "teenager";
} else {
    echo "mature enough";
}
?>

</body>
</html>
