$(document).ready(function() {
    
	$(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
			$('.ir-arriba').fadeIn(200);
		} else {
			$('.ir-arriba').fadeOut(200);
        }
    });
    
	$('.ir-arriba').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    })
});