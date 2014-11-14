<article class="registrationform">
<h2>Registration Form</h2>
<p> We are currently not taking registrations for the conference, but if you want to be notified for our events in the future then please sign up. </p>

<form class="registration form-horizontal" action="#">

<fieldset id="personalinfo">
<legend>Personal Info</legend>
	
		<section class="row">

			<label class="col-md-4 control-label" for="myname">Name</label>
				<div class="controls">
					<input class="col-md-8" type="text" name="myname" id="myname" autofocus="" placeholder="Last, First" required=""/>
				</div><!-- controls-->
		</section><!-- row-->

		<section class="row">
			<label class="col-md-4 control-label" for="companyname">Company Name</label>
				<div class="controls">
					<input type="text" name="companybname" id="companyname"/>
				</div><!-- controls-->
		</section><!-- row-->

		<section class="row">
			<label class="col-md-4 control-label" for="myemail">Email</label>
			<div class="controls">
				<input class="col-md-8" type="email" name="myemail" id="myemail" required autocomplete="off"/>
			</div><!-- controls-->
		</section><!-- row-->
</fieldset><!-- personalinfo-->		
	<fieldset id="Otherinfo">
		<legend>Other Info</legend>

	<section class="row">
		<label class="col-md-4 control-label"> Request Type</label>
		  <div class="controls col-md-8">
			<label class="radio">
				<input type="radio" name="requesttype" value="question"/> Question
			</label>
		
			<label class="radio">
				<input type="radio" name="requesttype" value="comment"/> Comment
			</label>
		  </div><!-- controls-->
	</section><!-- row-->		  

		<label> Subscribe</label>
			<label class="checkbox">
			<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes"/>
				Would you like to subscribe to our email list?
			</label>
		<label for="reference">How did you hear about us?</label>
		<select name="reference" id="reference">
			<option>Choose...</option>
			<option value="friend">A friend</option>
			<option value="facebook">Facebook</option>
			<option value="twitter">Twitter</option>
		</select>
	</fieldset><!-- otherinfo-->
<button class="btn" type="submit">Submit</button>

</form>

</article>


















