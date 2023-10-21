<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>
<!DOCTYPE html>
<html>
<style>
    *{
        font-size:30px;
        
    }
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
</html>




     <?php 

     require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{
           

          if(isset($_REQUEST['id'])){
            $rcv=$_REQUEST['id'];

            $getinfo="SELECT * FROM `entrepreneur-reg-table1` WHERE id = $rcv";

            $select_info=mysqli_query($connnection,$getinfo);

            while($row=mysqli_fetch_assoc($select_info)){

            
                   
            ?>




            <form action="" method="get">

              <input type="text" placeholder="name" name="name" value="<?php echo $row['name'];?>"></br>
              <input type="text" placeholder="nid" name="nid" value="<?php echo $row['nid'];?>"></br>
              <input type="text" placeholder="email" name="email" value="<?php echo $row['email'];?>"></br>
             
              <input type="text" placeholder="username" name="username" value="<?php echo $row['username'];?>"><br>
              <input type="password" placeholder="password" name="password" value="<?php echo $row['password'];?>"><br>
              <input type="submit" value="Update" name="submit">
              <input type="hidden" value="<?php echo $rcv ?>" name="updating-hidden-id">
  
            </form>
            
            <?php
            


            

       
            
          }

        }

    
    
   }

   

   

?>




<?php



require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{if(isset($_REQUEST['submit'])){

    $nname=$_REQUEST['name'];
    $nnid=$_REQUEST['nid'];
    $nemail=$_REQUEST['email'];
    $nrole=$_REQUEST['role'];
    $nusnm=$_REQUEST['username'];
    
    $npassword=$_REQUEST['password'];

    $rcv=$_REQUEST['updating-hidden-id'];

  $sql= "UPDATE `entrepreneur-reg-table1` SET name='$nname',nid='$nnid',email='$nemail',username='$nusnm',password='$npassword' WHERE id = $rcv";
  $resultt=mysqli_query($connnection,$sql);

 if($resultt){
      header("location:admin-entrepreneur.php?Updated");
                         }else{
                   echo "not Updated";
                               }
    
                             }

             }


?>







