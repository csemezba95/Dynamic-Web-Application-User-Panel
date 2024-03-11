<?php
	include('header.php');
	include('config.php');
	
		
	$gallery_sql = "SELECT * FROM galleries g ORDER BY g.id ASC";
	$gallery_sql_result = $conn->query($gallery_sql);
?>
 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_gallery_en"] : $all_heading_sql_result_col["our_gallery_bn"];?></h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> <?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_gallery_en"] : $all_heading_sql_result_col["our_gallery_bn"];?></li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
		<!--  ************************* Gallery Starts Here ************************** -->
		<?php if ($gallery_sql_result->num_rows > 0) { ?>
        <div id="portfolio" class="gallery">    
           <div class="container">
              
				<div class='text-center' style='padding-top: 20px; padding-bottom: 50px;'>
					<h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["our_gallery_en"] : $all_heading_sql_result_col["our_gallery_bn"];?></h2>
					<p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["our_gallery_en"] : $all_sub_heading_sql_result_col["our_gallery_bn"];?></p> 
				</div>
		  
              <div class="row">
                
				<div class="gallery-filter d-none d-sm-block">
					<button class="btn btn-default filter-button" data-filter="all">All Projects</button>
					
					<?php foreach ($gallery_sql_result as $gallery_sql_result_row) {?>
						<button class="btn btn-default filter-button" data-filter="project-<?php echo $gallery_sql_result_row["id"];?>"><?php echo ($langValueFromLocalStorage == 'en') ? $gallery_sql_result_row["title_en"] : $gallery_sql_result_row["title_bn"];?></button>
					<?php } ?>
				</div>
				<br/>
				
				<?php foreach ($gallery_sql_result as $gallery_sql_result_row2) {
						$gallery_img_sql = "SELECT * FROM galleries_file WHERE galleries_id = ".$gallery_sql_result_row2["id"]." ORDER BY id ASC";
						$gallery_img_sql_result = $conn->query($gallery_img_sql);
						
					?>
					
					<h4 class="gallery_product filter project-<?php echo $gallery_sql_result_row2["id"];?>" style="display: block; width: 100%;line-height: 0;"><?php echo ($langValueFromLocalStorage == 'en') ? $gallery_sql_result_row2["title_en"] : $gallery_sql_result_row2["title_bn"];?></h4>
					<p class="gallery_product filter project-<?php echo $gallery_sql_result_row2["id"];?>" style="line-height: 0;"><?php echo ($langValueFromLocalStorage == 'en') ? $gallery_sql_result_row2["gallery_detail_en"] : $gallery_sql_result_row2["gallery_detail_bn"];?></p>
					<br>
					<div class="row">
					<?php foreach ($gallery_img_sql_result as $gallery_img_sql_result_row) { ?>
						
						<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter project-<?php echo $gallery_sql_result_row2["id"];?>">
							<img src="<?php echo $backUpload.$gallery_img_sql_result_row["img"];?>" alt='<?php echo ($langValueFromLocalStorage == 'en') ? $gallery_sql_result_row2["title_en"] : $gallery_sql_result_row2["title_bn"];?>' class="img-responsive">
						</div>
				
					<?php } ?>	
					</div>					
				
				<?php } ?>				

          
			</div>
		</div>
       
       
       </div>
	   	<?php } ?>
        <!-- ######## Gallery End ####### -->    
  
                 
  <?php
	include('footer.php');
?>