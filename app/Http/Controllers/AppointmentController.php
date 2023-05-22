<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
  public function showAppointmentForm()
 {
     return view('appointment');
 }

 public function submitAppointmentForm(Request $request)
 {

   $selectedServices = implode(', ', $request->input('services'));


   // Perform validation on the form fields
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email',
           'message' => 'required',
           'subject' => 'string|max:255',
           'reservation_date' => 'required|date_format:Y-m-d',
           'reservation_time' => 'required|date_format:H:i',
           'services' => 'array',
           'services.*' => 'string',
       ]);
     // Handle the form submission logic, such as sending an email
     // or storing the contact information in the database


          $selectedServices = $request->input('services');

   $appointment = new Appointment();
   $appointment->name = Str::of($request->input('name'))->trim();
   $appointment->email = Str::of($request->input('email'))->trim();
   $appointment->message = Str::of($request->input('message'))->trim();
   $appointment->subject = Str::of($request->input('subject'))->trim();
   $appointment->reservation_date = Str::of($request->input('reservation_date'))->trim();
   $appointment->reservation_time = Str::of($request->input('reservation_time'))->trim();
   $appointment->services = json_encode($selectedServices);
    $appointment->updated_at = now();


   // Save the appointment record to the database
   $appointment->save();

      return response()->json(['type' => 'success', 'message' => 'Thank you for making an Appointment! We will get back to you shortly!']);
 }

 public function showSuccessPage()
 {
     return view('appointment.success');
 }
}
