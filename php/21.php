<?php
$arr = array("name"=>"raj", "age"=>12);

// $name = $arr['name'];
// $age = $arr['age'];

extract($arr);

print "hello $name, your age is $age";


?>


<form action="22.php?msg=hello" method="post">
    Name:<input type="text" name="nm"><br>
    Age:<input type="number" name="age"><br>
    <button>Submit</button>
</form>

<!-- mannually injecting data using Query String -->
<a href="22.php?nm=raj&age=33">Click here</a>

<!-- Page 1 -->
Name:
Age:
Gender:
class:
sec:
Marks:
    eng:
    math:
    sci:
    ...

<!-- Action Page  -->
result