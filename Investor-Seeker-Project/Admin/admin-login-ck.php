

<?php

     session_start();
     
     require "includes/configure.php";

    // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

   if(!$connnection){
        die("not connected".mysqli_error($connnection));
     }else{

    if(isset($_REQUEST['submit'])){

        $usname=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        

        $query="SELECT * FROM `admin-table1` WHERE username='$usname' && password='$password'";

       

        $pass=mysqli_query($connnection,$query);
        $row_count=mysqli_num_rows($pass);

        if($row_count){
            echo "Login success";

            $resultt = $connnection->query($query);
            
            if ($resultt->num_rows > 0) {
                
                while($row = $resultt->fetch_assoc()) {
                    echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["photo"] . "<br>";

                    $_ses_Username=$row['id'];
                    $_ses_photo=$row['photo'];
                    $_ses_name=$row['name'];
                    $_ses_password=$row['password'];
                    
                }
            } else {
                echo "0 results";
            }
            
            $connnection->close();
            
            $_SESSION['usrName']=$usname;
            $_SESSION['photo_show_admin']=$_ses_photo;
            $_SESSION['ses_Name']=$_ses_name;
            $_SESSION['ses_password']=$_ses_password;
            $_SESSION['current-time']=time();

            // ----------------------------------------------------
           
            


            //------------------------------------------------------ 




            if($_REQUEST){


                
             header("location: admin.php");
                }

        }else{
                
                
                  header("location:admin-login.php?error=* * * * * * * * * Incorrect password! * * * * * * * *");
                    echo "not loged in";
                
                
        }
    }
}

?>