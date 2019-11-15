<?php include('process.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Renati Group</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/renati.css">

</head>

<body>
    <?php include('inc/nav.htm'); ?>
    <div class="container">

        <div class="banner nomargin">
            <div class="watermark"><img class="swirl" src="images/watermark.png" alt="" /></div>
            <img class="img-responsive" src="images/banner.jpg" alt="" />
        </div>


    

        <div class="row">
            <div class="container">
                <div class="col-md-7">
                  <h1>Contact Us</h1>
                    <p>
                  To get  <strong>in touch</strong> with the Renati Group or any of our <strong>sister companies</strong>,  please use one of the following: </p>
                    <p><strong>Tel:</strong> 010 013 0542
                        <strong><br>
                        Email:</strong> <a href="mailto:info@renati.co.za">info@renati.co.za</a></p>
                  <h3>Renati Group Head Office</h3>
                    <p>217 Koorsboom Avenue<br>
                      Unit 5, Geo2 Building<br>
                      Glen Eagles Office Park<br>
                    Kempton Park 1630</p>
</div>            
                <div class="col-md-4 col-md-offset-1">
                    
                </div>
            </div>
        </div>
        <p class="clearfix"></p>
        <hr />
        <div class="row">
            <div class="container">
              <div class="col-md-5 frmhld">
                
                                             <?php if (isset($msgsent)) { echo $msgsent; } ?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regForm" class="form-horizontal">
			  <div class=" row form-group">
			  <label for="firstname_id" class="control-label col-md-4">First name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="firstname" id="firstname_id" value="<?php if (isset($firstname)) { echo $firstname; } ?>">
					<?php if (isset($err_firstname)) { echo $err_firstname; } ?>
					<?php if (isset($err_firstnamepattern)) { echo $err_firstnamepattern; } ?>
				</div>
        	</div>
        	
       	  <div class="row form-group">
				<label for="surname_id" class="control-label col-md-4">Last name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="surname" id="surname_id" value="<?php if (isset($surname)) { echo $surname; } ?>">
					<?php if (isset($err_surname)) { echo $err_surname; } ?>
					<?php if (isset($err_surnamepattern)) { echo $err_surnamepattern; } ?>
				</div>
        	</div>
       	  <div class="row form-group">
			  <label for="emailadd_id" class="control-label col-md-4">Email address:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="emailadd" id="emailadd_id" value="<?php if (isset($emailadd)) { echo $emailadd; } ?>">
					<?php if (isset($err_emailadd)) { echo $err_emailadd; } ?>
					<?php if (isset($err_emailaddpattern)) { echo $err_emailaddpattern; } ?>
				</div>
        	</div>
        	
       	  <div class="row form-group">
		    <label for="cellno_id" class="control-label col-md-4">Contact number:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="cellno" id="cellno_id" value="<?php if (isset($cellno)) { echo $cellno; } ?>">
					<?php if (isset($err_cellno)) { echo $err_cellno; } ?>
					<?php if (isset($err_cellnopattern)) { echo $err_cellnopattern; } ?>
				</div>
        	</div>
       	  <div class="row form-group">
       	    <label for="comments_id" class="control-label col-md-4">Comments/enquiry:</label>
				<div class="col-md-8">
				<textarea name="comments" rows="5"  class="form-control  input-sm" id="comments_id" value="<?php if (isset($comments)) { echo $comments; } ?>"></textarea>
				<?php if (isset($err_comments)) { echo $err_comments; } ?>
			  </div>
      	</div>
    <p class="clearfix"></p>
        	<div class="form-group">
				<div class="col-md-12">	
				<input name="submitbut" type="submit" class="btn btn-primary pull-right" id="regBut" value="Submit">
			</div>	
	</div>
                <p class="clearfix"></p>
		</form>
                  
                </div>            
                <div class="col-md-7">
                    <div class="map">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1791.8714518612396!2d28.25903981311954!3d-26.07465738751056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s217+Koorsboom+Avenue%2C+Glen+Marais!5e0!3m2!1sen!2sza!4v1543816063291"  width="100%" height="370" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row companies">
            <?php include('inc/companies.htm'); ?>
        </div>
        <div class="row footer">
            <div class="container">
                <?php include('inc/footer.htm'); ?>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script>
	$(document).ready(function () {
		var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('activea');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('activea');
    });
</script>
</body>

</html>