class OnlineBookingEnquiry {
  constructor() {
    this.form1 = jQuery('.form1');
    this.form2 = jQuery('.form2');
    this.isOnForm1 = true;
    this.events();
  }
  //Events
  events () {
    jQuery('.buttons #btn-next').click(this.onClick.bind(this));
  }
  //Methods
  onClick() {
    if (this.isOnForm1) {
      this.form1.addClass("inactive");
      this.form2.removeClass("inactive");
      jQuery('.buttons #btn-next').text("Back");
      console.log(this.form1);
      this.isOnForm1 = false;
    } else if (!this.isOnForm1) {
      this.form1.removeClass("inactive");
      this.form2.addClass("inactive");
      jQuery('.buttons #btn-next').text("Next");
      this.isOnForm1 = true;
    }

  }
}

var onlinebookingenquiry = new OnlineBookingEnquiry();