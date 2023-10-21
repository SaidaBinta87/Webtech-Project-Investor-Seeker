<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->


<?php 
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}


require "include/profile_sidebar.php";?>
<div class="settingside-allform">
                    <div class="headingprofile">
                        
                    </div>

<?php

      require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{
           

          if(isset($_SESSION['id']))
          {
            $rcv=$_SESSION['id'];

            $getinfo="SELECT * FROM `entrepreneur-reg-table1` WHERE id = $rcv";

            $select_info=mysqli_query($connnection,$getinfo);

            while($row=mysqli_fetch_assoc($select_info)){

            
                   
            ?>








                     
                     <form action="test.php" class="details" method="post">
                           <h2>Profile Setting - Edit</h2>
                           <lebel>First Name</lebel>
                           <input type="text" name="fname" value="<?php echo $row['first-name'];?>">
                           <lebel>Last Name</lebel>
                           <input type="text" name="lname" value="<?php echo $row['last-name'];?>">
                           
                           <lebel>Mobile</lebel>
                           <input type="number" name="mobile" value="<?php echo $row['phone'];?>"><br>
                           <lebel>Email</lebel>
                           <input type="email" name="email" value="<?php echo $row['email'];?>"><br>
                           <lebel>Nid</lebel>
                           <input type="text" name="nid" value="<?php echo $row['nid'];?>"><br>
                           <lebel>Username</lebel>
                           <input type="text" name="username" value="<?php echo $row['username'];?>"><br>
                           <lebel>Role</lebel>
                           <input type="text" name="role" value="<?php echo $row['role'];?>"><br>
                           
                           <input type="submit" value="Confirm Update" name="submit"><br>
                        
                     </form>
                    
          </div>
          
        </div>  <!-- conatainer end -->
     
           

                


    </div>  <!-- main end-->
<?php
  
  }

}



}  

?>









    </body>
</html>