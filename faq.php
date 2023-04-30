<!DOCTYPE html>
<html>
<head>
	<title>Pearl Skin FAQ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		?>

<div class="ask">
  <h2>Ask me a question</h2>
  <form action="#" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="question" placeholder="Your question"></textarea>
    <button type="submit">Ask</button>
  </form>
</div>
	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</body>
</html>
