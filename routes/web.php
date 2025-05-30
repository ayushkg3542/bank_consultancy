<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'home'])->name('home');
Route::post('/home', [HomeController::class, 'homesendMail'])->name('home.sendMail');

Route::get('/services/homeloan',[HomeController::class, 'homeloan'])->name('services.homeloan');
Route::get('/services/personalLoan',[HomeController::class, 'personalLoan'])->name('services.personalLoan');
Route::get('/services/againstProperty',[HomeController::class, 'againstProperty'])->name('services.againstProperty');
Route::get('/services/businessLoan',[HomeController::class, 'businessLoan'])->name('services.businessLoan');
Route::get('/services/capital',[HomeController::class, 'capital'])->name('services.capital');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.sendMail');

Route::get('/calculator/homeloanemi',[HomeController::class, 'homeloanemi'])->name('calculator.homeloan.emi');
Route::get('/calculator/personalLoanemi',[HomeController::class, 'personalloanemi'])->name('calculator.personalLoan.emi');
Route::get('/calculator/capitalemi',[HomeController::class, 'capitalemi'])->name('calculator.capital.emi');
Route::get('/calculator/businessLoanemi',[HomeController::class, 'businessLoanemi'])->name('calculator.businessLaon.emi');
Route::get('/calculator/propertyemi',[HomeController::class, 'propertyLoanemi'])->name('calculator.property.emi');

Route::get('/getStates', [ContactController::class, 'getStates'])->name('getStates');
Route::get('/getCities', [ContactController::class, 'getCities'])->name('getCities');


