<!DOCTYPE html>
<html>
	<head>
		<title>My Event Planning</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="header" class="page-container">
			<div class="page-wrapper">
				<div class="section-wrapper">
					<div id="header-section" class="section">
						<a href="index.php">
							<img src="images/Logo.png" class="header_logo" alt="My Event Planner"/>
						</a>
						<div id="nav">
							<div id="menu">
								<ul id="main_nav">
									<li id="menu_tba">
										<a href="index.php" class="menu" style="backgound-image:none">LOGIN</a>
									</li>
								</ul>
							</div>
						<a href="#" class="btn btn-join">Join now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="subheader" class="page-container">
			<div class="page-wrapper">
				<div class="section-wrapper">
					<div class="section">
						<div class="home">
							<h2>
								<a href="/">Personal Event</a>
							</h2>
						</div>
						<div class="main-site-nav-wrapper">
							<div class="main-site-nav-container">
								<ul>
									<li id="menu_all_features">
										<a href="/" class="menu">
											<img src="images/features.png" alt="Features">
											<span>Features</span>
										</a>
										<ul>
											<li id="menu_features">
												<a href="/" class="sub_menu">View Features</a>
											</li>
											<li id="menu_how_it_works">
												<a href="/" class="sub_menu">How it Works</a>
											</li>
										</ul>
									</li>
									<li id="menu_view_designs">
										<a href="/" class="menu">
											<img src="images/designs.png" alt="Designs">
											<span>Designs</span>
										</a>
										<ul>
											<li id="menu_designs">
												<a href="/" class="sub_menu">View Designs</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="body" class="page-container">
			<div class="page-wrapper">
				<div class="section-wrapper">
					<div class="section">
						<div class="body_main_page">
							<h3>Make your personal event</h3>
							<img src="images/events.jpg" alt="Event picture">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="join_form" class="page-container">
			<div class="page-wrapper">
				<div class="section-wrapper">
					<div class="section">
						<div class="body-form">
							<form action="join_form.php" method="post" id="join_form_action">
								<ul>
									<li>
										<input type="text" name="username" placeholder="User Name" id="username">
									</li>
									<li>
										<input type="email" name="emailaddress" placeholder="user@email" id="emailaddress">
									</li>
									<li>
										<input type="password" name="password" placeholder="Password" id="password">
									</li>
								</ul>
							</form>
							<a href="#" class="btn btn-submit" onclick="alert('Hello world!')">Join</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>