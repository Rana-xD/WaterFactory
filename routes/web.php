<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('350-ML', function () {
    return view('Product.Eng.350ML');
});
Route::get('500-ML', function () {
    return view('Product.Eng.500ML');
});
Route::get('15-L', function () {
    return view('Product.Eng.1_5L');
});
Route::get('20-L', function () {
    return view('Product.Eng.20L');
});


Route::get('mvv', function () {
    return view('Company.Eng.MVV');
});
Route::get('history', function () {
    return view('Company.Eng.History');
});
Route::get('formation', function () {
    return view('Company.Eng.Formation');
});
Route::get('factory', function () {
    return view('Company.Eng.Factory');
});
Route::get('jobopportunity', function () {
    return view('Company.Eng.JobOpportunity');
});
Route::get('pride', function () {
    return view('Company.Eng.Pride');
});


Route::get('event', function () {
    return view('News.Eng.Event');
});
Route::get('promotion', function () {
    return view('News.Eng.Promotion');
});
Route::get('commercial', function () {
    return view('News.Eng.Commercial');
});
Route::get('highlight', function () {
    return view('News.Eng.Highlight');
});



Route::get('benefit', function () {
    return view('Health.Eng.Benefit');
});
Route::get('consuming', function () {
    return view('Health.Eng.Consuming');
});
Route::get('pregnancy', function () {
    return view('Health.Eng.Pregnancy');
});
Route::get('tip-to-healthy-lifestyle', function () {
    return view('Health.Eng.TipTHLS');
});


Route::get('ongoing-contribute', function () {
    return view('GivingBack.Eng.OngoinCon');
});
Route::get('social-contribute', function () {
    return view('GivingBack.Eng.SocialCon');
});



Route::get('standard', function () {
    return view('Qualification.Eng.Standard');
});
Route::get('recognition', function () {
    return view('Qualification.Eng.Recognition');
});
Route::get('accreditation', function () {
    return view('Qualification.Eng.Accreditation');
});
Route::get('support', function () {
    return view('Qualification.Eng.Support');
});


Route::get('photos-gallery', function () {
    return view('Entertainment.Eng.Photo&Gallery');
});
Route::get('sound-media', function () {
    return view('Entertainment.Eng.Sound&Media');
});
Route::get('social-media', function () {
    return view('Entertainment.Eng.SocialMedia');
});
