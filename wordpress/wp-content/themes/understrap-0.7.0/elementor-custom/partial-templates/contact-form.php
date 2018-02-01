<div class="row justify-content-center">
  <div class="col-md-9 contact-form-cell">
    <form name="sentMessage" id="contactForm" novalidate="">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Name *" id="name" required="" data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-6">
          <input type="email" class="form-control" placeholder="Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12">
          <input type="text" class="form-control" placeholder="Subject *" id="subject" required="" data-validation-required-message="Please enter the subject.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12">
          <textarea class="form-control" placeholder="Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-12 text-center">
          <div id="success"></div>
          <button type="submit" class="common-button">Send message</button>
        </div>
      </div>
    </form>
  </div>
</div>