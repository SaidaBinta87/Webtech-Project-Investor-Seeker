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
       

        // 
        $query="SELECT * FROM `card_information_all` WHERE username LIKE '$sr%'";

        $result=mysqli_query($connnection,$query);



        $count=mysqli_num_rows($result);

        if($count>0){
        
           ?>


       
      



      <?php 
      if(isset($_REQUEST['delete_m_data'])){
            
           $check_data=$_REQUEST['check-data'];
           $all_mark= implode(",",$check_data); ?>

          

          <?php $query="DELETE FROM `card_information_all` WHERE id in ($all_mark)";

           $run_dq=mysqli_query($connnection,$query);

        if($run_dq){header('location:admin-show.php?refreshed');}


         
      }
      
      ?>



<?php $title="Request Card";?>
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
                        <th>Username</th>
                        <th>Company Logo</th>
                        <th>Business Type</th>
                        <th>Phone</th>
                        
                        <th>Date</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Show details</th>
                        
                        <th><a onclick="return confirm('are you sure')"<center><input type="submit" class="delete-m" name="delete_m_data" value="Delete-M"></center></th>

                     </tr>
                 </thead>
<?php
        //  $query="SELECT * FROM `card_information_all`";
       $serial=0;
        while($row=mysqli_fetch_assoc($result)){
        
        if($row['status-of-post']=="pending"){

               $username=$row['username'];

              //  $query="SELECT * FROM `card_information_all` WHERE username LIKE '$username'";

             
             $id=$row['id'];
             $profile_pic=$row['card-photo'];
             $Business_type=$row['business-type'];
             $Comapany_name=$row['company-name'];
             $date=$row['date-of-post'];
             $statu=$row['status-of-post'];
             
             $serial++;

          // echo "{$row['id']}";
        //    echo "$id"." "."$name"." "."$email"." "."$password"." ";
        //    echo "<br>";
          
           ?>


                   <tr>
                        <td><?php echo "$serial"; ?></td>
                        <td><?php echo "$username"; ?></td>
                        <td><img width="50px"; src="../Entrepreneur/all_pictures/card-photo/<?php echo $profile_pic;?>"></td>
                        <td><?php echo "$Business_type"; ?></td>
                        <td><?php echo "$Comapany_name"; ?></td>
                        <td><?php echo "$date"; ?></td>
                        <td style="background-color:red;"><?php echo "$statu";?></td>

                       

                        
                        
                        
                        
                       
                        <td><a onclick="return confirm('are you sure')" 
                        href="admin-delete.php?id=<?php echo $id ?>&photo=<?php echo $profile_pic;?>"><ion-icon name="trash-outline"></ion-icon></a></td><td>
                        
                        
                        <a href="admin-2-request.php?idd=<?php echo $id?>"><ion-icon name="pencil-outline"></ion-icon></a></td>

                        
                        
                        <td><center><input type="checkbox" name="check-data[]" value="<?php echo $id ?>"></center></td>


                        
                     </tr>


        </div>
        </div>



<?php
        } 

        
    }
    if($serial==0)
        {
          echo " No Request available at this moment";
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




