

<?php
	include('header.php');
	include('config.php');
	
	$project_sql = "SELECT * FROM our_projects_infos p ORDER BY p.id ASC";
	$project_sql_result = $conn->query($project_sql);
?>
  
                
  
                    
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_projects_en"] : $all_heading_sql_result_col["our_projects_bn"];?></h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> <?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_projects_en"] : $all_heading_sql_result_col["our_projects_bn"];?></li>
                </ul>
            </div>
        </div>
    </div>            
 <!--  ************************* About Us Starts Here ************************** -->    
   
	<?php if ($project_sql_result->num_rows > 0) { ?>
    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_projects_en"] : $all_heading_sql_result_col["our_projects_bn"];?></h2>
                <p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["our_projects_en"] : $all_sub_heading_sql_result_col["our_projects_bn"];?></p> 
            </div>
            
			
 
			<div class="panel-group" id="accordion">
			
			<?php 	foreach ($project_sql_result as $project_sql_result_row) {?>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $project_sql_result_row["id"]; ?>" style='color: #fff;'>
					  <?php echo ($langValueFromLocalStorage == 'en') ? $project_sql_result_row["title_en"] : $project_sql_result_row["title_bn"];?> <span class="fa fa-ellipsis-h" style='float: right'></span>
					</a>
				  </h4>
				</div>
				<div id="collapse-<?php echo $project_sql_result_row["id"]; ?>" class="panel-collapse collapse in" aria-expanded="true">
				  <div class="panel-body text-justify">
				 <?php echo ($langValueFromLocalStorage == 'en') ? $project_sql_result_row["project_detail_en"] : $project_sql_result_row["project_detail_bn"];?>
						
						<div class="row" style="margin-top: 20px;">
							<?php 
								$project_img_sql = "SELECT * FROm our_projects_infos_file f
									WHERE f.project_id = ".$project_sql_result_row['id']."
									ORDER BY f.id ASC";
									
								$project_img_sql_result = $conn->query($project_img_sql);
								foreach ($project_img_sql_result as $project_img_sql_result_row) {
							?>
							<div class="col-lg-3">
								<img src="<?php echo $backUpload.$project_img_sql_result_row["img"];?>" alt='<?php echo ($langValueFromLocalStorage == 'en') ? $project_sql_result_row["project_detail_en"] : $project_sql_result_row["project_detail_bn"];?>' class="img-responsive">
							</div> 	
								<?php } ?>
						</div>
				   </div>
				</div>
			  </div>
			  <br>
			  	<?php } ?>
			</div>
			
    </section>
	
	<?php } ?>


         
<?php
	include('footer.php');
?>