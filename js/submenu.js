var app = {
	init : function(){
		app.displaySubmenu();
	},
	displaySubmenu : function () {
		$('.navul li').hover(
			function () { 
				$('ul', this).fadeIn();
			},
			function () { 
				$('ul', this).fadeOut();
			}
		);
	}
};

$(document).ready(
	function () {
		app.init();
	}
);