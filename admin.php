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
                            <li><a href="about.html">About </a></li>
                            <li><a href="contact.html">Contact  </a></li>                          
                           <li><a href="enquiries.html">Enquiries </a></li>

                        
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
			
			<form class="login-formm"action="display.php" method="POST" onSubmit="return validateForm()" name="enquiries"   >
			<h1 class="login-header">Login as Admin</h1>
				<div class="container">
				
					<label for="userid"></label>
					<input type="text"  class="input-boxx" placeholder="name" name="user" size="12">
					<div class="status" id="status"></div>

					<label for="phone"></label>
					<input type="password" class="input-boxx" placeholder="password" name="pass"  size="12">

					<div class="clearfix"style="margin-top:30px">
					
					<a href="display.php"style="color:white; background-color: #00908E;border-radius:10px;padding:10px;margin-top:5em;text-decoration:none">Login</a >

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
