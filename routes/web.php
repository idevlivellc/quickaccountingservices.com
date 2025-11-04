<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    $posts = Post::orderBy("id", "desc")->get()->take(3);
    return view('index', ["posts" => $posts]);
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

Route::get("resources/blog", [PostController::class, "index"]);
Route::get("resources/blog/{url}", [PostController::class, "show"]);

Route::view("resources/faq", "resources/faq");

Route::view("terms-of-service", "terms");
Route::view("privacy-policy", "privacy");
Route::view("refund-policy", "refund");

Route::view("contact-us", "contact");
Route::post("contact-us", [ContactUsController::class, "store"]);


# Routes for uploading and managing blogs
Route::view("admin/login", "admin/login")->name("login");
Route::post("admin/login", [UserController::class, "login"]);

Route::group(["middleware" => "auth", "prefix" => "admin"], function () {
    Route::get("blogs", [PostController::class, "index"]);
});
