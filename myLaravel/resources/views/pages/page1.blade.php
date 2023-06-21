<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>


<h1>Page 1 - age is  {{ $age }} </h1>

@if ($age <= 3)
     toddler
@elseif ($age <= 12)
     kid
@elseif ($age <= 19)
     teenager
@else
     mature enough
@endif

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
