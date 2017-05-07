<?php 
$page_title="HSN SAC Code Search || LegalRaasta GST";
$meta_description = "Find your HSN or SAC Code with LegalRaasta GST Portal. India's No.1 GST Filing Portal";
include_once("inc/header.php");
 ?>

<div class="col-md-12 searchheading" id="cp-heading">
	<h1 class="text-center" style="padding-top: 50px; color: #fff;">Search HSN / SAC</h1>

	<div class="col-md-6 col-xs-6 text-right" style="margin-top: 10px;">
		<label style="color: #fff; font-size: 16px;"><input id="rdb1" type="radio" name="toggler" value="1" checked="checked"  />    HSN</label>
	</div>
	<div class="col-md-6 col-xs-6 text-left" style="margin-top: 10px;">
		<label style="color: #fff; font-size: 16px;"><input id="rdb2" type="radio" name="toggler" value="2" />     SAC</label>
	</div>




    <div class="text-center row" style="padding-bottom: 60px !important;">
		<h2 class="hsnhead" id="searchhead" >HSN</h2>				
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 ui search searchhsn text-center ">
	
      <div class="ui left icon input searchboxhsn">
        <input type="text" id="search_hsn" class="prompt" onkeyup="hsnsearch()" placeholder="Search HSN..."><!-- 
        <input type="text" id="search_sac" onkeyup="sacsearch()" placeholder="Search SAC..."> -->
        <i class="search icon"></i>
      </div>
    </div>
    <div class="col-md-3"></div>
    </div>
  </div>
  </div>

<div class="container">
	<div class="row">
	  	<div class="col-md-8 resultsdiv">
		    <div id="blk-1" class="toHide">
		    	<input type='hidden' id='current_page' />
				<input type='hidden' id='show_per_page' />
	
		    	<div class="content">
		    		<div id="hsndiv" class="resultsdiv sacdiv hsnsac_div_height"></div>
		    	</div>
		    	 
		    </div>
		</div>
	</div>  
</div> 

