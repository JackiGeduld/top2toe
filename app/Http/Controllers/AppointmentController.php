<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
  public function showAppointmentForm()
 {
     return view('appointment');
 }

 public function submitAppointmentForm(Request $request)
 {
     // Handle the form submission logic, such as sending an email
     // or storing the contact information in the database

     return redirect()->route('appointment');
 }

 public function showSuccessPage()
 {
     return view('contact.success');
 }
}
