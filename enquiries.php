<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Enquiries</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
			integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="css/main.css" />
		<script type="text/javascript" src="js/enquiries.js" ></script>
	</head>
	
	
	
	<body body onLoad="document.enquiries.userid.focus();">
	<div class="nav-container">
        <div class="container">
            <header>
                 
                <img src="images/c(6).jpg" alt="MT logo" class="Logo">
                <div class="nav-bar">
                    
                        
                    
                    <nav>
                        <ul class="navigation-bar" id="nav">
                            <li><a href="index.html" >Home  </a></li>
                            <li><a href="products.html">Products </a></li>
                            <li><a href="services.html">Services  </a></li>                          
                           <li><a href="enquiries.php">Enquiries </a></li>

                        
                        </ul>
                    
                    </nav>
                </div>
				<ul> 
				<li>S</li>
				</ul>
        </div>
    </div>
			</header>

                         
						
                    </div>
		<div class="container">
			
			<form class="login-formm"action="connecting.php" method="POST" onSubmit="return validateForm()" name="enquiries"   >
			<h1 class="login-header">Enquiries</h1>
				<div class="container">
				
					<label for="userid"></label>
					<input type="text"  class="input-boxx" placeholder="Name" name="name1" size="12">
					<div class="status" id="status"></div>

					<label for="phone"></label>
					<input type="number" class="input-boxx" placeholder="phone number" name="number1"  size="12">

					<label for="email"></label>
					<input type="text" class="input-boxx" class="form-control" placeholder="email" name="email">
					<div class="help-block with-errors"></div>

					<label for="enquiries"></label>
					<textarea name="enquiry"  class="input-boxx" placeholder="type here" class="txt-area" ></textarea>

					<div class="clearfix">
					<input type="submit" value="Submit enquiry" name="submit"style="color:white; padding:20px;border-radius:10px;background-color: #00908E;border:none;padding:10px;margin-top:5em">  
					<a href="check.html"style="color:white; background-color: #F7931E;border-radius:10px;padding:10px;margin-top:5em;text-decoration:none">Check enquiry</a>

                        <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
				</div>
			</form>
		</div>
	</body>
</html>
