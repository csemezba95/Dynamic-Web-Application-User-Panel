

<?php
	include('header.php');
	include('config.php');
	
	//Organizational Insight
	$organizational_insight_sql = "SELECT * FROM organizational_insights WHERE id = 1";
	$organizational_insight_result = $conn->query($organizational_insight_sql);
	
	//mission & vission
	
	$mission_vission_sql = "SELECT * FROM mission_vissions ORDER BY id ASC";
	$mission_vission_result = $conn->query($mission_vission_sql);
	
	//team start
	$team_sql = "SELECT * FROM teams ORDER BY id ASC";	
	$team_sql_result = $conn->query($team_sql);
	
	
	//organization start
	$organization_sql = "SELECT * FROM organization_details_infos ORDER BY id ASC";
	$organization_result = $conn->query($organization_sql);
?>
  
                 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["who_we_are_en"] : $all_heading_sql_result_col["who_we_are_bn"];?></h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> <?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["who_we_are_en"] : $all_heading_sql_result_col["who_we_are_bn"];?></li>
                </ul>
            </div>
        </div>
    </div>            
 <!--  ************************* About Us Starts Here ************************** -->    
 

<?php if ($organizational_insight_result) { 
    $organizational_insight_col = $organizational_insight_result->fetch_assoc();

?>
<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $organizational_insight_col["left_title_en"] : $organizational_insight_col["left_title_bn"];?></h2>
                <p><?php echo ($langValueFromLocalStorage == 'en') ? $organizational_insight_col["left_text_en"] : $organizational_insight_col["left_text_bn"];?></p>
               
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-12">
					 <h2><?php echo ($langValueFromLocalStorage == 'en') ? $organizational_insight_col["right_title_en"] : $organizational_insight_col["right_title_bn"];?></h2>
					 <br>
                        <div class="about-qcard text-left">
							<?php $rightText = ($langValueFromLocalStorage == 'en') ? $organizational_insight_col["right_text_en"] : $organizational_insight_col["right_text_bn"]; ?>

							<ul>
								<?php

								$items = explode("\n", $rightText);

								// Output each item in a list item
								foreach ($items as $item) {
									echo '<li>' . $item . '</li>';
								}
								?>
							</ul>
							<br/>
							<p><a href='who-we-are.php' class="btn btn-sm btn-success">More Details</a></p>

                        </div>
						
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>     
   
	<?php }
		else { echo "no datas are available"; }
	?>	
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <?php if ($mission_vission_result) { 
    $mission_vission_result_col = $mission_vission_result->fetch_assoc();

?>
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                <h1><?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["mission_title_en"] : $mission_vission_result_col["mission_title_bn"];?></h1>
                <p class='text-justify'><?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["mission_text_en"] : $mission_vission_result_col["mission_text_bn"];?></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img class='img-thumbnail' src="<?php echo $backUpload.$mission_vission_result_col["url1"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["mission_title_en"] : $mission_vission_result_col["mission_title_bn"];?>">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img class='img-thumbnail' src="<?php echo $backUpload.$mission_vission_result_col["url2"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["vission_title_en"] : $mission_vission_result_col["vission_title_bn"];?>">
              </div>
              <div class="col-md-6 mv-det">
				    <h1><?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["vission_title_en"] : $mission_vission_result_col["vission_title_bn"];?></h1>
                   <p class='text-justify'><?php echo ($langValueFromLocalStorage == 'en') ? $mission_vission_result_col["vission_text_en"] : $mission_vission_result_col["vission_text_bn"];?></p>
              </div>
          </div>
      </div>
  </section>   
   
	<?php }
		else { echo "no datas are available"; }
	?>	
    
   
 <!-- ################# Organogram Here #######################--->
  
  <section class="container-fluid" style='background: #fff;display:none;'>
      <div class="container" style='padding-top:50px;padding-bottom: 80px'>
	   <div class="session-title row">
          <h2 style='text-align:center;'>Our Organogram </h2>
		  <p>At the helm, our Board Members provide strategic oversight, guiding the organization's direction. The Director leads the executive team, comprising the Program Manager, Administrative Officer, and Account Officer, each playing a pivotal role in ensuring the seamless execution of our mission and organizational goals.</p>
		  <br><br>
		 </div> 
		  <img src="assets/images/organogram.jpg" alt="Our Organogram">
      </div>
  </section>   
       
<!--################### Our Team Starts Here #######################--->

	<?php if ($team_sql_result->num_rows > 0) { ?>
          <section class="our-team team-11">
            <div class="container">
                <div class="session-title row">
                      <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["team_en"] : $all_heading_sql_result_col["team_bn"];?></h2>
                      <p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["team_en"] : $all_sub_heading_sql_result_col["team_bn"];?></p>
                </div>
                <div class="row team-row">
				
					<?php 	foreach ($team_sql_result as $team_sql_result_row) {?>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?php echo $backUpload.$team_sql_result_row["img"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $team_sql_result_row["team_member_name_en"] : $team_sql_result_row["team_member_name_bn"];?>">
                            <div class="det-o" style='background: #831db6'>
                                <h4><?php echo ($langValueFromLocalStorage == 'en') ? $team_sql_result_row["team_member_name_en"] : $team_sql_result_row["team_member_name_bn"];?></h4>
                                <i><?php echo ($langValueFromLocalStorage == 'en') ? $team_sql_result_row["team_member_designation_en"] : $team_sql_result_row["team_member_designation_bn"];?> </i>
                                <p style='color: #fff;'><?php echo ($langValueFromLocalStorage == 'en') ? $team_sql_result_row["team_member_details_en"] : $team_sql_result_row["team_member_details_bn"];?> </p>
                            </div>
                        </div>
                    </div>
					<?php } ?>
	
                </div>
            </div>
        </section>      
    <?php }
		else { echo "no datas are available"; }
	?>	
    <!-- ################# Charity Number Starts Here#######################--->

	<?php if ($organization_result->num_rows > 0) { ?>
    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["compassionate_care_en"] : $all_heading_sql_result_col["compassionate_care_bn"];?></h2>
                   <p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["compassionate_care_en"] : $all_sub_heading_sql_result_col["compassionate_care_bn"];?></p>
               </div>
                <div class="row">
				
					<?php 	foreach ($organization_result as $organization_result_single_row) {?>
                    <div class="col-sm-3 numb">
						<h3><?php echo ($langValueFromLocalStorage == 'en') ? $organization_result_single_row["title_en"] : $organization_result_single_row["title_bn"];?></h3>
                        <span><?php echo ($langValueFromLocalStorage == 'en') ? $organization_result_single_row["text_en"] : $organization_result_single_row["text_bn"];?></span>
                    </div>
					<?php } ?>
                    
                </div>
            </div>

        </div>

    </div> 
	<?php }
		else { echo "no datas are available"; }
	?>	

   
         
<?php
	include('footer.php');
?>

<style>
.det-o p{
	color: #fff;
}
<style>