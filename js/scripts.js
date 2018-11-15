// For controlling the form size
var isOnForm1 = true;
var formleft = jQuery('.form1');
var formright = jQuery('.form2');
jQuery('#btn-next').live('click', function() {
  if (isOnForm1) {
    formleft.addClass("inactive");
    formright.removeClass("inactive");
    isOnForm1 = false;
  } else {
    formleft.removeClass("inactive");
    formright.addClass("inactive");
    isOnForm1 = true;
  }
});

//  For controlling the height of the forms
// TODO: Make forms dynamic using array
jQuery(document).ready(function() {
  var form1 = 0, form2 = 0, largest = 0;
  form1 = jQuery('.form1').outerHeight() + 80;
  form2 = jQuery('.form2').outerHeight() + 80;
  largest = Math.max.apply(null, [form1, form2]);
  jQuery('.forms').css('height', largest + 'px');
  console.log(form1 + " " + form2 + " " +largest);
});

// For controlling form heights on orientation change
jQuery(window).on("orientationchange", function() {
  var form1 = 0, form2 = 0, largest = 0;
  form1 = jQuery('.form1').outerHeight();
  form2 = jQuery('.form2').outerHeight();
  largest = Math.max.apply(null, [form1, form2]);
  jQuery('.forms').css('height', largest + 'px');
  console.log(form1 + " " + form2 + " " +largest);
});

// Controls the size of the forms after the buttons been clicked
var beenclicked = false;
jQuery('.submit').live("click", function () {
  setTimeout(function () {
    var form1 = 0, form2 = 0, largest = 0;
    var pixelCount;
    if (!beenclicked && jQuery('.wpcf7-not-valid-tip')) {
      pixelCount = 70;
    } else if (beenclicked) {
      pixelCount = 0;
    }
    form1 = jQuery('.form1').outerHeight() + pixelCount;
    form2 = jQuery('.form2').outerHeight() + pixelCount;
    largest = Math.max.apply(null, [form1, form2]);
    jQuery('.forms').css('height', largest + 'px');
    console.log(form1 + " " + form2 + " " +largest);
    beenclicked = true;
  }, 300);
});

// For controlling the click function of the navbar menu
var navbarOpen = false;
jQuery('#nav-icon3').click(function() {
  if (navbarOpen == false) {
    jQuery('#nav-icon3').addClass('open');
  } else {
    jQuery('#nav-icon3').removeClass('open');
  }
});

// Collapse navbar menu if clicked outside of the nav area
jQuery('body').bind('click', function(e) {
    if(jQuery(e.target).closest('.collapse').length == 0) {
        var opened = jQuery('.navbar-collapse').hasClass('show');
        if ( opened === true ) {
            jQuery('.navbar-collapse').collapse('hide');
            jQuery('#nav-icon3').removeClass('open');
        }
    }
});
