jQuery('.PersonalCoachingWorkshop').click(function () {
    setTimeout(function () {

      console.log('wow');
    }, 10000);
    var tabId = window.location.hash;

    jQuery("#PersonalCoachingWorkshop-tab").find('a[href=' + tabId + ']').tab('show');

});


// For controlling the form logic
var isOnForm1 = true;
var form1 = jQuery('.form1');
var form2 = jQuery('.form2');
jQuery('#btn-next').live('click', function() {
  if (isOnForm1) {
    form1.addClass("inactive");
    form2.removeClass("inactive");
    isOnForm1 = false;
  } else {
    form1.removeClass("inactive");
    form2.addClass("inactive");
    isOnForm1 = true;
  }
});


//  For controlling the height of the forms
// TODO: Make forms dynamic using array
jQuery(document).ready(function() {
  var form1, form2, largest;
  form1 = jQuery('.form1').outerHeight() + 50;
  form2 = jQuery('.form2').outerHeight() + 50;
  largest = Math.max.apply(null, [form1, form2]);

  jQuery('.forms').css('height', largest + 'px');
});

// For controlling the click function of the navbar menu
jQuery('#nav-icon3').click(function() {
  jQuery('#nav-icon3').toggleClass('open');
});
