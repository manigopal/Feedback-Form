HTML Code: 

#Div
<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
	<a href="#question01_sad_modal" rel="modal:open">
    <label class="image-radio1 sad-img" for="sadchoosen1">
        <img class="img-responsive" src="sad_grey.png" id="sadchoosen1" />
        <input type="radio" name="question01_answer" value="Very Poor"/>
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	
	 </a>
	</div>
  
  
#ValueDisplayfromModalPopup
<div id="question01_additional_feedback_answer"> </div>


#ModalSection
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
	<a href="#" class="btn btn-success btn-sm" id="question01_additional_feedback_close" rel="modal:close">Submit</a>&nbsp;
	  <a href="#" class="btn btn-success btn-sm" rel="modal:close">Cancel</a>
	
	</div>
  
  
  #GetValuesFromModalScript
  	<script type="text/javascript">
    $(document).ready(function(){
		$('#question01_additional_feedback_close').click(function(){
			var databack = $("#question01_sad_modal_step2 #question01_additional_feedback").val().trim();
			$('#question01_additional_feedback_answer').html(databack);
		});
	});
	
	</script>
  
  #ReferenceCode
  https://www.youtube.com/watch?v=8zTL1LMxBqc
  
  #WorkingDemo
  https://ibb.co/6P5LYcm
  
