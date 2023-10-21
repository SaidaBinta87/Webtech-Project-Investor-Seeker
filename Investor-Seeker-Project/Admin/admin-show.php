<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>


<?php 
   
   if(isset($_REQUEST['add-admin'])){
    header('location:admin-add.php?passed');

     }
   

   

    require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{

       
//$query="SELECT * FROM table1";
         $sr="";
       if(isset($_REQUEST['searchitem'])){
             $sr=$_REQUEST['searchitem'];

       }

       if(isset($_REQUEST['show-button'])){
        $sr="";

         }
       

        // $query="SELECT * FROM admin-table1 WHERE name LIKE '%$sr%'";
        $query="SELECT * FROM `admin-table1` WHERE name LIKE '$sr%'";

        $result=mysqli_query($connnection,$query);



        $count=mysqli_num_rows($result);

        if($count>0){
        
           ?>


       
      



      <?php 
      if(isset($_REQUEST['delete_m_data'])){
            
           $check_data=$_REQUEST['check-data'];
           $all_mark= implode(",",$check_data); ?>

          

          <?php $query="DELETE FROM `admin-table1` WHERE id in ($all_mark)";

           $run_dq=mysqli_query($connnection,$query);

        if($run_dq){header('location:admin-show.php?refreshed');}


         
      }
      
      ?>



<?php $title="All Admin";?>
<?php require "includes/admin-sidebar.php";?>
<?php require "includes/top-bar.php";?>
<br>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="cssadmin-show-style.css">


</head>
<body>
</body>
</html>




<div class="container2">

<div class="item1">
<form action="" method="get">


<input type="submit" value="Show ALL" name="show-button" class="btn btn-info">
<input type="submit" value="Add Admin" name="add-admin" class="btn btn-info">


</form>

</div>
<div class="add-admin">
     <a href="admin-add.php"></a></div>

     </div>
     <br><br>

         <form action="" method="get">
            
         <div class="detail">
                <div class="recor">
           <table class="table">
                 <thead class="a">
                    <tr>
                        <th>Serial No</th>
                        <th>ID</th>
                        <th>Profiles</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th><a onclick="return confirm('are you sure')"<center><input type="submit" class="delete-m" name="delete_m_data" value="Delete-M"></center></th>

                     </tr>
                 </thead>
<?php

       $serial=0;
        while($row=mysqli_fetch_assoc($result)){
        
             $id=$row['id'];
             $profile_pic=$row['photo'];
             $name=$row['name'];
             $role=$row['role'];
             $usnm=$row['username'];
             $password=$row['password'];
             $serial++;

          
           
           ?>


                   <tr>
                        <td><?php echo "$serial"; ?></td>
                        <td><?php echo "$id"; ?></td>
                        <td><img width="50px"; src="admin-photo/<?php echo $profile_pic;?>"></td>
                        <td><?php echo "$name"; ?></td>

                        <?php if($role=="admin"){ ?>
                        <td class="status admin"><?php echo "$role";?></td> 
       
                          <?php
                        }else{ ?>

                        <td class="status mod"><?php echo "$role";?></td>

                        <?php  
                        }
                        
                        
                        
                        ?>
                        <td><?php echo "$usnm"; ?></td>
                        <td><?php echo "$password"; ?></td>
                        <td><a onclick="return confirm('are you sure')" 
                        href="admin-delete.php?id=<?php echo $id ?>&photo=<?php echo $profile_pic;?>"><ion-icon name="trash-outline"></ion-icon></a></td><td>
                        
                        
                        <a href="admin-update.php?id=<?php echo $id?>"><ion-icon name="pencil-outline"></ion-icon></a></td>

                        
                        
                        <td><center><input type="checkbox" name="check-data[]" value="<?php echo $id ?>"></center></td>


                        
                     </tr>


        </div>
        </div>



<?php
        }  
        
    ?>

    </table>


      </form>
      <!-- table form  end -->
<?php
    
    }else{

        echo "you dont have any data on yout db";
    }

    


    
   }

   

   

?>




