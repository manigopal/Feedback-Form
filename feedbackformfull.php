
<?php

$db = mysqli_connect('localhost', 'root', '', 'feedback');

if(isset($_POST['submit']))
{
 // variables for input data
 $question01 = mysqli_real_escape_string($db, $_POST['question01']);
 $question01_answer = mysqli_real_escape_string($db, $_POST['question01_answer']);
 $question02 = mysqli_real_escape_string($db, $_POST['question02']);
 $question02_answer = mysqli_real_escape_string($db, $_POST['question02_answer']);
 $question03 = mysqli_real_escape_string($db, $_POST['question03']);
 $question03_answer = mysqli_real_escape_string($db, $_POST['question03_answer']);
 $question04 = mysqli_real_escape_string($db, $_POST['question04']);
 $question04_answer = mysqli_real_escape_string($db, $_POST['question04_answer']);
 $question05 = mysqli_real_escape_string($db, $_POST['question05']);
 $question05_answer = mysqli_real_escape_string($db, $_POST['question05_answer']);
 
 $question01_additional_feedback = mysqli_real_escape_string($db, $_POST['question01_additional_feedback']);
 $question02_additional_feedback = mysqli_real_escape_string($db, $_POST['question02_additional_feedback']);
 $question03_additional_feedback = mysqli_real_escape_string($db, $_POST['question03_additional_feedback']);
 $question04_additional_feedback = mysqli_real_escape_string($db, $_POST['question04_additional_feedback']);
 $question05_additional_feedback = mysqli_real_escape_string($db, $_POST['question05_additional_feedback']);
 
 $visitor_name = mysqli_real_escape_string($db, $_POST['visitor_name']);
 $visitor_contact_no = mysqli_real_escape_string($db, $_POST['visitor_contact_no']);
 $visitor_email = mysqli_real_escape_string($db, $_POST['visitor_email']);
 $visitor_profession = mysqli_real_escape_string($db, $_POST['visitor_profession']);
 $visitor_city = mysqli_real_escape_string($db, $_POST['visitor_city']);
 $visitor_average_income = mysqli_real_escape_string($db, $_POST['visitor_average_income']);
 $visitor_age_group = mysqli_real_escape_string($db, $_POST['visitor_age_group']);
 $visitor_feedback = mysqli_real_escape_string($db, $_POST['visitor_feedback']);
 $date_taken = date("Y/m/d");

 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO visitors_feedback (emp_name,emp_roll,question01,question01_answer,question01_additional_feedback,question02,question02_answer,question02_additional_feedback,
					  question03,question03_answer,question03_additional_feedback,question04,question04_answer,question04_additional_feedback,
					  question05,question05_answer,question05_additional_feedback,visitor_name,visitor_contact_no,visitor_email,
					  visitor_profession,visitor_city,visitor_average_income,visitor_age_group,visitor_feedback,date_taken)
				     VALUES('Online User','Online Employee','$question01','$question01_answer','$question01_additional_feedback','$question02','$question02_answer','$question02_additional_feedback',
					 '$question03','$question03_answer','$question03_additional_feedback','$question04','$question04_answer','$question04_additional_feedback',
					 '$question05','$question05_answer','$question05_additional_feedback','$visitor_name','$visitor_contact_no','$visitor_email',
					 '$visitor_profession','$visitor_city','$visitor_average_income','$visitor_age_group','$visitor_feedback','$date_taken')";
 
		$result = mysqli_query($db, $sql_query) or die(mysqli_error($db));
        
        // sql query for inserting data into database
		
		if($result){
		$smsg = "Successfully inserted data, Insert New data.";
		header('Refresh: 3; url=index.php');
		
		}else{
		$fmsg = "Data not inserted, please try again later.";
	}
 
}
?>

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
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	 
	<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
  
</head>

<body>
<!-- multistep form -->
<form id="msform" method="post" action="palladium_web_form.php">
	
	<h1> <img src="logo-old-used.png" alt="Smiley face" height="auto" width="50%"> </h1>
	<p>&nbsp;</p>	

  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Ratings</li>

    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Share your Ratings</h2>
    <h3 class="fs-subtitle"></h3>
	
	<?php
	
	$select_star_rating_query = "SELECT questions FROM `questions` where input_mode='Star Rating' AND status='Enable'";

	$result_star_rating = mysqli_query($db, $select_star_rating_query);	
	
	$rows_star_rating = array();
	//$arrayKeys = array_keys($rows);
	while($r = mysqli_fetch_assoc($result_star_rating))
	{

	$rows_star_rating[] = $r;
	}
	
	?>
	
	<div class="form-group">
	<label>
		1. <?php echo $rows_star_rating[0]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question01" 
		value="<?php echo $rows_star_rating[0]['questions']; ?>">
	</label>
    
		
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question01_sad_modal" rel="modal:open">
    <label class="image-radio1 sad-img" for="sadchoosen1">
        <img class="img-responsive" src="sad_grey.png" id="sadchoosen1" />
        <input type="radio" name="question01_answer" value="Very Poor"/>
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	
	 </a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio1 neutral-img" for="notsadchoosen">
        <img class="neutral img-responsive" src="neutral_grey.png"  onclick="ShowHideDiv()" id="sadchoosen2" />
        <input type="radio" name="question01_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio1 happy-img" for="notsadchoosen" >
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question01_answer" value="Excellent" onclick="ShowHideDiv()"  id="sadchoosen3"  />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
		
	<div id="question01_additional_feedback_answer"> </div>

	
	</div> 
	
	
	<div id="question01_sad_modal" class="modal">
		<img class="img-responsive" src="sad_color.png">
	  <p> <br> Would You like to share reason.</p>
	  <p> <br>
	  <a href="#question01_sad_modal_step2" class="btn btn-success btn-sm" rel="modal:open">Yes, Proceed</a> &nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">No, Close</a>
	  </p>
	</div>
	
	<div id="question01_sad_modal_step2" class="modal">
	<p> <img class="img-responsive" src="sad_color.png"> </p> <p>&nbsp;</p>
	  <p> Share your Feedback </p>
	  <p>&nbsp;</p>
	<textarea rows="8" cols="50" name="question01_additional_feedback" id="question01_additional_feedback" placeholder="Write Your Feedback Here">
	</textarea> <br>
	<a href="#question01_sad_modal_step2_thanks" class="btn btn-success btn-sm" id="question01_additional_feedback_close" rel="modal:open">Submit</a>&nbsp;
	<a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>
	
	<div id="question01_sad_modal_step2_thanks" class="modal">
		<p> Thanks for your Feedback. </p>
		
	</div>
	
	
	<script type="text/javascript">
    $(document).ready(function(){
		$('#question01_additional_feedback_close').click(function(){
			var databack = $("#question01_sad_modal_step2 #question01_additional_feedback").val().trim();
			$('#question01_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
	
	
	
    <div class="form-group">
	<label>
		2. <?php echo $rows_star_rating[1]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question02" 
		value="<?php echo $rows_star_rating[1]['questions']; ?>">
	</label>
   
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question02_sad_modal" rel="modal:open">
    <label class="image-radio2 sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question02_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio2 neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question02_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio2 happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question02_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	
	<div id="question02_additional_feedback_answer"> </div>

	
	</div> 
	
	
	<div id="question02_sad_modal" class="modal">
		<img class="img-responsive" src="sad_color.png">
	  <p> <br> Would You like to share reason.</p>
	  <p> <br>
	  <a href="#question02_sad_modal_step2" class="btn btn-success btn-sm" rel="modal:open">Yes, Proceed</a> &nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">No, Close</a>
	  </p>
	</div>
	
	<div id="question02_sad_modal_step2" class="modal">
	<img class="img-responsive" src="sad_color.png"> <p>&nbsp;</p>
	  <p> Share your Feedback</p>
	  <p>&nbsp;</p>
	<textarea rows="8" cols="50" name="question02_additional_feedback" id="question02_additional_feedback" placeholder="Write Your Feedback Here">
	</textarea> <br>
	<a href="#" class="btn btn-success btn-sm" id="question02_additional_feedback_close" rel="modal:close">Submit</a>&nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>

	
	<script type="text/javascript">
    $(document).ready(function(){
		$('#question02_additional_feedback_close').click(function(){
			var databack = $("#question02_sad_modal_step2 #question02_additional_feedback").val().trim();
			$('#question02_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
	
	
	
	<div class="form-group">
	<label>
		3. <?php echo $rows_star_rating[2]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question03" 
		value="<?php echo $rows_star_rating[2]['questions']; ?>">
	</label>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question03_sad_modal" rel="modal:open">
    <label class="image-radio3 sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question03_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio3 neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question03_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio3 happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question03_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	<div id="question03_additional_feedback_answer"> </div>

	</div> 

	
	<div id="question03_sad_modal" class="modal">
		<img class="img-responsive" src="sad_color.png">
	  <p> <br> Would You like to share reason.</p>
	  <p> <br>
	  <a href="#question03_sad_modal_step2" class="btn btn-success btn-sm" rel="modal:open">Yes, Proceed</a> &nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">No, Close</a>
	  </p>
	</div>
	
	<div id="question03_sad_modal_step2" class="modal">
	<img class="img-responsive" src="sad_color.png"> <p>&nbsp;</p>
	  <p> Share your Feedback</p>
	  <p>&nbsp;</p>
	<textarea rows="8" cols="50" name="question03_additional_feedback" id="question03_additional_feedback" placeholder="Write Your Feedback Here">
	</textarea> <br>
	<a href="#" class="btn btn-success btn-sm" id="question03_additional_feedback_close" rel="modal:close">Submit</a>&nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>

	
	<script type="text/javascript">
    $(document).ready(function(){
		$('#question03_additional_feedback_close').click(function(){
			var databack = $("#question03_sad_modal_step2 #question03_additional_feedback").val().trim();
			$('#question03_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
	  
	<div class="form-group">
	<label>
		4. <?php echo $rows_star_rating[3]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question04" 
		value="<?php echo $rows_star_rating[3]['questions']; ?>">
	</label>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question04_sad_modal" rel="modal:open">
    <label class="image-radio4 sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question04_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio4 neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question04_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio4 happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question04_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	<div id="question04_additional_feedback_answer"> </div>
	
	</div> 
	
	
	<div id="question04_sad_modal" class="modal">
		<img class="img-responsive" src="sad_color.png">
	  <p> <br> Would You like to share reason.</p>
	  <p> <br>
	  <a href="#question04_sad_modal_step2" class="btn btn-success btn-sm" rel="modal:open">Yes, Proceed</a> &nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">No, Close</a>
	  </p>
	</div>
	
	<div id="question04_sad_modal_step2" class="modal">
	<img class="img-responsive" src="sad_color.png"> <p>&nbsp;</p>
	  <p> Share your Feedback</p>
	  <p>&nbsp;</p>
	<textarea rows="8" cols="50" name="question04_additional_feedback" id="question04_additional_feedback" placeholder="Write Your Feedback Here">
	</textarea> <br>
	<a href="#" class="btn btn-success btn-sm" id="question04_additional_feedback_close" rel="modal:close">Submit</a>&nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>

	
	<script type="text/javascript">
    $(document).ready(function(){
		$('#question04_additional_feedback_close').click(function(){
			var databack = $("#question04_sad_modal_step2 #question04_additional_feedback").val().trim();
			$('#question04_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
	
	
	<div class="form-group">
	<label>
		5. <?php echo $rows_star_rating[4]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question05" 
		value="<?php echo $rows_star_rating[4]['questions']; ?>">
	</label>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question05_sad_modal" rel="modal:open"> 
    <label class="image-radio5 sad-img">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question05_answer" value="Very Poor" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio5 neutral-img">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question05_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio5 happy-img">
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question05_answer" value="Excellent" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	
	
	<div id="question05_additional_feedback_answer"> </div>

	
	</div> 
	
	
	<div id="question05_sad_modal" class="modal">
		<img class="img-responsive" src="sad_color.png">
	  <p> <br> Would You like to share reason.</p>
	  <p> <br>
	  <a href="#question05_sad_modal_step2" class="btn btn-success btn-sm" rel="modal:open">Yes, Proceed</a> &nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">No, Close</a>
	  </p>
	</div>
	
	<div id="question05_sad_modal_step2" class="modal">
	<img class="img-responsive" src="sad_color.png">
	  <p> Share your Feedback</p> <p>&nbsp;</p>
	  <p>&nbsp;</p>
	<textarea rows="8" cols="50" name="question05_additional_feedback" id="question05_additional_feedback" placeholder="Write Your Feedback Here">
	</textarea> <br>
	<a href="#" class="btn btn-success btn-sm" id="question05_additional_feedback_close" rel="modal:close">Submit</a>&nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>
	
	<script type="text/javascript">
    $(document).ready(function(){
		$('#question05_additional_feedback_close').click(function(){
			var databack = $("#question05_sad_modal_step2 #question05_additional_feedback").val().trim();
			$('#question05_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
	
	
	
	<?php
	$select_manual_entry_query = "SELECT questions FROM `palladium_questions` where input_mode='Manual Entry' AND status='Enable'";

	$result_manual_entry = mysqli_query($db, $select_manual_entry_query);

	$rows_manual_entry = array();
	//$arrayKeys = array_keys($rows);
	while($r1 = mysqli_fetch_assoc($result_manual_entry))
	{

	$rows_manual_entry[] = $r1;
	}
	
	?>
	
	
	
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
    display: block;
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

.image-radio1,.image-radio2,.image-radio3,.image-radio4,.image-radio5 {
    cursor: pointer;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 4px solid transparent;
    margin-bottom: 0;
    outline: 0;
}
.image-radio1 input[type="radio"],
.image-radio2 input[type="radio"],
.image-radio3 input[type="radio"],
.image-radio4 input[type="radio"],
.image-radio5 input[type="radio"] {
    display: none;
}
.image-radio-checked {
   
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

/* button custom */

.btn-success {
    color: #fff;
    background-color: #917133;
    /*border-color: #28a745;*/
    text-decoration: none;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


#question01_sad_modal,#question01_sad_modal_step2,
#question02_sad_modal,#question02_sad_modal_step2,
#question03_sad_modal,#question03_sad_modal_step2,
#question04_sad_modal,#question04_sad_modal_step2,
#question05_sad_modal,#question05_sad_modal_step2,
#question01_sad_modal_step2_thanks{
	text-align: center;
}

#question01_sad_modal_step2_thanks{
	max-width: 300px;
}

#question01_sad_modal_step2_thanks p{
	color: #ac9863;
    font-weight: 600;
}

</style>

<script>


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	/*return false;*/
})


/* https://www.codexworld.com/replace-radio-button-checkbox-with-image-jquery-css/ -- following script */

$(document).ready(function(){
    // add/remove checked class
    $(".image-radio1").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio1").on("click", function(e){
        $(".image-radio1").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});


$(document).ready(function(){
    // add/remove checked class
    $(".image-radio2").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio2").on("click", function(e){
        $(".image-radio2").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});

$(document).ready(function(){
    // add/remove checked class
    $(".image-radio3").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio3").on("click", function(e){
        $(".image-radio3").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});

$(document).ready(function(){
    // add/remove checked class
    $(".image-radio4").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio4").on("click", function(e){
        $(".image-radio4").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});

$(document).ready(function(){
    // add/remove checked class
    $(".image-radio5").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio5").on("click", function(e){
        $(".image-radio5").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});


</script>

</body>
</html>

