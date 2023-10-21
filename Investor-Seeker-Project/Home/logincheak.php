
<?php


     require "../Admin/includes/configure.php";


   if(!$connnection){
        die("not connected".mysqli_error($connnection));
     }else{

    if(isset($_REQUEST['submittt'])){

        $usname=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        

        $query="SELECT * FROM `entrepreneur-reg-table1` WHERE username='$usname' && password='$password'";

       

        $pass=mysqli_query($connnection,$query);
        $row_count=mysqli_num_rows($pass);

        if($row_count){
            session_start();
            echo "Login success";
            $_SESSION['usrName']=$usname;
            $_SESSION['current-time']=time();
             

            
            

            //    --------------------------------------------

            $resultt = $connnection->query($query);
            
            if ($resultt->num_rows > 0) {
                
                while($row = $resultt->fetch_assoc()) {

                    $_ses_Userid=$row['id'];
                    $_ses_photo=$row['profile_photo'];
                    $_ses_name=$row['name'];
                    $_ses_password=$row['password'];
                    
                }
            } else {
                echo "0 results";
            }
            
            // $connnection->close();
            
            $_SESSION['id']=$_ses_Userid;
            $_SESSION['usrName']=$usname;
            $_SESSION['photo_show_entro']=$_ses_photo;
            $_SESSION['ses_Name']=$_ses_name;
            $_SESSION['ses_password']=$_ses_password;
            $_SESSION['current-time']=time();

            //    --------------------------------------------







            if($_REQUEST){
            header("location:../Entrepreneur/entro_showProfile_first_Get_start.php?message=loggedIn");
            // header("location:testing.php");
                         }

        }else{
                // investor
                $query="SELECT * FROM `investor_reg_table1` WHERE username='$usname' && password='$password'";

       

                $pass=mysqli_query($connnection,$query);
                $row_count=mysqli_num_rows($pass);

                   

        
                if($row_count){


                    session_start();
                    echo "Login success";

                    
                    $_SESSION['useRname']=$usname;
                    // $_SESSION['idd']=$id;
                    $_SESSION['current-time']=time();
        
                    $resultt = $connnection->query($query);
            
                    if ($resultt->num_rows > 0) {
                        
                        while($row = $resultt->fetch_assoc()) {
        
                            $_ses_Userid=$row['id'];
                            $_ses_photo=$row['investor_profile'];
                            
                            
                        }
                    } else {
                        echo "0 results";
                    }
                    
                    // $connnection->close();
                    
                    $_SESSION['id']=$_ses_Userid;
                    $_SESSION['usrName']=$usname;
                    $_SESSION['profile_investor']=$_ses_photo;
        
        
                    if($_REQUEST)
                    header("location:../Investor/investor_home.php");
        
                }else{
                    
                    header("location:loginForm.php?error=incorrect password");
                    echo "not loged in2";
                    
                }
                // investor
        }
    }
}

?>


<script scr="js/loginjs.js"></script>