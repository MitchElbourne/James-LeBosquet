class OnlineBookingEnquiry {
  constructor() {
    this.form1 = jQuery('.form1');
    this.form2 = jQuery('.form2');
    this.course = jQuery('.your-course');
    this.isOnForm1 = true;
    this.events();
  }
  //Events
  events () {
    jQuery('.buttons #btn-next').click(this.onClick.bind(this));
    jQuery(this.course).on('change', 'select', this.onChange);
  }
  //Methods
  onClick() {
    if (this.isOnForm1) {
      this.form1.addClass("inactive");
      this.form2.removeClass("inactive");
      this.isOnForm1 = false;
    } else if (!this.isOnForm1) {
      this.form1.removeClass("inactive");
      this.form2.addClass("inactive");
      this.isOnForm1 = true;
    }
  }
  onChange() {
    jQuery('select option:first').css('opacity: 0.5');
  }
}

class MenuIcon {
  constructor() {
    this.events();
  }
  events() {
    jQuery('#nav-icon3').click(this.onClick);
  }

  onClick() {
    jQuery('#nav-icon3').toggleClass('open');
  }
}

var onlinebookingenquiry = new OnlineBookingEnquiry();
var menuicon = new MenuIcon();
