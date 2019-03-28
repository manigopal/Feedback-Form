<div class="form-group">
	<label>
		1. <?php echo $rows_star_rating[0]['questions']; ?>
		<input type="text" class="form-control hidden" id="email" placeholder="Your Answer" name="question01" 
		value="<?php echo $rows_star_rating[0]['questions']; ?>">
	</label>
    	
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio1 sad-img" for="sadchoosen1" onclick="ShowHideDiv()" id="sad-choosen1">
        <img class="img-responsive" src="sad_grey.png" />
        <input type="radio" name="question01_answer" value="VeryPoor"/>
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	
	
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio1 neutral-img" for="notsadchoosen" onclick="ShowHideDiv()" id="sad-choosen2">
        <img class="neutral img-responsive" src="neutral_grey.png" />
        <input type="radio" name="question01_answer" value="Average" />
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-radio1 happy-img" for="notsadchoosen" onclick="ShowHideDiv()"  id="sad-choosen3" >
        <img class="happy img-responsive" src="happy_grey.png" />
        <input type="radio" name="question01_answer" value="Excellent"/>
        <i class="glyphicon glyphicon-ok hidden"></i>
    </label>
	</div>
		
		
	<div id="showVeryPoor" style="display: none;">
				<h3>Subscriber Login Form</h3>
				
			</div>		
			
	</div> 
	
	<script type="text/javascript">
    function ShowHideDiv() {
        var sadchoosen1 = document.getElementById("sadchoosen1");
        var showVeryPoor = document.getElementById("showVeryPoor");
        showVeryPoor.style.display = sadchoosen1.checked ? "block" : "none";
    }
	</script>
