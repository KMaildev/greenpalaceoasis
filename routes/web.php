<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('admin', 'HomeController@admin')->name('admin');
Route::resource('contact', 'ContactController');
Route::resource('news', 'NewsController');
Route::resource('cv', 'CvController');
Route::resource('employer', 'EmployerController');
Route::resource('activities', 'ActivitiesController');
Route::resource('team', 'TeamController');
Route::resource('partners', 'PartnersController');
Route::resource('statement', 'CompanyStatementController');
Route::resource('about', 'AboutController');
Route::resource('director_message', 'DirectorMessageController');
Route::resource('process_chart', 'ProcessChartController');
Route::resource('company_brochure', 'CompanyBrochureController');
Route::resource('organization', 'OrganizationChartController');
Route::resource('milestones', 'MilestonesController');
Route::resource('recruitment_services', 'RecruitmentServicesController');
Route::resource('country', 'CountryController');
Route::resource('csr', 'CsrController');

Route::resource('language', 'LanguageController');
Route::get('set_jp', 'LanguageController@setJP')->name('set_jp');
Route::get('set_mm', 'LanguageController@setMM')->name('set_mm');

