<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Form Submission'; 
		$to = 'accounts@wildturnbull.com'; 
		$subject = 'WildTurnbull Contact Form';
		
		$body =" From: $name\n E-Mail: $email\n Message:\n $message";
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
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We\'ll be in touch</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }
        }
	}
?>
<!DOCTYPE html>
  <!--[if lt IE 7]> <html lang="en" class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>    <html lang="en" class="lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>    <html lang="en" class="lt-ie10 lt-ie9"> <![endif]-->
  <!--[if IE 9]>    <html lang="en" class="lt-ie10"> <![endif]-->
  <!--[if gt IE 10]><!--> <html lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wild Turnbull, Chartered Accountants covering Tunbridge Wells, London and the South East">
    <meta name="author" content="Wild Turnbull Accountants">
    <title>Wild Turnbull | Chartered Accountants</title>
    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <link href="css/iefix.css" rel="stylesheet">
    <script src="scripts/html5shiv.js"></script>
    <script src="scripts/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="top">
    
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-hide data-scroll-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <a data-scroll class="navbar-brand" href="#home">
                <img src="img/wild-turnbull.png" alt="Wild Turnbull Chartered Accountants">
            </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-scroll href="#services">Services</a></li>
                    <li><a data-scroll href="#contact">Contact</a></li>
                    <li><a data-scroll href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>   


    <div id="page">
        
        <section id="home" class="autoheight">
            <div class="container home-text">
                <h1 class="home-heading">WildTurnbull Chartered Accountants</h1>
                <div class="divider"></div>
                <div class="home-contact">
                    <a href="mailto:accounts@wildturnbull.com">email accounts@wildturnbull.com</a> or <a href="tel:+441430876907">call us on 01892 000 000</a>
                </div>
            </div>
            <div id="background_cycler">
                <div class="active" style="background-image:url(img/london_accountants.jpg)"></div>
                <div style="background-image:url(img/tunbridgewells_accountants.jpg)"></div>
            </div>
            <!--<div class="london-bg"></div>
            <div class="tunbridgewells-bg"></div>-->
        </section>

        <section id="services" class="card card-default">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        
                        <p class="lead">Our aim is simple; to help you to better understand and make the best of your business finances so that you can concentrate on running your business.</p>
                        
                        <br />

                        <h2>How we can support your business</h2>

                        <p><strong>Values:</strong> we share your values for service, excellence and ambition.</p>

                        <p><strong>Service:</strong> we take time to get to know you and your business, to build a good relationship and understand what is important to you. this enables us to tailor our services to what you need and provide timely advice and support.</p>

                        <p><strong>Benefit:</strong> we look to help you maximize your income and remove any worries about missing HMRC deadlines, incurring fines or missing important budgetary changes. </p>

                    </div>
                </div>
            </div>
        </section>

        <section id="" class="card card-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-12">

                        <h2>Industries supported include;</h2>

                        <ul>
                            <li>Trades including carpentry, electricals, plumbing</li>
                            <li>Barristers and chambers, Marketing solicitors</li>
                            <li>London Temple business training charities</li>
                            <li>import and distribution food packaging</li>
                            <li>Estate agents technology innovation management</li>
                            <li>Entertainment including television production, acting, independent music publishing and soho group bars and clubs</li> 
                            <li>Engineering including engineering technology and historic motor racing engineers</li>
                        </ul>

            <span id="contactform"></span>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact" class="card card-default">
            <div class="container">                        
                <h2>Contact us</h2>                
                <div class="row">
                    <div class="col-md-6 col-md-push-6">
                        
                        <p>Speak to us or request a free consultation to find out out how we can help you and your business.</p>                       
                        <p>Email <a href="mailto:accounts@wildturnbull.com">accounts@wildturnbull.com</a></p>
                        <p>Telephone <a href="tel:+441430876907">01892 000 000</a></p>
                        <br />
                        
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        
                        <form class="form-horizontal" role="form" method="post" action="/#contactform">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>	
                                </div>
                            </div>
                        </form> 

                    </div>
                </div>
            </div>
        </section>


        <section id="about" class="card card-primary bull-bg">
            <div class="container">

                <h2>About us</h2>
                
                <p><strong>Experience:</strong> We bring a mix of accountancy, taxation and business start-up experience gained over 15 years across many different business types, including: sole traders, owner managed limited companies, partnerships and personal tax return clients</p>
                <p><strong>Owner:</strong> Richard Michael Turnbull ACA, CTA, BEng</p>
                <p><strong>Qualifications:</strong> Chartered Accountant (ACA) &amp; Chartered Tax Advisor (CTA) the University of Surrey, Bachelor of Engineering (BEng)</p>
                <p>I am a member of ICAEW and CIOT, the most highly recognised UK accountancy and taxation bodies.</p>
                <p><strong>Support services:</strong> Jacqui Wild BA Hons</p>

            </div>
        </section>


    </div>
    <!-- /#page -->

    <footer class="footer">
        <div class="container">
            <ul class="social">
                <li><a href="http://www.linkedin.com/wildturnbull" title="Linkedin" target="_blank"><i class="icon icon-linkedin"></i></a></li>
                <li><a href="http://www.twitter.com/wildturnbull" title="Twitter" target="_blank"><i class="icon icon-twitter"></i></a></li>
                <li><a href="http://www.facebook.com/wildturnbull" title="Facebook" target="_blank"><i class="icon icon-facebook"></i></a></li>
                <li><a href="http://www.googleplus.com/wildturnbull" title="Google+" target="_blank"><i class="icon icon-google-plus"></i></a></li>
            </ul>
            <div class="row">
                <div class="col-sm-5">
                    &copy; Wild Turnbull Ltd 2015.
                </div>
                <div class="col-sm-7">
                    <!--<ul class="links">
                        <li><a target="_blank" href="/policy">Privacy &amp; Cookie Policy</a></li>
                        <li><a target="_blank" href="/terms">Terms of Use</a></li>
                    </ul>-->
                </div>
            </div>
        </div>
    </footer>
    <a data-scroll id="back-to-top" class="hidden icon icon-chevron-up" href="#page"></a>
    <!-- JavaScript
        ================================================== -->
    <script src="scripts/jquery.min.js"></script>
    <script type="text/javascript">
        $('#background_cycler').hide();//hide the background while the images load, ready to fade in later
    </script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/smooth-scroll.min.js"></script>
    <script src="scripts/jquery.nicescroll.min.js"></script>
    <script src="scripts/ui.js"></script>
</body>

</html>