define(function(require,exports){
	$('.headerSlidown').hover(function(){
		$(this).addClass('active');
		$(this).find('ul').removeClass('undis');
	},function(){
		$(this).removeClass('active');
		$(this).find('ul').addClass('undis');
	})
})