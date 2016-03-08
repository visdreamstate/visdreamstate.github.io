<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$human = intval($_POST['human']);
	$from = 'Demo Contact Form'; 
	$to = 'example@domain.com'; 
	$subject = 'Message from Contact Demo ';

	$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}

		// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

		//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}

// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <title>Lam Pham</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/hover.zoom.js"></script>
  <script src="assets/js/hover.zoom.conf.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <!-- Static navbar -->
  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">LAM PHAM</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="tritonbites.html">Projects</a>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <!-- <li>
          <a href="blog.html">Blog</a>
        </li>
        -->
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
    <!--/.nav-collapse --> </div>
</div>

<!-- +++++ Contact Section +++++ -->

<div class="container pt">
  <div class="row mt">
    <div class="col-lg-6 col-lg-offset-3 centered">
      <h3>CONTACT ME</h3>
      <hr>
      <p>Ask me anything.</p>
    </div>
  </div>
  <form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-2">
        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value=""></div>
        <?php echo "<p class='text-danger'>$errName</p>";?>
    </div>
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-2">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value=""></div>
        <?php echo "<p class='text-danger'>$errEmail</p>";?>
    </div>
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-2">
        <textarea class="form-control" rows="9" name="message" placeholder="Enter your message here"></textarea>
        <?php echo "<p class='text-danger'>$errMessage</p>";?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
        <?php echo $result; ?>  
      </div>
    </div>
  </form>
</div>
<!-- /container -->

<!-- +++++ Footer Section +++++ -->

<div id="footer">
  <div class="profile">
    <h3>
      <a href="https://www.linkedin.com/in/lamphamm">
        <img src="./assets/img/logo_linkedin.png" HEIGHT="50" WIDTH="50" alt="linkedin logo" title="linkedIn"></a>
      <a href="http://www.last.fm/user/Lameenator">
        <img src="./assets/img/lastfm.png" HEIGHT="50" WIDTH="50" alt="lastfm logo" title="lastfm"></a>
      <a href="mailto:lamqpham101@gmail.com">
        <img src="./assets/img/logo_mail.png" HEIGHT="50" WIDTH="50" alt="email logo" title="Email Lam Pham"></a>
    </h3>
  </div>

  <!-- Bootstrap core JavaScript
      ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>