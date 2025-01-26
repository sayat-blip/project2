<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Brain Academy</title>

	<!----GOOGLE FONTS---->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Itim&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
		rel="stylesheet">

	<!----BOXICONS---->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<!----MAIN CSS---->
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<!----HEADER---->
	<header class="header">
		<div class="logo">
			<a href="#"><img src="lib/images/logo.png" alt="Brain Academy Logo" height="50px"></a>
			<a href="#" style="color: #fff; text-decoration: none;">Brain Academy</a>
		</div>
		<nav class="nav">
			<a href="#home"><button class="nav_btn">Home</button></a>
			<a href="#courses"><button class="nav_btn">Courses</button></a>
			<a href="#webinar"><button class="nav_btn">Webinar</button></a>
			<a href="dashboard.php"><button class="nav_btn">Dashboard</button></a>
		</nav>
		<div class="lang-switch">
			<select>
				<option selected>Eng</option>
				<option>Ru</option>
				<option>Kz</option>
				<select>
					<img src="lib/images/globe.svg" alt="globe">
		</div>
		<button class="login-btn"><a href="index.php" style="text-decoration:none; color:#fff"> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?></a></button>
	</header>

	<!----HOME---->
	<main>
		<section class="home" id="home">
			<img src="lib/images/Group 14.png" alt="book" style="
			position: absolute;
			width: 90px;
			height: 90px;
			left: 675px;
			top: 175px;
			transform: rotate(12.79deg);
			">
			<img src="lib/images/Group 15.png" alt="lamp" style="
			position: absolute;
			width: 90px;
			height: 90px;
			left: 175px;
			top: 250px;
			z-index: 1;
			transform: rotate(-8.82deg);
			">
			<div class="home_image">
				<img src="lib/images/pictured-mark-zuckerberg_41-removebg-preview.png" alt="mark_zuckerberg">
			</div>
			<div class="home_content">
				<h1>Grow Your Skills To Advance Your Career Path</h1>
				<h4>We have something big for you who want to level up!</h4>
				<div class="search-bar">
					<input type="text" placeholder="What do you want to learn...">
					<button>
						<img src="lib/images/search.png" alt="Search Icon">
					</button>
				</div>
				<div class="suggestions">
					<p>Suggestions</p>
					<div class="suggestion_btns">
						<button>UI UX Design</button>
						<button>CSS Fundamental</button>
						<button>3D Design</button>
						<button>Website Development</button>
						<button>Logo Design</button>
						<button>Icon Design</button>
					</div>
				</div>
			</div>
			<div class="frame">
				<div class="profile-pictures">
					<img src="lib/images/student1.png" alt="Profile 1">
					<img src="lib/images/student2.png" alt="Profile 2">
					<img src="lib/images/student3.png" alt="Profile 3">
					<img src="lib/images/student4.png" alt="Profile 4">
				</div>
				<div class="text">More than 80k+ Students <span>joined!</span></div>
			</div>
		</section>

		<!----FEATURES---->
		<section class="features" id="features">
			<div class="features-container">
				<div class="feature-box">
					<div class="feature-icon">
						<i class='bx bx-user'></i>
						<h3>Get New Friends</h3>
					</div>
					<p>You will meet new friends in some of classes that you take. Say hello to them and make friends, it will be
						so much warm friendship!</p>
				</div>
				<div class="feature-box">
					<div class="feature-icon">
						<i class='bx bxs-graduation' alt="Expert Mentor Icon"></i>
						<h3>Expert and Fun Mentor</h3>
					</div>
					<p>Learn with earnest and don't forget to get relax too. Learn and enjoy the materials or classes with our
						expert mentors.</p>
				</div>
				<div class="feature-box">
					<div class="feature-icon">
						<i class='bx bx-book-heart' alt="Flexible Access Icon"></i>
						<h3>Flexible Access</h3>
					</div>
					<p>You can access materials or classes easily by our website also mobile. Access it everywhere and everytime,
						no limit for you to learn!</p>
				</div>
			</div>
			<div class="vector"></div>
		</section>



		<!----PURPLE BLOCKS---->
		<section class="blocks" id="courses">
			<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between">
				<div class="card">
					<div class="card-image">
						<img src="lib/images/course1.png" alt="Digital Marketing Strategy">
						<span class="video-count">12 Videos</span>
					</div>
					<div class="card-content">
						<span class="category">Technology</span>
						<h3 class="card-title">Digital Marketing Strategy</h3>
						<p class="description">This course aims to give you deeper understanding of core processes ...</p>
					</div>
					<div class="card-footer">
						<img src="lib/images/mentor1.svg" alt="Joey Piere" class="mentor-image">
						<div class="mentor-info">
							<span class="mentor-name">Joey Piere</span>
							<span class="mentor-role">Mentor</span>
						</div>
					</div>
				</div>
				<div class="block-texts">
					<ul>
						<li><b>Comprehensive Skills:</b> Learn SEO, social media, content marketing, and paid ads to create
							effective
							campaigns.</li>
						<li><b>Up-to-Date Knowledge:</b> Stay current with the latest marketing tools.</li>
						<li><b>Hands-On Experience:</b> Work on real-world projects to apply your skills immediately.</li>
						<li><b>Data-Driven Success:</b> Master analytics to optimize campaigns and improve ROI.</li>
						<li><b>Career Growth:</b> Enhance your employability with in-demand digital marketing expertise.</li>
					</ul>
				</div>
			</div>

			<div
				style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; margin-top: 40px;">
				<div class="block-texts">
					<ul>
						<li><b>Comprehensive Skills:</b> Learn SEO, social media, content marketing, and paid ads to create
							effective
							campaigns.</li>
						<li><b>Up-to-Date Knowledge:</b> Stay current with the latest digital marketing trends and tools.</li>
						<li><b>Hands-On Experience:</b> Work on real-world projects to apply your skills immediately.</li>
						<li><b>Data-Driven Success:</b> Master analytics to optimize campaigns and improve ROI.</li>
						<li><b>Career Growth:</b> Enhance your employability with in-demand digital marketing expertise.</li>
					</ul>
				</div>
				<div class="card">
					<div class="card-image">
						<img src="lib/images/course2.png" alt="Course Preview" />
						<span class="video-count">7 Videos</span>
					</div>
					<div class="card-content">
						<span class="category">Design</span>
						<h3 class="card-title">Figma Fundamental</h3>
						<p class="description">These lessons and exercises will help you start designing with Figma ...</p>
					</div>
					<div class="card-footer">
						<img src="lib/images/mentor1.svg" alt="" class="mentor-image">
						<div class="mentor-info">
							<span class="mentor-name">Araya Sheila</span>
							<span class="mentor-role">Mentor</span>
						</div>
					</div>
				</div>
			</div>

			<div
				style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; margin-top: 40px;">
				<div class="card">
					<div class="card-image">
						<img src="lib/images/course3.png" alt="Course Preview" />
						<span class="video-count">10 Videos</span>
					</div>
					<div class="card-content">
						<span class="category">Coding</span>
						<h3 class="card-title">HTML Fundamental</h3>
						<p class="description">Well organized and easy to make you understand tutorials with lots of ...</p>
					</div>
					<div class="card-footer">
						<img src="lib/images/mentor1.svg" alt="" class="mentor-image">
						<div class="mentor-info">
							<span class="mentor-name">Ellisa Ruth</span>
							<span class="mentor-role">Mentor</span>
						</div>
					</div>
				</div>
				<div class="block-texts">
					<ul>
						<li><b>Comprehensive Skills:</b> Learn SEO, social media, content marketing, and paid ads to create
							effective
							campaigns.</li>
						<li><b>Up-to-Date Knowledge:</b> Stay current with the latest digital marketing trends and tools.</li>
						<li><b>Hands-On Experience:</b> Work on real-world projects to apply your skills immediately.</li>
						<li><b>Data-Driven Success:</b> Master analytics to optimize campaigns and improve ROI.</li>
						<li><b>Career Growth:</b> Enhance your employability with in-demand digital marketing expertise.</li>
					</ul>
				</div>
			</div>


			<div
				style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; margin-top: 40px;">
				<div class="block-texts">
					<ul>
						<li><b>Up-to-Date Knowledge:</b> Stay current with the latest Android trends, tools, and best practices to
							build high-quality apps.</li>
						<li><b>Hands-On Experience:</b> Work on real-world projects to apply your skills in creating functional,
							user-friendly Android apps.</li>
						<li><b>Efficient Development:</b> Learn to use frameworks like Firebase, Retrofit, and Jetpack to streamline
							app development.</li>
						<li><b>Career Growth:</b> Boost your career with in-demand Android development skills and create apps that
							stand out in the mobile market.</li>
					</ul>
				</div>
				<div class="card">
					<div class="card-image">
						<img src="lib/images/course4.png" alt="Course Preview" />
						<span class="video-count">16 Videos</span>
					</div>
					<div class="card-content">
						<span class="category">Coding</span>
						<h3 class="card-title">Android App Development</h3>
						<p class="description">Take your Android coding skills to the next level, advanced Android app ...</p>
					</div>
					<div class="card-footer">
						<img src="lib/images/mentor1.svg" alt="" class="mentor-image">
						<div class="mentor-info">
							<span class="mentor-name">Wendy Troye</span>
							<span class="mentor-role">Mentor</span>
						</div>
					</div>
				</div>
			</div>

			<div
				style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; margin-top: 40px;">
				<div class="card">
					<div class="card-image">
						<img src="lib/images/course5.png" alt="Course Preview" />
						<span class="video-count">37 Videos</span>
					</div>
					<div class="card-content">
						<span class="category">Coding</span>
						<h3 class="card-title">IOS App Development</h3>
						<p class="description">Take your IOS coding skills to the next level, advanced IOS app ...</p>
					</div>
					<div class="card-footer">
						<img src="lib/images/mentor1.svg" alt="" class="mentor-image">
						<div class="mentor-info">
							<span class="mentor-name">Katy Hard</span>
							<span class="mentor-role">Mentor</span>
						</div>
					</div>
				</div>
				<div class="block-texts">
					<ul>
						<li><b>Setup:</b> Use Xcode (official IDE) and Swift (primary programming language) to start building apps.
						</li>
						<li><b>UI Design:</b> Build interfaces with UIKit or SwiftUI, and ensure they adapt to various screen sizes
							using Auto Layout.
						</li>
						<li><b>Core Components:</b> Work with UIViewController for managing screens and use the MVC design pattern.
						</li>
						<li><b>Data Storage:</b> Store data locally with Core Data or UserDefaults, and make network requests with
							URLSession.</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- --LIVE ONLINE WEBINAR---->
		<section class="webinar" id="webinar">
			<div class="webinar-texts">
				<h2>Live Online Webinar</h2>
				<p>You can stream Webinar live on our apps. Stay updated on our Webinar, it's Free!</p>
			</div>
			<div class="container">
				<div class="box">
					<iframe width="500" height="500" src="https://www.youtube.com/embed/mLvhD1HYM6w" frameborder="0"
						allowfullscreen></iframe>>
				</div>
				<div class="box">
					<iframe width="500" height="500" src="https://www.youtube.com/embed/-guuzsGxFQE" frameborder="0"
						allowfullscreen></iframe>
				</div>
				<div class="box">
					<iframe width="1280" height="720" src="https://www.youtube.com/embed/2_Miz2kJIn8" frameborder="0"
						allowfullscreen></iframe>
				</div>
			</div>
			<a href="#" class="see-more">See more webinar videos →</a>
		</section>

		<!-- PRICING -->
		<section class="pricing" id="pricing">
			<div class="pricing-header">
				<h2>Course Pricing</h2>
				<p>Choose pricing that suits your need.</p>
			</div>

			<div class="pricing-cards">
				<div class="pricing-card">
					<div class="pricing-card-header">
						<img src="lib/images/price_free.png" alt="free" height="50px">
						<div class="pricing-texts">
							<h5>Free</h5>
							<p class="price"><span
									style="font-size: 12px; margin-right: 4px; position: absolute; top: 48px; left: 105px;">$</span>0<span
									style="font-size: 10px; color: hsla(0, 0%, 100%, 0.8);">/month</span></p>
						</div>
					</div>
					<div class="list">
						<ul>
							<li>Free e-book for every class</li>
							<li>Materials update every day</li>
							<li>Free download material videos</li>
							<li>Unlock 5 material videos</li>
						</ul>
					</div>
					<button class="btn btn-current-package">Your Current Package</button>
				</div>

				<div class="pricing-card">
					<div class="pricing-card-header">
						<img src="lib/images/price_express.png" alt="express" height="50px">
						<div class="pricing-texts">
							<h5>Express</h5>
							<p class="price"><span
									style="font-size: 12px; margin-right: 4px; position: absolute; top: 48px; left: 105px;">$</span>12<span
									style="font-size: 10px; color: hsla(0, 0%, 100%, 0.8);">/month</span></p>
						</div>
					</div>
					<div class="list">
						<ul>
							<li>Free e-book for every class</li>
							<li>Materials update every day</li>
							<li>Free download material videos</li>
							<li>Unlock 5 material videos</li>
							<li>Meeting 2 times a week</li>
						</ul>
					</div>
					<button class="btn btn-buy">Buy Express</button>
				</div>

				<div class="pricing-card">
					<div class="pricing-card-header">
						<img src="lib/images/price_premium.png" alt="premium" height="50px">
						<div class="pricing-texts">
							<h5>Premium</h5>
							<p class="price"><span
									style="font-size: 12px; margin-right: 4px; position: absolute; top: 48px; left: 105px;">$</span>111<span
									style="font-size: 10px; color: hsla(0, 0%, 100%, 0.8);">/month</span></p>
						</div>
					</div>
					<div class="list">
						<ul>
							<li>Free e-book for every class</li>
							<li>Materials update every day</li>
							<li>Free download material videos</li>
							<li>Unlock 30 material videos</li>
							<li>Private chat with mentor</li>
							<li>Meeting 3 times a week</li>
							<li>Unlimited saved class</li>
						</ul>
					</div>
					<button class="btn btn-buy">Buy Premium</button>
				</div>
			</div>
		</section>

		<!----GET APP---->
		<section class="get-app" id="application">
			<div class="get-app-container">
				<div class="get-app-texts">
					<h2>Get Our Apps, Now!</h2>
					<p>Reach out our apps everywhere and everytime with Sinauw Mobile Application.</p>
				</div>
				<div class="get-app-marketplaces">
					<img src="lib/images/google-play.png" alt="google-app" height="72px">
					<img src="lib/images/app-store.png" alt="app-store" height="50px">
				</div>
				<div class="application-view">
					<div class="users">
						<img src="lib/images/get_app_pic1.png" alt="user-pic1"
							style="position: relative; left: 350px; top: -190px;">
						<img src="lib/images/get_app_pic2.png" alt="user-pic2" style="position: relative;left: 310px;top: -75px;">
						<img src="lib/images/get_app_pic3.png" alt="user-pic3"
							style="position: relative;left: 575px;top: -25px; z-index: 1;">
					</div>
					<div class="application-progress" style="margin: 40px 0;">
						<div class="get-app-piechart">
							<img src="lib/images/get_app_piechart.png" alt="piechart"
								style="position: relative	; bottom: 25px; width:102px; left: 26px;">
							<p style="position: relative; top: -20px; padding: 0 13px; font-size: 12px; color: #fff; font-size: 400;">
								Courses Progress <span style="margin-left: 15px;">></span></p>
						</div>
						<div class="get-app-laptop">
							<img src="lib/images/get_app_laptop.png" alt="laptop"
								style="position: relative	; bottom: 20px; width:102px; left: 26px;">
							<p style="position: relative; top: -10px; padding: 0 15px; font-size: 12px; color: #fff; font-size: 400;">
								Class Collections<span style="margin-left: 15px;">></span></p>
						</div>
					</div>
					<div class="application-mobile">
						<div class="application-user">
							<img src="lib/images/get_app_user.svg" alt="user" class="user" height="27.54" width="19.65">
							<div class="user-text">
								<h5>Hello, Alexandr</h5>
								<h6>Premium Member</h6>
							</div>
							<img src="lib/images/get_app_premium.svg" alt="premium" width="23px">
						</div>
						<div class="skill-section">
							<img src="lib/images/get_app_lamp.svg" alt="lamp">
							<div class="skill-section-texts">
								<h5 style="font-size: 12px; color: #fff; width: 108px; margin-bottom: 7px;">Grow Your Skill, Join Now!
								</h5>
								<h6 style="font-size: 8px; color: rgba(255, 255, 255, 0.6);">We have something big for you who want to
									level up!</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	</main>

	<!--FOOTER-->
	<footer class="footer" id="footer">
		<div class="footer-container">
			<div class="footer-brand">
				<h3>Brain Academy</h3>
				<p>Any feedback or questions?</p>
				<p>Contact us on our social media</p>
				<div class="footer-socials">
					<a href="#"><i class='bx bxl-facebook' alt="Facebook"></i></a>
					<a href="#"><i class='bx bxl-twitter' alt="Twitter"></i></a>
					<a href="#"><i class='bx bxl-instagram' alt="Instagram"></i></a>
				</div>
			</div>

			<div class="footer-menu">
				<h4>Menu</h4>
				<ul>
					<li><a href="#"><button class="nav_btn">Home</button></a></li>
					<li><a href="#"><button class="nav_btn">Courses</button></a></li>
					<li><a href="#"><button class="nav_btn">Webinar</button></a></li>
					<li><a href="#"><button class="nav_btn">Dashboard</button></a></li>
				</ul>
			</div>

			<div class="footer-services">
				<h4>Services</h4>
				<ul>
					<li><a href="#"><button class="nav_btn">Materials Update</button></a></li>
					<li><a href="#"><button class="nav_btn">Trusted Mentor</button></a></li>
					<li><a href="#"><button class="nav_btn">Free E-book</button></a></li>
					<li><a href="#"><button class="nav_btn">Meeting</button></a></li>
				</ul>
			</div>

			<div class="footer-info">
				<h4>Further Information</h4>
				<ul>
					<li><a href="#"><button class="nav_btn">Terms & Conditions</button></a></li>
					<li><a href="#"><button class="nav_btn">Privacy Policy</button></a></li>
				</ul>
			</div>

			<div class="footer-apps">
				<h4>Apps Download</h4>
				<ul>
					<li><a href="#"><button class="nav_btn">Google Play Store</button></a></li>
					<li><a href="#"><button class="nav_btn">App Store</button></a></li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <span id="year"></span> Brain Academy. All rights reserved.</p>
		</div>

	</footer>

</body>

</html>