<?php
$con=new mysqli('localhost','root','','test');
    $name=$_POST['name'];
    $file=$_FILES['file']['name'];
    $tar_dir="uploads/";
    $tar_file=$tar_dir. basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$tar_file)){
        $sql="insert into used (name,image_path) values ('$name','$tar_file')";
        $res=mysqli_query($con,$sql);
        if($res){
            // echo "success";
            header("location:display.php");
        }

    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
       NAME: <input type="text" name="name" id="">
        IMAGE:<input type="file" name="file" id="">
        <input type="submit" name="" id="">
        <a href="display.php">display</a>
        </form>
    </body>
</html>