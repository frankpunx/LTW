<!DOCTYPE html>
<html lang="en">
	<head>
		<title>My Event Planing</title>
		<meta content="charset=utf-8">
		<link rel="shortcut icon" href="images/favicon-myevent.ico">
		<link rel="stylesheet" href="css/style_2.css">
	</head>
	<body id="home">
        <div id="header" class="page-container">
            <div class="page-wrapper">
                <div class="section-wrapper">
                    <div id="header-section" class="section">
                        <a href="/">
							<img src="images/logo.png" class="pre_header_logo" alt="My event planing">
						</a>
                        <div id="nav">
                            <div id="menu">
								<ul id="main_nav">
									<li id="menu_tba">
										<a href="/login.php" class="menu" style="backgound-image:none">LOGIN</a>
									</li>
								</ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="subheader" class="page-container">
            <div class="page-wrapper">
				<div class="section-wrapper">
                    <div class="section">
                        <div class="home-page-link">
							<h2><a href="/">Personal Event</a></h2>
						</div>
						<div class="main-site-nav-wrapper"><div class="main-site-nav-container">
							<ul>
								<li id="menu_all_features"><a href="/1/features.htm" class="menu"><img src="/images/common/menu_features.png" alt="Features"><span>Features</span></a>
									<ul>
										<li id="menu_features"><a href="/1/features.htm" class="sub_menu">View Features</a></li>
										<li id="menu_how_it_works"><a href="/1/how_it_works.htm" class="sub_menu">How It Works</a></li>
									</ul>
								</li>
								<li id="menu_view_designs"><a href="/1/designs.htm" class="menu"><img src="/images/common/menu_designs.png" alt="Designs"><span>Designs</span></a>
									<ul>
										<li id="menu_designs"><a href="/1/designs.htm" class="sub_menu">View Designs</a></li>
									</ul>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div id="content" class="page-container horizontal-section">
            <div class="page-wrapper">
                <div class="section-wrapper">
                    <div class="content-col1-section section">
                        <div class="jumbotron masthead">
                            <div class="main-message">
                                <h1> Personal Events Made Easy  </h1>
								Set up a website for your personal event or party,<br>in under a minute! It's fast, easy and free.<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="first-mid-page-banner" class="horizontal-section mid-page-banner page-container">
            <div class="page-wrapper">
                <div class="section-wrapper">
                    <div class="content-col1-section">
                        <a id="free-trial-form"></a>
                        <div id="misc-preloader" style="display: none;"></div>
                        <div id="form_div"><script type="text/javascript" src="/javascript/jquery/components/lib.register_acct.form.inc.js"></script>
							<div id="free_trial_wrapper" class="free-trial-wrapper phase-1-wrapper clearfix">
								<h2 id="phase-1-title">Plan Your Event Now!</h2>
								<div id="free_trial">
									<form id="ft_signup" class="request_form" action="/submit.php" method="post" enctype="multipart/form-data" autocomplete="off">
										<fieldset class="column labelless ">
										<fieldset>
											<label class="error-">Create a Username</label>
											<input id="ft_username" name="username" placeholder="Create a Username" type="text" value="" class="textfield " tabindex="1">
										</fieldset>
										<fieldset>
											<label class="error-">Email</label>
											<input id="ft_email" name="email" placeholder="Your Email" type="text" value="" class="textfield " tabindex="2">
										</fieldset>
										</fieldset>
										</fieldset>
										<fieldset class="column labelless ">
										<fieldset>
											<label class="error-">Create a Password</label>
											<input id="ft_password" name="password" placeholder="Create a Password" type="password" value="" class="textfield " tabindex="4">
										</fieldset>
										<fieldset>
											<label class="error-">Confirm Password</label>
											<input id="ft_confirmpassword" name="confirm" placeholder="Confirm Your Password" type="password" value="" class="textfield " tabindex="5">
										</fieldset>
										</fieldset>
										<div class="submit_div">
											<input type="submit" id="signup_btn" name="submit_form" value="Join" class="plain btn btn-large" data-site_id="party.myevent.com" data-category="submit-signup-form" tabindex="6" onclick="_gaq.push(['_trackEvent', 'Sign Up Process', 'Link', 'submit-signup-form-party.myevent.com']);">
										</div>
										<input name="ft_action" id="ft_action" value="/submit.php" type="hidden">
									</form>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>