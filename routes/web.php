<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
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

Route::view("sitemap", "sitemap");

Route::view("contact-us", "contact");
Route::post("contact-us", [ContactUsController::class, "store"]);


# Routes for uploading and managing blogs
Route::middleware("guest:web")->group(function () {
    Route::get("dashboard/login", [LoginController::class, "view"])->name("login");
    Route::post("dashboard/login", [LoginController::class, "login"]);
});

Route::group(["middleware" => "auth", "prefix" => "dashboard"], function () {
    Route::post("logout", [LoginController::class, "logout"]);
    Route::post("register", [LoginController::class, "register"]);

    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
    Route::post("posts", [DashboardController::class, "store"]);
    Route::get("post/edit/{id}", [DashboardController::class, "edit"]);
    Route::patch("post/edit/{id}", [DashboardController::class, "update"]);
});