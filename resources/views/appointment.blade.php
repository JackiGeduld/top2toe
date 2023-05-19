@extends('layout')
@section('title', ' Contact | Top2Toe - Unisex Salon')
@section('content')
@section('styles')
    <style>
    #contact-reservation-date{
      padding: 11px 30px 11px 20px;!important;
    }
    span.wpcf7-list-item {
    margin: 0 15px 0 0;
}

.wpcf7-list-item {
    display: inline-block;
    margin: 0 0 0 1em;
}
.wpcf7-list-item input {
    margin-right: 5px;
}
    </style>
@endsection
<div id="core" class="core--narrow">
   <div class="core__inner">
      <!-- PAGE HEADER : begin -->
      <div class="page-header">
         <div class="page-header__inner">
            <div class="lsvr-container">
               <div class="page-header__content">
                  <h1 class="page-header__title">Contact</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- PAGE HEADER : end -->
      <!-- CORE COLUMNS : begin -->
      <div class="core__columns">
         <div class="core__columns-inner">
            <div class="lsvr-container">
               <!-- MAIN : begin -->
               <main id="main">
                  <div class="main__inner">
                     <!-- PAGE : begin -->
                     <div class="page contact-page">
                        <div class="page__content">
                           <!-- MAP : begin -->
                           <iframe src="https://maps.google.com/maps?q=34.090866,-118.388228&amp;z=15&amp;output=embed" class="google-map"></iframe>
                           <!-- MAP : begin -->
                           <!-- LSVR SPACER : begin -->
                           <hr class="lsvr-spacer" aria-hidden="true">
                           <!-- LSVR SPACER : end -->
                           <!-- GRID : begin -->
                           <div class="lsvr-grid lsvr-grid--3-cols lsvr-grid--sm-1-cols">
                              <!-- GRID COL : begin -->
                              <div class="lsvr-grid__col">
                                 <!-- LSVR FEATURE : begin -->
                                 <div class="lsvr-feature lsvr-feature--has-icon">
                                    <div class="lsvr-feature__inner">
                                       <span class="lsvr-feature__icon icon-map-marker" aria-hidden="true"></span>
                                       <h3 class="lsvr-feature__title">Our HQ</h3>
                                       <div class="lsvr-feature__text">
                                          <p>9015 Sunset Boulevard<br>Ca 90069</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- LSVR FEATURE : end -->
                              </div>
                              <!-- GRID COL : end -->
                              <!-- GRID COL : begin -->
                              <div class="lsvr-grid__col">
                                 <!-- LSVR FEATURE : begin -->
                                 <div class="lsvr-feature lsvr-feature--has-icon">
                                    <div class="lsvr-feature__inner">
                                       <span class="lsvr-feature__icon icon-clock-o" aria-hidden="true"></span>
                                       <h3 class="lsvr-feature__title">Opening Hours</h3>
                                       <div class="lsvr-feature__text">
                                          <p>Mo. – Fr.: 10am – 4pm<br>
                                             Sa.: 9am – 2pm<br>
                                             Su: Closed
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- LSVR FEATURE : end -->
                              </div>
                              <!-- GRID COL : end -->
                              <!-- GRID COL : begin -->
                              <div class="lsvr-grid__col">
                                 <!-- LSVR FEATURE : begin -->
                                 <div class="lsvr-feature lsvr-feature--has-icon">
                                    <div class="lsvr-feature__inner">
                                       <span class="lsvr-feature__icon icon-phone" aria-hidden="true"></span>
                                       <h3 class="lsvr-feature__title">Get In Touch</h3>
                                       <div class="lsvr-feature__text">
                                          <p>(123) 456 789<br>
                                             example@example.com
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- LSVR FEATURE : end -->
                              </div>
                              <!-- GRID COL : end -->
                           </div>
                           <!-- GRID : end -->
                           <!-- LSVR SEPARATOR : begin -->
                           <hr class="lsvr-separator" aria-hidden="true">
                           <!-- LSVR SEPARATOR : end -->
                           <h3>Make An Appointment</h3>
                           <p>This form uses a dummy email address. If you want to ask about the template, please use the <a href="https://themeforest.net/item/beautyspot-html-template-for-beauty-salons/7734629/comments" target="_blank">comments section</a> on item description page.</p>
                           <!-- FORM : begin -->
                           <form class="lsvr-form lsvr-form--contact lsvr-form--ajax" action="https://demo.lsvr.sk/html/beautyspot/php/contact-form.php" method="post">
                              <input type="hidden" name="contact-form" value="true">
                              <input class="lsvr-form__field-input-email" type="text" name="form-email"><!-- This is a honeypot field, please remove this comment -->
                              <!-- VALIDATION ERROR MESSAGE : begin -->
                              <div class="lsvr-form__message lsvr-form__message--validation-error lsvr-alert-message lsvr-alert-message--warning">
                                 <span class="lsvr-alert-message__icon" aria-hidden="true"></span>
                                 <p>Please make sure all required fields are filled out correctly.</p>
                              </div>
                              <!-- VALIDATION ERROR MESSAGE : begin -->
                              <!-- CONNECTION ERROR MESSAGE : begin -->
                              <div class="lsvr-form__message lsvr-form__message--connection-error lsvr-alert-message lsvr-alert-message--warning">
                                 <span class="lsvr-alert-message__icon" aria-hidden="true"></span>
                                 <p>There was a connection error.</p>
                              </div>
                              <!-- CONNECTION ERROR MESSAGE : begin -->
                              <!-- SUCCESS MESSAGE : begin -->
                              <div class="lsvr-form__message lsvr-form__message--success lsvr-alert-message lsvr-alert-message--success">
                                 <span class="lsvr-alert-message__icon" aria-hidden="true"></span>
                                 <p>Message sent successfully!</p>
                              </div>
                              <!-- SUCCESS MESSAGE : begin -->
                              <!-- GRID : begin -->
                              <div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="contact-name">Your Name*</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required"
                                          type="text" name="contact-name" id="contact-name">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="contact-email">Your Email*</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--email lsvr-form__field-input--required"
                                          type="text" name="contact-email" id="contact-email">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                              </div>
                              <!-- GRID : end -->
                              <!-- GRID : begin -->
                              <div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="contact-phone">Your Phone</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text"
                                          type="text" name="contact-phone" id="contact-phone">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="contact-subject">Subject</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text"
                                          type="text" name="contact-subject" id="contact-subject">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                              </div>
                              <!-- GRID : end -->
                              <!-- GRID : begin -->




                              <!-- GRID : end -->
                              <!-- GRID : begin -->
                              <div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p>
                                       <label for="contact-reservation-date">Preferred Date</label>
                                       <span class="wpcf7-form-control-wrap" data-name="contact-reservation-date">
                                         <input type="date" name="contact-reservation-date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" id="contact-reservation-date" aria-invalid="false" />
                                       </span>
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p>
                                       <label for="contact-reservation-time">Preferred Time</label>
                                       <span class="wpcf7-form-control-wrap" data-name="contact-reservation-time">
                                          <select name="contact-reservation-time" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                             <option value="9:00">9:00</option>
                                             <option value="9:30">9:30</option>
                                             <option value="10:00">10:00</option>
                                             <option value="10:30">10:30</option>
                                             <option value="11:00">11:00</option>
                                             <option value="11:30">11:30</option>
                                             <option value="12:00">12:00</option>
                                             <option value="12:30">12:30</option>
                                             <option value="13:00">13:00</option>
                                             <option value="13:30">13:30</option>
                                             <option value="14:00">14:00</option>
                                             <option value="14:30">14:30</option>
                                             <option value="15:00">15:00</option>
                                          </select>
                                       </span>
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                              </div>
                              <!-- GRID : end -->
                              <p>
<label for="contact-services">What Services Are You Interested In</label><span class="wpcf7-form-control-wrap" data-name="contact-services"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="contact-services[]" value="Facials"><span class="wpcf7-list-item-label">Facials</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="contact-services[]" value="Eyebrow &amp; Eyelashes"><span class="wpcf7-list-item-label">Eyebrow &amp; Eyelashes</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="contact-services[]" value="Wash"><span class="wpcf7-list-item-label">Wash</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="contact-services[]" value="Cut &amp; Finish"><span class="wpcf7-list-item-label">Cut &amp; Finish</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="contact-services[]" value="Blow Dries"><span class="wpcf7-list-item-label">Blow Dries</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="contact-services[]" value="Hair Colouring"><span class="wpcf7-list-item-label">Hair Colouring</span></label></span></span></span>
</p>
                              <!-- FORM MESSAGE : begin -->
                              <p class="lsvr-form__field">
                                 <label class="lsvr-form__field-label" for="contact-message">Message*</label>
                                 <textarea class="lsvr-form__field-input lsvr-form__field-input--textarea lsvr-form__field-input--required"
                                    name="contact-message" id="contact-message" cols="40" rows="10"></textarea>
                              </p>
                              <!-- FORM MESSAGE : end -->
                              <!-- FORM SUBMIT : begin -->
                              <p>
                                 <button class="lsvr-button lsvr-form__submit" type="submit" data-loading-label="Sending...">Submit</button>
                              </p>
                              <!-- FORM SUBMIT : end -->
                           </form>
                           <!-- FORM : end -->
                        </div>
                     </div>
                     <!-- PAGE : end -->
                  </div>
               </main>
               <!-- MAIN : end -->
            </div>
         </div>
      </div>
      <!-- CORE COLUMNS : end -->
   </div>
</div>
@endsection