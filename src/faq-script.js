$(document).ready(function() {
	$('.question').click(function() {
		$(this).next('.answer').slideToggle();
	});
	window.addEventListener('DOMContentLoaded', function() {
		var introText = document.querySelector('.intro-text');
		var textWidth = introText.offsetWidth;
		var containerWidth = introText.parentNode.offsetWidth;
		var duration = textWidth / containerWidth * 10;
		introText.style.animationDuration = duration + 's';
	});
});
