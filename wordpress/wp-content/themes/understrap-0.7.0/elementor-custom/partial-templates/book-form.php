<div class="row justify-content-center">
  <div class="col-md-8 contact-form-cell">
    <form name="sentMessage" id="reservationForm" novalidate="">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Name *" id="name" required="" data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Phone *" id="phone" required="" data-validation-required-message="Please enter a contact phone number.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-6">
          <input type="email" class="form-control" placeholder="Number of guests *" id="email" required="" data-validation-required-message="Please enter the number of guests.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-6">
          <input type="datetime-local" class="form-control" placeholder="Date and Time *" id="subject" required="" data-validation-required-message="Please enter the date and time.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-12 text-center">
          <div id="success"></div>
          <button type="submit" class="common-button">Make a reservation</button>
        </div>
      </div>
    </form>
  </div>
</div>