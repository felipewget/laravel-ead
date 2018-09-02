const pageClassroom = {
	resize: function(){

		var width = $(window).width();
		var height = $(window).height();

		var width_vertical_menu = $('div[container-vertical-menu]');
		var width_content = $('div[container-content]');

		width_content.css('width', width - width_vertical_menu.width() + 'px');
		width_content.css('marginLeft', width_vertical_menu.width() + 'px');

	},
}

$(document).ready(function(){
	pageClassroom.resize();
});