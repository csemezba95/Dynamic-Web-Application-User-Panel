

<?php
	include('header.php');
	include('config.php');
	
	$what_we_dow_sql = "SELECT * FROM what_we_dos ORDER BY id ASC";
	$what_we_dow_result = $conn->query($what_we_dow_sql);
?>
  
                
  
                    
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["what_we_do_en"] : $all_heading_sql_result_col["what_we_do_bn"];?></h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> <?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["what_we_do_en"] : $all_heading_sql_result_col["what_we_do_bn"];?></li>
                </ul>
            </div>
        </div>
    </div>            
 <!--  ************************* About Us Starts Here ************************** -->    
   

    
     <!-- ################# Events Start Here#######################--->
	 
	<?php if ($what_we_dow_result->num_rows > 0) { ?>
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2><?php echo ($langValueFromLocalStorage == 'en') ? $all_heading_sql_result_col["what_we_do_en"] : $all_heading_sql_result_col["what_we_do_bn"];?></h2>
                <p><?php echo ($langValueFromLocalStorage == 'en') ? $all_sub_heading_sql_result_col["what_we_do_en"] : $all_sub_heading_sql_result_col["what_we_do_bn"];?></p>               
            </div>
            <div class="event-ro row">
				<?php 	foreach ($what_we_dow_result as $what_we_dow_result_row) {?>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="<?php echo $backUpload.$what_we_dow_result_row["img"];?>" alt="<?php echo ($langValueFromLocalStorage == 'en') ? $what_we_dow_result_row["title_en"] : $what_we_dow_result_row["title_bn"];?>">
                        <h4><?php echo ($langValueFromLocalStorage == 'en') ? $what_we_dow_result_row["title_en"] : $what_we_dow_result_row["title_bn"];?></h4>
                        <p class="desic text-justify"><?php echo ($langValueFromLocalStorage == 'en') ? $what_we_dow_result_row["text_en"] : $what_we_dow_result_row["text_bn"];?></p>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>   
    
	<?php } ?>
   
   
 
         
<?php
	include('footer.php');
?>