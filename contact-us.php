
<?php
	include('header.php');
	include('config.php');
?>
  
 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>
	
	<div class='text-center' style='padding-top: 20px; padding-bottom: 50px;'>
		<h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["contact_us_en"] : $all_heading_sql_result_col["contact_us_bn"];?></h2>
		<p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["contact_us_en"] : $all_sub_heading_sql_result_col["contact_us_bn"];?></p> 
	</div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">
		<iframe  style="width:100%" src= "https://maps.google.com/maps?q=22.4913,92.3381&hl=es;z=14&amp;output=embed" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 >Contact Form</h2> <br>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label></div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label></div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-success btn-sm">Send Message</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">

                        <h2 style="margin-top:10px;">Address</h2>

						<p><i class='fa fa-home'></i> Dhaka, Bangladesh</p>
						<br>
						<p><i class='fa fa-phone'></i> 01920519595</p>
						<br>
						<p><i class='fa fa-envelope'></i> csemezba@gmail.com</p>







                    </div>


                </div>

            </div>
        </div>

    </div>
       
      
      
       
  <?php
	include('footer.php');
?>