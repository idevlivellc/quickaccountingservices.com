<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactUsController;

Route::get('/', function () {
    return view('index');
});

Route::view("about-us", "about");
Route::view("about-us/our-firm", "about/firm");
Route::view("about-us/our-team", "about/team");
Route::view("about-us/why-choose-us", "about/whyus");

Route::view("services", "services");
Route::view("services/bookkeeping-services", "services/bookkeeping");
Route::view("services/accounting-services", "services/accounting");
Route::view("services/quickbooks-setup-and-consultation", "services/qbconsultation");
Route::view("services/quickbooks-bookkeeping", "services/qbbookkeeping");

Route::view("pricing", "pricing");
Route::view("pricing/bookkeeping-services", "pricing/bookkeeping");
Route::view("pricing/accounting-services", "pricing/accounting");
Route::view("pricing/quickbooks-setup-and-consultation", "pricing/qbconsultation");
Route::view("pricing/quickbooks-bookkeeping", "pricing/qbbookkeeping");

Route::view("resources", "resources");
Route::view("resources/blog", "resources/blog");
Route::view("resources/faq", "resources/faq");

Route::view("terms-of-service", "terms");
Route::view("privacy-policy", "privacy");
Route::view("refund-policy", "refund");

Route::view("contact-us", "contact");
Route::post("contact-us", [ContactUsController::class, "store"]);
