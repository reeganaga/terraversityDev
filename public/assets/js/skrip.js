// bigdropdownmenu
$(document).ready(function(){
    // $(".dropdown").hover(
    $(".mega-dropdown").click(
        function() {
            // $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideToggle("400");
            // $(this).toggleClass('open');
            $('.dropdown-menu', this).slideToggle("400");
            $(this).toggleClass('open');
        }
    );

    $(".dropdown-custom").click(
        function() {
            $('.dropdown-menu', this).slideToggle("400");
            $(this).toggleClass('open');
        }
    );

    $('.wpb-mobile-menu').slicknav({
	  prependTo: '.navbar-header',
	  parentTag: 'margo',
	  allowParentLinks: true,
	  duplicate: false,
	  label: '',
	  closedSymbol: '<i class="fa fa-angle-right"></i>',
	  openedSymbol: '<i class="fa fa-angle-down"></i>',
	});
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
