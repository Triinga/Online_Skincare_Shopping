

<!DOCTYPE html>
<html>
<head>
	<title>Pearl Skin FAQ</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('.faq .answer').hide(); // Fshih pergjigjet fillestare

		$('.faq .question').click(function() {
			var answer = $(this).next('.answer');
			answer.slideToggle(); // Shfaq/fshi pergjigjen kur klikohet mbi pyetjen

			// Fshij pergjigjet e tjera
			$('.faq .answer').not(answer).slideUp();

			return false; // Parandalo sjelljen e parazgjedhur dhe përhapjen e ngjarjes së klikimit
		});

		$('.faq .answer').click(function(event) {
			event.stopPropagation(); // Parandalo përhapjen e ngjarjes kur klikohet mbi pergjigjen
		});
	});
</script>



</head>
<body>
	<div class="container">
		<h1>Pearl Skin FAQ</h1>
		<?php
			$faq = array(
                array(
					'question' => 'What is a Pearl Skin?',
					'answer' => 'Pearl Skin is a beauty and skincare brand that offers a range of products designed to help you achieve healthy, glowing skin.'
				),
				array(
					'question' => 'What are the benefits of using Pearl Skin products?',
					'answer' => 'Our products are made with natural ingredients and are designed to nourish and rejuvenate your skin. They are free from harsh chemicals and synthetic fragrances, making them safe for all skin types.'
				),
				array(
					'question' => 'How do I use Pearl Skin products?',
					'answer' => 'Instructions for use are provided on the product packaging. Please read the instructions carefully before using our products.'
				),
                array(
					'question' => 'Are your products natural?',
					'answer' => 'Yes, all of our products are made with natural and organic ingredients and are free from harmful chemicals.'
				),
				array(
					'question' => 'Are your products tested on animals?',
					'answer' => 'No, we do not test our products on animals. We are committed to using only cruelty-free ingredients and manufacturing processes.'
				),
				array(
					'question' => 'Can I use Pearl Skin products if I have sensitive skin?',
					'answer' => 'Yes, our products are formulated to be gentle and safe for all skin types, including sensitive skin.'
				),
				array(
					'question' => 'Do you offer international shipping?',
					'answer' => 'Yes, we offer international shipping to most countries. Please check our shipping policy for more information.'
                ),
                array(
					'question' => 'Do you offer free shipping?',
					'answer' => 'Yes, we offer free shipping on all orders over $50.'
				)
			);

			foreach ($faq as $item) {
				echo '<div class="faq">';
				echo '<div class="question">' . $item['question'] . '</div>';
				echo '<div class="answer">' . $item['answer'] . '</div>';
				echo '</div>';
			}

			
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $ask = $_POST['ask'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'ueb_projekt';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Lidhja me bazën e të dhënave dështoi: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO pytjet (name, email, city, ask) VALUES ('$name', '$email', '$city', '$ask')";

    mysqli_query($conn,$sql);
}
?>

<div class="ask">
  <h2>Ask your Question</h2>
</div>

<form action="#" method="POST">
    <input type="text" name="name" placeholder="Emri"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="city" placeholder="Qyteti"><br>
    <input type="text" name="ask" placeholder="Pyetje"><br>
    <input type="submit" name="submit" value="Dërgo">
</form>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</body>
</html>
