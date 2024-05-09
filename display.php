<html>
    <body>
        <table>
            <tr>
                <th>name</th>
                <th>image</th>
            </tr>
            <?php
            $con=new mysqli('localhost','root','','test');
            $sql="select * from used";
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res)){
            
            ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><img src="<?php echo $row['image_path'];?>" style="width:20px;height:20px;"></td>
                <td><a href="update.php?updatename=<?php echo $row['id']?>">update</a></td>
                <td><a href="delete.php?deletename=<?php echo $row['id']?>">delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>