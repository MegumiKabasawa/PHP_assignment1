<!DOCTYPE html>
<html lang="en">

<head>
  <!--  meta setting  -->
  <meta charset="utf-8">
  <title>Autumn Hats popular vote</title>
  <meta name="description" content="Assignment1 Dynamic Web Site with Database Integration_main page">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name= "author" content= "Megumi Kabasawa">
  <!--  Add our CSS file  -->
  <link id="css-link" rel="stylesheet" href="css/style.css">

  <!-- Add our Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Caveat&family=Exo:wght@100&family=Indie+Flower&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

  <!-- header section -->
  <header>
      <!-- logo section -->
      <div class="logo">
        <a href="index.php"><img src="images/LONDON_logo.png" alt="header logo" width="120" height="120"></a>
      </div> 
      <h1>Autumn Hats popular vote</h1>
      <p>Vote for your favorite!</p>
    
    <!-- navigation section -->
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View</a></li>
      </ul>
    </nav>
  </header>

      <!-- main section-->

      <main>
        <div class="three-sections">

        <!-- Hat article -->
        <div class = "article section_1">
          <h2>Brimmed hat</h2>
          <div class="Hat">
            <img src="images/hat.jpeg" alt="Hat" class="photo-image">
          </div>
          <p>For those who want to add a touch of bohemian flair to their fall wardrobe, the brimmed hat is the perfect choice. With its oversized brim, it not only provides shade but also adds drama and character to your outfit. Pair it with a flowy maxi dress, layered jewelry, and ankle boots for a look that's effortlessly chic and on-trend.</p>
        </div>

        <!-- Beret article-->        
        <div class = "article section_2">
          <h2>Ribbon Beret</h2>
          <div class="Beret">
            <img src="images/belley.jpeg" alt="Beret" class="photo-image">
          </div>
          <p>AWhen the temperatures start to dip, the beret becomes an essential accessory. Made from soft, warm materials like knit wool or cashmere, these hats are perfect for keeping your head toasty on crisp autumn days. They come in an array of colors and patterns, allowing you to express your personal style while staying cozy. </p>
          </div>

        <!-- Cap article-->    
        <div class = "article section_3">
          <h2>NY cap</h2>
          <div class="Cap">
            <img src="images/cap.jpeg" alt="cap" class="photo-image">
          </div>
          
          <p>If you're all about casual comfort, the trusty baseball cap is a must-have for your autumn wardrobe. Whether you're heading out for a hike, running errands, or simply enjoying a leisurely stroll through the park, a baseball cap can shield your eyes from the autumn sun and add a sporty vibe to your attire. Choose one in a fall-inspired color or with a seasonal logo to stay on theme.</p>
        </div>
      </div>
      <br>

       <!-- voting_form -->   
       <div class = "voting_form">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
          <h2>Voting Form</h2>

          <!-- voting_form_Name -->   
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="input1" required>
            </div>
          </div>
          <!-- voting_form_Email -->   
           <div class="form-group">
						 <label for="input2" class="col-sm-2 control-label">Email</label>
						 <div class="col-sm-10">
							 <input type="email" name="email" class="form-control" id="input2" required>
						 </div>
					 </div>

          <!-- voting_form_Message -->
          <div class="form-group">
						 <label for="input4" class="col-sm-2 control-label">Message</label>
						 <div class="col-sm-10">
							 <input type="text" name="message" class="form-control" id="input4">
						 </div>
					 </div>

          <!-- voting_form_Vote -->
					 <div class="form-group">
						 <label for="input3" class="col-sm-2 control-label">Vote</label>
						 <div class="col-sm-10">
							 <select name="vote" class="form-control" id="input3" required>
								 <option value="" selected hidden>Select Your Pick</option>
								 <option value="Hat">Hat</option>
								 <option value="Beret">Beret</option>
								 <option value="Cap">Cap</option>
							 </select>
						 </div>
             </div>
           <br>
          <!-- voting_form_Submit button -->
             <div class="form-group">
						 <input type="submit" class="btn" value="Submit">
					 </div>
        </form>
       </div>
       
          <!-- php -->          
          <?php
					 	require_once('database.php');
						
						if(!empty($_POST)){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$vote = $_POST['vote'];
							$message = $_POST['message'];
							$res   = $database->create($name, $email, $vote, $message);
              
							if($res){
								echo $alert = "<script type='Successfully inserted data');</script>";
                echo $alert;
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
      </main>
     <footer>
     <p>Autumn Hats popular vote (C) All Rights Reserved.</p>
     </footer>
   </body>
</html>
