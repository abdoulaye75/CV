$(document).ready(function() {
	function onScrollevent(element, more_offset = 0) {
		let on_scroll = function() {
			if ($(window).scrollTop() > element.offset().top - more_offset) {
				element.animate({opacity: 1}, 700);
			}
		}
		$(window).scroll(on_scroll);
		on_scroll;
	}

	onScrollevent($("#profile"), 200);
	onScrollevent($("#cv"), 200);
	onScrollevent($("#timeline"), 200);
	onScrollevent($("#degree"), 200);
	onScrollevent($("#portfolio"), 200);
	onScrollevent($("#form"), 200);
});