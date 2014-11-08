$( function() {
	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#venuetravel a:contains('Venue')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
	// dropdown the menu automatically
   $('ul.nav li.dropdown').hover(function() {
   	$('.dropdown-menu', this).fadeIn();
  }, function(){
  	$('.dropdown-menu', this).fadeOut();
  });//hover

   	$("[data-toggle='tooltip']").tooltip({animation: true});

   }); //jQuery  is loaded