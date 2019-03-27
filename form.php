<html>
<head>

  <meta name='viewport' content='width=device-width, initial-scale=0.6, maximum-scale=1.0, user-scalable=0' />
  
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  
 <!-- <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">  -->
  
  <!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js1"></script>-->

<!-- Bootstrap library -->
 <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	 

  
</head>

<body>

	
	<div class="form-group">
	<label>
		1. <?php echo $rows_star_rating[0]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question01" 
		value="<?php echo $rows_star_rating[0]['questions']; ?>">
	</label>
    	
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio sad-img" for="sadchoosen" id="sadchoosen" name="question01_answer1">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question01_answer" value="VeryPoor" id="sadchoosen" />
        <i class="glyphicon glyphicon-ok hidden"  id="sad-choosen"></i>
    </label>
	
	
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio neutral-img" for="notsadchoosen">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question01_answer" value="Average" id="notsadchoosen" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio happy-img" for="notsadchoosen">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question01_answer" value="Excellent" id="notsadchoosen" checked />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
		
	<div id="showVeryPoor" class="myDiv">
				<h3>Subscriber Login Form</h3>
				
			</div>
			
			
		
	</div> 
	
	
	 <style>
.myDiv{
display:none;
}  
#showVeryPoor{
color:red;
border:1px solid red;
padding:10px;
}
#showAverage{
color:green;
border:1px solid green;
padding:10px;
}
#showThree{
color:blue;
border:1px solid blue;
padding:10px;
}
</style>


<script>
$(document).ready(function(e){
$("label[for='sadchoosen']").click(function(){
	e.isTrigger
var demovalue = $(this).val(); 
$("div#showVeryPoor").hide();
//$("#show"+demovalue).show();
$("showVeryPoor").show();
});
});
</script>



	
	
    <div class="form-group">
	<label>
		2. <?php echo $rows_star_rating[1]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question02" 
		value="<?php echo $rows_star_rating[1]['questions']; ?>">
	</label><br>
   
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question02_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question02_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question02_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	
	</div>
	
	<div class="form-group">
	<label>
		3. <?php echo $rows_star_rating[2]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question03" 
		value="<?php echo $rows_star_rating[2]['questions']; ?>">
	</label>
    <br>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question03_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question03_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question03_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	</div>
	
	<div class="form-group">
	<label>
		4. <?php echo $rows_star_rating[3]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question04" 
		value="<?php echo $rows_star_rating[3]['questions']; ?>">
	</label>
    <br>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question04_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question04_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question04_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	</div>
	
	<div class="form-group">
	<label>
		5. <?php echo $rows_star_rating[4]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question05" 
		value="<?php echo $rows_star_rating[4]['questions']; ?>">
	</label>
    <br>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question05_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question05_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question05_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	</div>
	
		
	<div class="form-group">
	<label>
		6. <?php echo $rows_manual_entry[0]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question06" 
		value="<?php echo $rows_manual_entry[0]['questions']; ?>">
	</label>
	<input type="text" class="form-control" id="email" placeholder="Your Answer" name="question06_answer">
	</div>
	
	<input type="button" name="previous" class="previous action-button" value="Previous" 
	onclick="window.location.href='form_page.php'"/>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="visitor_name" placeholder="Enter Full Name" />
    <input type="text" name="visitor_contact_no" placeholder="Enter Contact No" />
    <input type="text" name="visitor_email" placeholder="Enter Email" />
	<input type="text" name="visitor_profession" placeholder="Enter Profession" />
	<input type="text" name="visitor_city" placeholder="Enter City" />
	<select class="form-control" name="visitor_average_income">
	  <option value="">Select Average Monthly Income</option>
	  <option value="25k to 50k">25k to 50k</option>
	  <option value="50k to 1Lac">50k to 1Lac</option>
	  <option value="More Than 1Lac">More Than 1Lac</option>
	</select> <br>
	<select class="form-control" name="visitor_age_group">
	  <option value="">Select Age Group</option>
	  <option value="15 to 25">15 to 25</option>
	  <option value="26 to 30">26 to 30</option>
	  <option value="31 to 35">31 to 35</option>
	  <option value="36 to 40">36 to 40</option>
	  <option value="More Than 40">More Than 40</option>
	</select> <br>
    <textarea name="visitor_feedback" placeholder="Feedback"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>


<style type="text/css">

/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	/*background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));*/
	/*background: linear-gradient(#ec2028,#ec2028);
	    background: linear-gradient(#ac9863,#ac9863);*/
	    background: linear-gradient(#010000,#000000);
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}

@media(max-width:767px){
#msform {
    /*width: 400px;*/
	width: 98%!important;
}

}

#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	/*background: #27AE60;*/
	background: #ec2028;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	/* width: 33.33%; */
	width: 50%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

.hidden{
	display: none!important;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 10px;
    font-weight: 700;
	font-size: 15px;
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}



/* https://www.codexworld.com/replace-radio-button-checkbox-with-image-jquery-css/ */

.image-radio {
    cursor: pointer;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 4px solid transparent;
    margin-bottom: 0;
    outline: 0;
}
.image-radio input[type="radio"] {
    display: none;
}
.image-radio-checked {
    /*border-color: #4783B0;*/
	/*content: url('sad_color.png');*/
	max-width: 32px;
}
.sad-img.image-radio-checked {
	content: url('sad_color.png');
}
.neutral-img.image-radio-checked {
	content: url('neutral_color.png');
	max-width: 35px;
}
.happy-img.image-radio-checked {
	content: url('happy_color.png');
}
.image-radio .glyphicon {
  position: absolute;
  color: #4A79A3;
  background-color: #fff;
  padding: 10px;
  top: 0;
  right: 0;
}
.image-radio-checked .glyphicon {
  display: block !important;
}

img.img-responsive {
    max-width: 25px;
}

.col-sm-3{
	display: inline-block;
}

/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

</style>

<script>

/* https://www.codexworld.com/replace-radio-button-checkbox-with-image-jquery-css/ -- following script */

$(document).ready(function(){
    // add/remove checked class
    $(".image-radio").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio").on("click", function(e){
        $(".image-radio").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});

/* function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
} */






</script>

</body>
</html>

