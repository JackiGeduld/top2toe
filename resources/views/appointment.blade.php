@extends('layout')
@section('title', ' Contact | Top2Toe - Unisex Salon')
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
@section('content')
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
                           <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.6112484046976!2d18.61681167652844!3d-33.87390831932478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc50a7b6d90ec1%3A0xc1b1a99612a7cf04!2sTop2Toe%20Unisex%20Hairsalon!5e0!3m2!1sen!2sza!4v1684533010645!5m2!1sen!2sza"  style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                          <p>Shop 10D Welgemoed Plaza,<br>Bakker St, Welgemoed, 7530</p>
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
                                          <p>Tue. – Fr.: 8am – 5pm<br>
                                             Sa.: 8am – 2pm<br>
                                             Su: Closed<br>
                                             Mo: Closed
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
                                          <p>+27 21 913 8243<br>
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
                           <h3 class="main">Make An Appointment</h3>
                           <p class="second">Book an appointment choosing our <a href="{{route('services')}}" target="_blank">services.</a> We will do our best to accomodate you!</p>
                           <!-- FORM : begin -->

                           <form class="lsvr-form lsvr-form--contact lsvr-form--ajax" action="{{ route('appointment.submit') }}" method="post">
                             @csrf
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

                              <!-- SUCCESS MESSAGE : begin -->
                              <!-- GRID : begin -->
                              <div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="name">Your Name*</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required"
                                          type="text" name="name" id="name">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="email">Your Email*</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--email lsvr-form__field-input--required"
                                          type="text" name="email" id="email">
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
                                       <label class="lsvr-form__field-label" for="phone">Your Phone</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text"
                                          type="text" name="phone" id="phone">
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p class="lsvr-form__field">
                                       <label class="lsvr-form__field-label" for="subject">Subject</label>
                                       <input class="lsvr-form__field-input lsvr-form__field-input--text"
                                          type="text" name="subject" id="subject">
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
                                       <label for="reservation_date">Preferred Date</label>
                                       <span class="wpcf7-form-control-wrap" data-name="reservation_date">
                                       <input type="date" name="reservation_date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" id="contact-reservation-date" aria-invalid="false" />
                                       </span>
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                                 <!-- GRID COL : begin -->
                                 <div class="lsvr-grid__col">
                                    <p>
                                       <label for="reservation_time">Preferred Time</label>
                                       <span class="wpcf7-form-control-wrap" data-name="reservation_time">
                                          <select name="reservation_time" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
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
                                             <option value="16:00">16:00</option>
                                             <option value="17:00">17:00</option>
                                          </select>
                                       </span>
                                    </p>
                                 </div>
                                 <!-- GRID COL : end -->
                              </div>
                              <!-- GRID : end -->
                              <p>
                                <label for="services">What Services Are You Interested In</label>
    <span class="wpcf7-form-control-wrap" data-name="services">
      <span class="wpcf7-form-control wpcf7-checkbox">
        <span class="wpcf7-list-item first">
          <label>
            <input type="checkbox" name="services[]" value="Facials">
            <span class="wpcf7-list-item-label">Facials</span>
          </label>
        </span>
        <span class="wpcf7-list-item">
          <label>
            <input type="checkbox" name="services[]" value="Eyebrow &amp; Eyelashes">
            <span class="wpcf7-list-item-label">Eyebrow &amp; Eyelashes</span>
          </label>
        </span>
        <span class="wpcf7-list-item">
          <label>
            <input type="checkbox" name="services[]" value="Wash">
            <span class="wpcf7-list-item-label">Wash</span>
          </label>
        </span>
        <span class="wpcf7-list-item">
          <label>
            <input type="checkbox" name="services[]" value="Cut &amp; Finish">
            <span class="wpcf7-list-item-label">Cut &amp; Finish</span>
          </label>
        </span>
        <span class="wpcf7-list-item">
          <label>
            <input type="checkbox" name="services[]" value="Blow Dries">
            <span class="wpcf7-list-item-label">Blow Dries</span>
          </label>
        </span>
        <span class="wpcf7-list-item last">
          <label>
            <input type="checkbox" name="services[]" value="Hair Colouring">
            <span class="wpcf7-list-item-label">Hair Colouring</span>
          </label>
        </span>
      </span>
    </span>

                              </p>
                              <!-- FORM MESSAGE : begin -->
                              <p class="lsvr-form__field">
                                 <label class="lsvr-form__field-label" for="message">Message*</label>
                                 <textarea class="lsvr-form__field-input lsvr-form__field-input--textarea lsvr-form__field-input--required"
                                    name="message" id="message" cols="40" rows="10"></textarea>
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
