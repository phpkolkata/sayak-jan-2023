
<!--
    while uploading the file 
1. method must be post
2. enctype required in form tag -->

<?php

if(isset($_REQUEST['msg'])){
    extract($_REQUEST);
    print "<div style='color:red'>$msg</div>";
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">

Name:<input type="text" name="nm"><br>
Image:<input type="file" name="im"><br>
<button>Submit</button>

</form>