function cycleImages(){
    var $active = $('#background_cycler .active');
    var $next = ($('#background_cycler .active').next().length > 0) ? $('#background_cycler .active').next() : $('#background_cycler div:first');
    $next.css('z-index',2);//move the next image up the pile
    $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
    $next.css('z-index',3).addClass('active');//make the next image the top one
    });
}

$(window).load(function(){
    $('#background_cycler').fadeIn(1500);//fade the background back in once all the images are loaded
    // run every 7s
    setInterval('cycleImages()', 7000);
})

$(document).ready(function () {

    // Only enable 'back-to-top button' if the document has a long scroll bar
    // Note the window height + offset
    if (($(window).height() + 100) < $(document).height()) {
        $('#back-to-top').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: { top: 100 }
        });
    }
    

  // smooth scroll to anchor
//  $('a[href^="#"]').on('click', function (e) {
//    e.preventDefault();
//
//    var target = this.hash;
//    var $target = $(target);
//
//    $('html, body').stop().animate({
//      'scrollTop': $target.offset().top
//    }, 900, 'swing');
//  });


	/*** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		$('.autoheight').css('min-height', (height));
	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();
	
	/*******Smooth scroll***********/
	var height=$(".navbar.navbar-inverse").height();
	var scroll = $(window).scrollTop();
	if (scroll > height) {
		$(".navbar-hide").addClass("scroll-header");
	}
	
	smoothScroll.init({
        selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
        selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
		speed: 600, // Integer. How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		offset: 80, // Integer. How far to offset the scrolling anchor location in pixels
        updateURL: false, // Boolean. If true, update the URL hash on scroll
        callback: function ( anchor, toggle ) {} // Function to run after scrolling
	});
	
	$(window).scroll(function() {
		var height = $(window).height();
		var scroll = $(window).scrollTop();
		if (scroll) {
			$(".navbar").addClass("scroll-header");
		} else {
			 $(".navbar").removeClass("scroll-header");
		}
	
	});
    
    
	 /******* Nice Scroll *******/

	 $("html").niceScroll();
	 

});

document.createElement("section");

$('body').scrollspy({ 
    target: '#navbar',
    offset: $(window).height() * 0.2
})

// nav active class
$(".navbar a").on("click", function(){
   $(".navbar").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});


// Contact form
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#contactForm").removeClass().addClass('form-horizontal shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "text-center tada animated text-success";
    } else {
        var msgClasses = "text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}


//$('.enquire-modal').on('click', function () {
//  $('#enquire-modal').modal();
//});

/**
 * Vertically center Bootstrap 3 modals so they aren't always stuck at the top

$(function () {
  function reposition() {
    var modal = $(this),
        dialog = modal.find('.modal-dialog');
    modal.css('display', 'block');
    // Dividing by two centers the modal exactly, but dividing by three
    // or four works better for larger screens.
    dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
  }
  // Reposition when a modal is shown
  $('.modal').on('show.bs.modal', reposition);
  // Reposition when the window is resized
  $(window).on('resize', function () {
    $('.modal:visible').each(reposition);
  });
});
 */