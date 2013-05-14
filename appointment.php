<?php
 /*
 	Appointment Form. 

 	I'm guessing they would want a date picker or something? Not sure, they don't have
 	one on their current appointment form. 
 */

?>
<head>
<link href="./css/styles.css" type="text/css" rel="stylesheet" media="screen">
<link href="./css/bootstrap.css" type="text/css" rel="stylesheet" media="screen">
<link href="./css/bootstrap-responsive.css" type="text/css" rel="stylesheet" media="screen">
</head>

<?php
    // This is only really used if there is no JS enabled. 
    $first_name = isset($_GET['first_name']) ? $_GET['first_name'] : "";
    $last_name = isset($_GET['last_name']) ? $_GET['last_name'] : "";
    $street = isset($_GET['street_address']) ? $_GET['street_address'] : "";
    $city = isset($_GET['city']) ? $_GET['city'] : "";
    $state = isset($_GET['state']) ? $_GET['state'] : "";
    $zip = isset($_GET['zip']) ? $_GET['zip'] : "";
    $phone = isset($_GET['phone']) ? $_GET['phone'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";
    $comments = isset($_GET['comments']) ? $_GET['comments'] : "";
?>


<form class="form-horizontal" id="appointment-form" method="post" action="./lib/process_form.php">
    <input type="hidden" name="form_type" value="appointment" />
    <div class=" control-group error-message" id="error-message">
        <?php if(isset($_GET["err"]) && $_GET["err"] == true) { 
                if($_GET['inv'] == 1) {
                    echo "Please provide a valid email address.";
                }
                else {
                    echo "Please fill in the required fields.";
                }
              } 
              else { 
                echo "&nbsp;"; 
            } 
        ?>
    </div>
  	<div class="control-group">
    	<label class="control-label" for="first_name">First Name:</label>
    	<div class="controls">
    		<input class="span6" type="text" id="first_name" name="first_name" placeholder="First" value="<?php echo $first_name; ?>" required />
    		<span class="help-inline"></span>
    	</div>
    </div>
    <div class="control-group">
        <label class="control-label" for="first_name">Last Name:</label>
        <div class="controls">
            <input class="span6" type="text" id="last_name" name="last_name" placeholder="Last" value="<?php echo $last_name; ?>" required  />
            <span class="help-inline"></span>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label">Address:</label>
    	<div class="controls">
    		<input class="span6" type="text" id="street_address" name="street_address" placeholder="Street" value="<?php echo $street; ?>" required />
    		<span class="help-inline"></span>
    	</div>
    </div>
    <div class="control-group">
    	<label class="control-label">City:</label>
    	<div class="controls ">
    		<input class="span6" type="text" id="city" name="city" placeholder="City" value="<?php echo $city; ?>" required />
    		<span class="help-inline"></span>
    	</div>
    </div>
    <div class="control-group">
	    <label class="control-label">State:</label>
	    <div class="controls">
	    	<input class="span6" type="text" id="state" name="state" autocomplete="off" placeholder="State" value="<?php echo $state; ?>" required  />
	    	<span class="help-inline"></span>
	    </div>
	</div>
	<div class="control-group">
    	<label class="control-label">Zip:</label>
    	<div class="controls">
    		<input class="span6" type="text" id="zip" name="zip" placeholder="Zip" value="<?php echo $zip; ?>" required />
    		<span class="help-inline"></span>
    	</div>
    </div>
    <div class="control-group">
	    <label class="control-label">Phone:</label>
	    <div class="controls">
		    <input class="span6" type="tel" id="phone" name="phone" placeholder="(555) 555-5555" value="<?php echo $phone; ?>" required />
		    <span class="help-inline"></span>
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label">Email:</label>
	    <div class="controls">
	    	<input class="span6" type="text" id="email" name="email" placeholder="email@address.com" value="<?php echo $email; ?>" />
	    	<span class="help-inline"></span>
	    </div>
	</div>
	<div class="control-group">
    	<label class="control-label">Comments:</label>
    	<div class="controls">
    		<textarea class="span6" rows="3" id="comments" name="comments"><?php echo $comments; ?></textarea>
    		<span class="help-inline"></span>
    	</div>
    </div>
    
    <div class="controls">
    	<button type="submit" id="submit-button" class="btn btn-primary" data-loading-text="Sending..." data-complete-text="Sent!">
            Submit
        </button>
    	<button type="button" id="reset-button" class="btn">Reset</button>
        <div id="sent-message" class="sent-message"></div>
    </div>

</form>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="./js/vendor/jquery.validate.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/appointment.js"></script>