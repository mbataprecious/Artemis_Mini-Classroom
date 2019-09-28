
<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Artemis Classroom App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/index.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
<<<<<<< HEAD
    <div class="container student">
        <main class="logon">
            <section class="login">
                <h1>WELCOME BACK! STUDENT</h1>
                <h1>Sign in to your account</h1>
                <button id="teacher_signin" class="btn">Sign in as a Teacher</button>
                <form action="" method="">
                    <!--<h1>Sign up</h1>-->
                    <label class="form-label" for="email">Email:</label>
                    <p><input class="form-input" id="email" name="email" type="email" placeholder="example@xyz.com" required /></p>
                    <!--                input 1-->
                    <label for="password">Password:</label>
                    <p><input id="password" name="password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                    <!--                input 1-->
                    <input type="submit" class="btn" value="Login">
                    <p class="message"> Don't have an account? <a href="#" id="show_register">sign up here</a></p>
                </form>
            </section>
            <section class="signup">
                <h1>Sign up to get Started</h1>
                <button id="teacher_signin">Sign in as a Teacher</button>
                <form action="" method="">
                    <!--<h1>Sign up</h1>-->
                    <!--                input 1-->
                    <label for="firstname">First Name</label>
                    <p><input id="firstname" name="firstname" type="text" placeholder="First Name" required /></p>
                    <!--                input 1-->
                    <label for="lastname">Last Name:</label>
                    <p><input id="lastname" name="lastname" type="text" placeholder="lastname" required /></p>
                    <!--                input 1-->
                    <label for="email">Email:</label>
                    <p><input id="email" name="email" type="email" placeholder="example@xyz.com" required /></p>
                    <!--                input 1-->
                    <label for="gender"></label>Gender:
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female">Female
                    <!--                input 1-->
                    <!--                input 1-->
                    <label for="password">Password:</label>
                    <p><input id="password" name="password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                    <!--                input 1-->
                    <label for="confirm_password">Confirm Password:</label>
                    <p><input id="confirm_password" name="confirm_password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                    <!--                input 1-->
                    <input type="submit" value="Create Account">
                    <p class="message">Already have an account? <a href="#" id="show_login">Log in</a></p>
                </form>
            </section>

=======
	<div class="welcome-banner">
		<!-- <div class="container-fluid"> -->
			<header class="welcome-header">
				<div class="logo-container">
					<span class="nav-icon"><img src="img/nav.png" alt="nav icon"></span>
					<span class="logo"><img src="img/logo.png" alt="Artemis classroom logo"></span>
>>>>>>> functional

				</div>

				<div class="nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="signin.php?role=teacher">Teacher</a></li>
						<li><a href="signin.php?role=student">Student</a></li>
					</ul>
				</div>
			</header>

			<div class="welcome-banner-content">
				<div class="text">
					<h2>WELCOME</h2>
					<p class="desc">Artemis Mini classroom is an open source platform that seeks to connect teaches and students from various part of the world. We immerse students in a dynamic learning environment where classes are taught with an intention to help students reach their goals and pursue their dream. We believe we can improve  the lives of others through learning!</p>

<<<<<<< HEAD
        <div class="container ">
            <main class="logon">
                <section class="login">
                    <h1> WELCOME BACK! TEACHER</h1>
                    <h1>Sign in to your account</h1>
                    <button id="student_signin" class="btn">Sign in as a Student</button>
                    <form action="" method="">
                        <!--<h1>Sign up</h1>-->
                        <label for="email">Email</label>
                        <p><input id="email" name="email" type="email" placeholder="example@xyz.com" required /></p>
                        <!--                input 1-->
                        <label for="password">Password</label>
                        <p><input id="password" name="password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                        <!--                input 1-->
                        <input type="submit" class="btn" value="Login">
                        <p class="message"> Don't have an account? <a href="#" id="show_register">sign up here</a></p>
                    </form>
                </section>
                <section class="signup">
                    <h1>Sign up to get Started</h1>
                    <button id="Student_signin">Sign in as a Student</button>
                    <form action="" method="">
                        <!--<h1>Sign up</h1>-->
                        <!--                input 1-->
                        <label for="firstname">First Name</label>
                        <p><input id="firstname" name="firstname" type="text" placeholder="First Name" required /></p>
                        <!--                input 1-->
                        <label for="lastname">Last Name</label>
                        <p><input id="lastname" name="lastname" type="text" placeholder="lastname" required /></p>
                        <!--                input 1-->
                        <label for="email">Email</label>
                        <p><input id="email" name="email" type="email" placeholder="example@xyz.com" required /></p>
                        <!--                input 1-->
                        <label for="gender"></label>Gender:
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female">Female
                        <!--                input 1-->
                        <!--                input 1-->
                        <label for="password">Password</label>
                        <p><input id="password" name="password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                        <!--                input 1-->
                        <label for="confirm_password">Confirm Password</label>
                        <p><input id="confirm_password" name="confirm_password" type="password" placeholder="minimum of 8 characters" pattern=".{8,}" required /></p>
                        <!--                input 1-->
                        <input type="submit" class="btn" value="Create Account">
                        <p class="message">Already have an account? <a href="#" id="show_login">Log in</a></p>
                    </form>
                </section>
=======
					<a href="signin.php?role=student" class="w-btn">GET STARTED</a>
				</div>
>>>>>>> functional

				<div class="w-b-img">
					<img src="img/1.png" alt="artemis classroom">
				</div>
			</div>

			<div class="w-banner-vector"></div>
<!-- 			<div class="w-banner-vector3"></div> -->
		<!-- </div> -->
	</div>

	<script type="text/javascript">
		const nav = document.querySelector('.nav')

		var showNav;
		document.querySelector('.nav-icon').addEventListener('click',() =>{
			if(showNav){
				nav.style.left="-100%"
				showNav = false;
			}else{
				nav.style.left="0%"
				showNav = true;
			}
			
		} )
		
	</script>
</body>
</html>