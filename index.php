

<?php
	include('header.php');
	include('config.php');

	//slider start
	$slide_sql = "SELECT * FROM slides s ORDER BY s.id ASC";
	$slide_result = $conn->query($slide_sql);

	//Organizational Insight
	$organizational_insight_sql = "SELECT 
            left_title_en, left_title_bn, 
            right_title_en, right_title_bn, 
            left_text_en, left_text_bn, 
            right_text_en, right_text_bn 
        FROM organizational_insights 
        WHERE id = 1";
		
	$organizational_insight_result = $conn->query($organizational_insight_sql);
	
	//mission & vission
	
	$mission_vission_sql = "SELECT * FROM mission_vissions";

	$mission_vission_result = $conn->query($mission_vission_sql);
	
	
	//popularity reasons
	$popularity_reasons_sql = "SELECT * FROM popularity_reasons ORDER BY id ASC";
	$popularity_reasons_result = $conn->query($popularity_reasons_sql);
	
	
	$organization_sql = "SELECT * FROM organization_details_infos ORDER BY id ASC";
	$organization_result = $conn->query($organization_sql);
?>
  
                 
  <!-- ******************** Slider Starts Here ******************* -->
	<?php if ($slide_result->num_rows > 0) { ?>
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
		
			<?php foreach ($slide_result as $slide_row) { ?>
			<div class="item">

				<div class="slider-img"><img src="<?php echo $backUpload.$slide_row["img"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $slide_row["slide_title_en"] : $slide_row["slide_title_bn"];?>"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
							<div class="animated bounceInDown slider-captions">
								<h1 class="slider-title">
									<?php echo ($langValueFromLocalStorage == 'en') ? $slide_row["slide_title_en"] : $slide_row["slide_title_bn"];?>
								</h1>
								<p class="slider-text hidden-xs"><?php echo ($langValueFromLocalStorage == 'en') ? $slide_row["slide_description_en"] : $slide_row["slide_description_bn"];?></p>
								
							</div>
						</div>
					</div>
				</div>
            </div>
			<?php } ?>
           

        </div>
    </div>  
	<?php }
		else { echo "no datas are available"; }
	?>	
                  
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
    
     <!-- ################# Events Start Here#######################--->
	 
	<?php if ($popularity_reasons_result->num_rows > 0) { ?>
    <section class="events">
        <div class="container">
            <div class="session-title row">
				<h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["reason_for_popularity_en"] : $all_heading_sql_result_col["reason_for_popularity_bn"];?></h2>
			    <p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["reason_for_popularity_en"] : $all_sub_heading_sql_result_col["reason_for_popularity_bn"];?></p>
            </div>
            <div class="event-ro row">
			
			<?php 	foreach ($popularity_reasons_result as $popularity_reasons_single_row) {?>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="<?php echo $backUpload.$popularity_reasons_single_row["img"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $popularity_reasons_single_row["popularity_title_en"] : $popularity_reasons_single_row["popularity_title_bn"];?>">
						 <h4><?php echo ($langValueFromLocalStorage == 'en') ? $popularity_reasons_single_row["popularity_title_en"] : $popularity_reasons_single_row["popularity_title_bn"];?></h4>
                        <p class="desic text-justify"><?php echo ($langValueFromLocalStorage == 'en') ? $popularity_reasons_single_row["popularity_text_en"] : $popularity_reasons_single_row["popularity_text_bn"];?></p>
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
.slider-captions p{
	color: #fff;
	background: rgba(0,0,0,0.4);
	padding: 10px;
}
.slider-text {
    margin-bottom: 20px;
    color: #fff;
    background: none !important;
    letter-spacing: 2px;
    padding: 5px;
}
.owl-dots{
	left: 35%;
    position: relative;
}
</style>