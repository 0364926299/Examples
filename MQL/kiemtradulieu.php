<html>
    <body>
      
    <?php
    include("connection.php");

    //  $sql = "INSERT INTO tblships VALUE(?, ?)";
    //  $stmt = $link->prepare($sql);
    //  $stmt->bind_param("ss",$ID, $Name);
    //  $ID = $_POST["txtID"];
    //  $Name = $_POST["txtName"];
    //  $sql = "SELECT ID FROM tblships WHERE ID = '".$ID."'";
    //  $result = $link->query($sql);
    //  if($result->num_rows > 0)
    //      echo"ID đã tồn tại thưa quý vị";
    //  else
    //      {
    //          $stmt->execute();
    //          echo "Thêm dữ liệu";
    //      }
    //     $stmt->close();
    //     $link->close();

     if(!empty($_POST)){
         $ID =$_POST['txtID'];
         $Name =$_POST['txtName'];

         $stringQuery ="select *from tblships where ID ='$ID'";
         $chekID= $link->query($stringQuery);
         if($chekID->num_rows>0){
             echo "ID :" . $_POST['ID'] ."đã tồn tại";

         }else{
             $stringQuery="insert into tblships values('$ID', '$Name')";
             if($link->query($stringQuery)===true){
                 echo "them du lieu thanh cong";
             }else{
                 echo"co loi xay ra khi them du lieu". $link->errror;
             }
         }
     }
?>

    </body>
</html>