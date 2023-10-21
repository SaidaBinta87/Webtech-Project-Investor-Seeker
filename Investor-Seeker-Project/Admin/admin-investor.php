<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>




<?php $title="Investor";?>

<?php if(isset($_REQUEST['investor_add'])){
    header('location:investor_add.php?hoise');
     }

    require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{

       

         $sr="";
       if(isset($_REQUEST['searchitem'])){
             $sr=$_REQUEST['searchitem'];

       }

       if(isset($_REQUEST['show-button'])){
        $sr="";

         }
       

        // $query="SELECT * FROM admin-table1 WHERE name LIKE '%$sr%'";
        $query="SELECT * FROM `investor_reg_table1` WHERE name LIKE '%$sr%'";

        $result=mysqli_query($connnection,$query);



        $count=mysqli_num_rows($result);

        if($count>0){
        ?>


       
      



      <?php 
      if(isset($_REQUEST['delete_m_data'])){
            
           $check_data=$_REQUEST['check-data'];
           $all_mark= implode(",",$check_data); ?>

          

          <?php $query="DELETE FROM `investor_reg_table1` WHERE id in ($all_mark)";

           $run_dq=mysqli_query($connnection,$query);

        if($run_dq){ header('location:admin-investor.php?refreshed');
        }


         
      }
      

require "includes/admin-sidebar.php";
require "includes/top-bar.php";?>

<br>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="cssadmin-show-style.css">
</head>
<body>
</body>
</html>


<div class="container2">

      <div class="item1">


          <form action="#" method="get">


              <input type="submit" value="Show ALL" name="show-button" class="btn btn-info">
              <input type="submit" value="Add Investor" name="investor_add" class="btn btn-info">


          </form>

      


   </div>  <!--  end item1-->
   



        
<div class="add-admin">

     <a href="investor_add.php"></a></div>

</div>


<br><br>


         <form action="#" method="get">
            
         <div class="detail">
                <div class="recor">
           <table class="table">
                 <thead class="a">
                    <tr>
                        <!-- <th>Serial No</th> -->
                        <!-- <th>ID</th> -->
                        <th>Profiles</th>
                        <th>Name</th>
                        <th>Nid</th>
                        <th>Email</th>
                        <!-- <th>Role</th> -->
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
        //     echo "<pre>";
        //    print_r($row);
        //    echo "</pre>";
             $id=$row['id'];
             $profile_pic=$row['investor_profile'];
             $name=$row['name'];
             $nid=$row['nid'];
             $email=$row['email'];
             $role=$row['role'];
             $usnm=$row['username'];
             $password=$row['password'];
             $serial++;

          // echo "{$row['id']}";
        //    echo "$id"." "."$name"." "."$email"." "."$password"." ";
        //    echo "<br>";
           
           ?>


                   <tr>
                        <!-- <td><?php //echo "$serial"; ?></td> -->
                        <!-- <td><?php //echo "$id"; ?></td> -->
                        <td><img width="50px"; src="../Investor/investor_profile/<?php echo $profile_pic;?>"></td>
                        <td><?php echo "$name"; ?></td>
                        <td><?php echo "$nid"; ?></td>
                        <td><?php echo "$email"; ?></td>

                        
                        
                        <td><?php echo "$usnm"; ?></td>
                        <td><?php echo "$password"; ?></td>

                        <td><a onclick="return confirm('are you sure')" 
                        href="investor_delete.php?id=<?php echo $id ?>&photo=<?php echo $profile_pic;?>"><ion-icon name="trash-outline"></ion-icon></a></td><td>
                        
                        
                        <a href="investor_update.php?id=<?php echo $id?>"><ion-icon name="pencil-outline"></ion-icon></a></td>

                        
                        
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

        die;
    }

    


    
   }

   

   

?>
