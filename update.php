<?php
$con=new mysqli('localhost','root','','test');
$id=$_GET['updatename'];
if(isset($_POST['save'])){
    $aname=$_POST['aname'];
    $sql1="update used set name='$aname' where id='".$id."'";
    $res1=mysqli_query($con,$sql1);
}

$file=$_FILES['image']['name'];
    $tar_dir="uploads/";
    $tar_file=$tar_dir. basename($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$tar_file)){
        $sql2="update used set image_path='$tar_file' where id='".$id."'";
        $res2=mysqli_query($con,$sql2);
    }
?>
<html>
    <body>
        <?php
        $sql="select * from used where id='".$id."'";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res)){

        
        ?>
        <form method="post" enctype="multipart/form-data">
        <input type="text" name="aname" id="" value="<?php echo $row['name']?>">
        <input type="file" name="image" id="">
        <input type="submit" name="save" id="">
        </form>
        <?php
        }
        ?>
    </body>
</html>