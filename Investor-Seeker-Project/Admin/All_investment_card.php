<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>
<style>
    .business-details label.show-update {
    padding:2px 20px;
    }
</style>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Investor/all_css/business_details_Style.css">
  <!-- <link rel="stylesheet" href="all_css/investor_home_style.css"> -->
  <style>
    .business-details label.show-update {
    padding:2px 20px;
    }

    
.navbar ul li a .icon ion-icon {
    font-size: 1.75em;
    margin-top: 14px;
}

</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>All investoment history</title>

<?php $title="Investments";?>
<?php require "includes/admin-sidebar.php";?>
<?php require "includes/top-bar.php";?>



  

<?php
   

     $cardHtml="";


   require "../Admin/includes/configure.php";
   if(!$connnection)
   {
    
    die("not connected".mysqli_error());
       
   }
   else{
    

      $query = "SELECT * FROM `card_information_all` ";



    $result=mysqli_query($connnection,$query);
    $count=mysqli_num_rows($result);

        if($count>0){

            $count=0;
     
            while($row=mysqli_fetch_assoc($result))
            {
         $count++;
            $id=$row['id'];
            $card_photoo=$row['card-photo'];
            $company_name=$row['company-name'];
            $investment_purpose=$row['investment-purpose'];






$cardHtml .= '<br>
<br>
<br>
<br>
<h1> Buseness Details : '.$count.'</h1>
<br>
<br>
<div class="container-main">
           <div class="fullpage">

                   <div class="investment-page">
                        <div class="ideaimg">


                               <img src="../Entrepreneur/all_pictures/card-cover-photo/' . $row['cover-photo'] . '">
                       </div>

                  <div class="entrepreneur-section">
                     <div class="entrepreneur-photo">
                          <img src="../Home/entroProfile/'. $row['entro-photo'] .'" alt="Entrepreneur Photo">
                     </div>
                          <div class="entrepreneur-bio">
                               <h2>' . $row['name'] . '</h2>
                                <h3>' . $row['education'] . '</h3>
                                 <h3>' . $row['email'] . '</h3>
                                 <h3>' . $row['phone'] . '</h3>

     <p>' . $row['entrepreneur-post'] . '.</p>
</div>
<div class="company-logo">
<img src="../Entrepreneur/all_pictures/company_logo/'.$row['company-logo'].'" alt="Company Logo">
</div>
</div>

                     <div class="business-details">
                     <h2>Business Details</h2>
                             <h4>BusinessType: ' . $row['business-type'] . '</h4>
                             <h4>Company name : ' . $row['company-name'] . '</h4>
                              <h4>Location : ' . $row['location'] . '</h4>


     <p>' . $row['product-description'] . ':</p>
<ul>
<li>' . $row['product-usecase-1'] . '.</li>
<li>' . $row['product-usecase-2'] . '.</li>
<li>' . $row['product-usecase-3'] . '.</li>
<li>' . $row['product-usecase-4'] . '.</li>
</ul>
<p>' . $row['investment-purpose'] . '.</p>
<p>Revenue: ' . $row['revenue'] . ' Tk</p>
<p>Last month sell: ' . $row['last-month-sell'] . ' Tk</p>
<p>Last year sell: ' . $row['last-year-sell'] . ' Tk</p>
<p>Last year sell: ' . $row['total-sell'] . ' Tk</p>
<p>Total sell: ' . $row['total-sell'] . ' Tk</p>
<p>Amount of Investment Required: ' . $row['investment-amount'] . ' Tk</p>
<p>Equrty offer: ' . $row['equity-offer'] . ' Tk</p>
<p>Comapny Goal: ' . $row['goal'] . '</p>
<p>Request date: ' . $row['date-of-post'] . '</p>
    


<label name="not-intt" class="show-update" >' . $row['status-of-post'] . ' by the Authority</label>
<label name="not-intt" class="show-update" >' . $row['status-of-request'] . '</label>





<form action="accept_offer_cheak.php?idtorcv='.$id.'" method="post">

</form>


</div>
</div>
</div>
</div>';
            
       
   }
    }
} 
    
    



echo $cardHtml;             

?>
 <br><br>  <br><br>
<?php
//  require "../Entrepreneur/footer.php";

                 


 ?>