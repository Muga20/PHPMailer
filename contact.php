<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="main.css">
<form form action="mailer.php" method="post" >
<div class="container contact">

	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname"> Names:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter Names" name="name">
				  </div>
				</div>
		
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required >
				  </div>
				</div>

                <div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Subject:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Subject" name="subject">
				  </div>
                </div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" name="message" required ></textarea>
				  </div>
				</div>

				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="send" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
