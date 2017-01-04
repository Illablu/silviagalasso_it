// mobile menu slide from the left
$('[data-toggle="slide-collapse"]').on('click', function(event) {
	event.stopPropagation();
    $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({'width':'toggle', 'opacity' : 'toggle'}, 350);
})
$('body').on('click', function(event) {
    $navMenuCont = $($('[data-toggle="slide-collapse"]').data('target'));
    $navMenuCont.animate({'width':'hide', 'opacity' : 'toggle'}, 350);
});