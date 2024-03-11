<?php

error_reporting(0);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamic_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");


//backend upload url
$backUpload = '/palbar_admin/public/uploads/';


$langValueFromLocalStorage = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : '';



//all heading
$all_heading_sql = "SELECT reason_for_popularity_en, reason_for_popularity_bn, compassionate_care_en, 
					compassionate_care_bn, who_we_are_en, who_we_are_bn, team_en, team_bn, what_we_do_en, what_we_do_bn, our_projects_en,
					our_projects_bn, our_gallery_en, our_gallery_bn, contact_us_en, contact_us_bn
					FROM all_headings 
					WHERE id = 1";
$all_heading_sql_result = $conn->query($all_heading_sql);
$all_heading_sql_result_col = $all_heading_sql_result->fetch_assoc();


//all sub heading
$all_sub_heading_sql = "SELECT reason_for_popularity_en, reason_for_popularity_bn, compassionate_care_en, 
					compassionate_care_bn, who_we_are_en, who_we_are_bn, team_en, team_bn, what_we_do_en, what_we_do_bn, our_projects_en,
					our_projects_bn, our_gallery_en, our_gallery_bn, contact_us_en, contact_us_bn
					FROM all_sub_headings 
					WHERE id = 1";
$all_sub_heading_sql_result = $conn->query($all_sub_heading_sql);
$all_sub_heading_sql_result_col = $all_sub_heading_sql_result->fetch_assoc();

?>



