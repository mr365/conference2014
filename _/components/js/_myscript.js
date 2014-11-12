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
   
   //show tooltip
   	$("[data-toggle='tooltip']").tooltip({animation: true});
  
   	//show modals
   	$('.modalphotos img').on('click', function(){
   		$('#Mymodal').modal({ 
   			show: true
   			 })

   		var mysrc= this.src.substr(0,this.src.length-7)+".jpg";
   		$('#modalimage').attr('src', mysrc);
   		$('#modalimage').on('click', function(){
        $('#Mymodal').modal('hide')
      });
   	});

    // activate schedule tabs
        var hash = window.location.hash;
        hash && $('ul.nav a[href="'  + hash + '"]').tab('show');

   }); //jQuery  is loaded