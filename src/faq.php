<?php
session_start();
?>
<?php
include('header1.php');
?>

<nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
    <?php
        if(!isset($_SESSION['username'])){
            echo "   <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest</a>
            </li>"; 
        }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
            </li>";
        }

        
        if(!isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Login</a>
            </li>";
        }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='logout.php'>Logout</a>
            </li>";
        }
?>
</ul>
</nav>

<!DOCTYPE html>
<html>
<head>
	<title>Pearl Skin FAQ</title>
	<link rel="stylesheet" type="text/css" href="faq-style1.css">
	
	<style>
		.intro-text {
			white-space: nowrap;
			overflow: hidden;
		}
	</style>
	
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var introText = document.querySelector('.intro-text');
			var textWidth = introText.offsetWidth;
			var containerWidth = introText.parentNode.offsetWidth;
			var duration = textWidth / containerWidth * 10;
			introText.style.animationDuration = duration + 's';
		});
	</script>
</head>
<body>
	<div class="container">
		<h1>Pearl Skin FAQ</h1>
		<p class="intro-text">These are some of the most frequently asked questions from our customers:</p>

		<?php
		  include('../includes/connect.php'); 
		$faq = array(
			array(
				'question' => 'What is Pearl Skin?',
				'answer' => 'Pearl Skin is a beauty and skincare brand that offers a range of products designed to help you achieve healthy, glowing skin.',
			),
			array(
				'question' => 'What are the benefits of using Pearl Skin products?',
				'answer' => 'Our products are made with natural ingredients and are designed to nourish and rejuvenate your skin. They provide various benefits such as moisturizing, brightening, and improving skin texture.',
			),
			array(
				'question' => 'Are Pearl Skin products suitable for all skin types?',
				'answer' => 'Yes, Pearl Skin products are formulated to be suitable for all skin types, including sensitive skin. We take pride in creating products that are gentle and effective, catering to the diverse needs of our customers.',
			),
			array(
				'question' => 'Are Pearl Skin products tested on animals?',
				'answer' => 'No, we do not test our products on animals. We are committed to using cruelty-free ingredients and manufacturing processes. Our brand values animal welfare and ensures that our products are ethically produced.',
			),
			array(
				'question' => 'How do I use Pearl Skin products?',
				'answer' => 'Instructions for using Pearl Skin products are provided on the packaging. We recommend following the directions specific to each product to achieve optimal results. If you have any specific concerns or questions about product usage, feel free to reach out to our customer support team.',
			),
			array(
				'question' => 'Where can I purchase Pearl Skin products?',
				'answer' => 'Pearl Skin products can be purchased through our official website. We offer a convenient online shopping experience, allowing you to explore our product range and place orders easily.',
			),
			array(
				'question' => 'How do I use Pearl Skin products?',
				'answer' => 'Instructions for using Pearl Skin products are provided on the packaging. We recommend following the directions specific to each product to achieve optimal results. If you have any specific concerns or questions about product usage, feel free to reach out to our customer support team.',
			),
			array(
				'question' => 'Are Pearl Skin products made with natural ingredients?',
				'answer' => 'Yes, Pearl Skin products are formulated with a focus on using natural and organic ingredients. We believe in harnessing the power of nature to provide effective skincare solutions while minimizing the use of synthetic or harmful chemicals.',
			),
			
			// Add more FAQ items here
		);

		foreach ($faq as $item) {
			echo '<div class="faq">';
			echo '<div class="question">';
			echo '<h3>' . $item['question'] . '</h3>';
			echo '</div>';
			echo '<div class="answer">';
			echo '<p>' . $item['answer'] . '</p>';
			echo '</div>';
			echo '</div>';
		}
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			$ask = $_POST['ask'];
		
			$host = '127.0.0.1:3310';
			$user = 'root@localhost';
			$pass = '';
			$dbname = 'mystore';
		
			// $conn = mysqli_connect($host, $user, $pass, $dbname);
			// if (!$con) {
			// 	die("Lidhja me bazën e të dhënave dështoi: " . mysqli_connect_error());
			// }
		
			$sql = "INSERT INTO pytjet (name, email, city, ask) VALUES ('$name', '$email', '$city', '$ask')";
		
			mysqli_query($con,$sql);
		}
		?>
		<p class="intro-text">So if you are interested more you can ask us below!</p>
		
		
		<div class="ask">
	<h2>Ask your Question?</h2>
	<form action="#" method="POST">
		<input type="text" name="name" placeholder="Name" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="city" placeholder="City" required>
		<textarea name="ask" placeholder="Question..." required></textarea>
		<input type="submit" name="submit" value="Send">
	</form>
</div>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$ask = $_POST['ask'];

	
}
?>


		

	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="faq-script.js"></script>
</body>
</html>
