<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HostipalController;
use App\Http\Controllers\HostipalStaffController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\PoliceStaffController;
use App\Http\Controllers\PoliceStationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrayerPlaceController;
use App\Http\Controllers\PrayerStaffController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolStaffController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CampeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/contact-create', [ContactController::class, 'create'])->name('contact.create');
    Route::get('/contact-store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/service', [ServiceController::class, 'service'])->name('service');
    Route::get('/donation', [DonationController::class, 'donation'])->name('donation');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');

    Route::get('profile', [UserController::class, 'index'])->name('index');
    // Route::get('profile', [UserController::class, 'updateUserDetails'])->name('update');
    // Route::get('profile', [App\Http\Controllers\UserController::class, 'updateUserDetails'])->name('profile.update');






    //admin dashboard all route start
    Route::get('/admin', [adminController::class, 'admin'])->name('admin');

    Route::resource('feedback', FeedbackController::class);

    Route::resource('people', PeopleController::class);
    Route::get('/people-trash', [PeopleController::class, 'trash'])->name('people.trash');
    Route::get('/people-restore/{id}/restore', [PeopleController::class, 'restore'])->name('people.restore');
    Route::delete('/people-restore/{id}/delete', [PeopleController::class, 'delete'])->name('people.delete');


    Route::resource('campes', CampeController::class);
    Route::get('/campes-trash', [CampeController::class, 'trash'])->name('campes.trash');
    Route::get('/campes-restore/{id}/restore', [CampeController::class, 'restore'])->name('campes.restore');
    Route::delete('/campes-restore/{id}/delete', [CampeController::class, 'delete'])->name('campes.delete');



    Route::resource('police', PoliceStaffController::class);
    Route::get('/police-trash', [PoliceStaffController::class, 'trash'])->name('police.trash');
    Route::get('/police-restore/{id}/restore', [PoliceStaffController::class, 'restore'])->name('police.restore');
    Route::delete('/police-restore/{id}/delete', [PoliceStaffController::class, 'delete'])->name('police.delete');



    Route::resource('policeStation', PoliceStationController::class);
    Route::get('/policeStation-trash', [PoliceStationController::class, 'trash'])->name('policeStation.trash');
    Route::get('/policeStation-restore/{id}/restore', [PoliceStationController::class, 'restore'])->name('policeStation.restore');
    Route::delete('/policeStation-restore/{id}/delete', [PoliceStationController::class, 'delete'])->name('policeStation.delete');

    Route::resource('hospital', HostipalController::class);
    Route::get('/hospital-trash', [HostipalController::class, 'trash'])->name('hospital.trash');
    Route::get('/hospital-restore/{id}/restore', [HostipalController::class, 'restore'])->name('hospital.restore');
    Route::delete('/hospital-restore/{id}/delete', [HostipalController::class, 'delete'])->name('hospital.delete');

    Route::resource('hospitalStaff', HostipalStaffController::class);
    Route::get('/hospitalStaff-trash', [HostipalStaffController::class, 'trash'])->name('hospitalStaff.trash');
    Route::get('/hospitalStaff-restore/{id}/restore', [HostipalStaffController::class, 'restore'])->name('hospitalStaff.restore');
    Route::delete('/hospitalStaff-restore/{id}/delete', [HostipalStaffController::class, 'delete'])->name('hospitalStaff.delete');


    Route::resource('prayerPlace', PrayerPlaceController::class);
    Route::get('/prayerPlace-trash', [PrayerPlaceController::class, 'trash'])->name('prayerPlace.trash');
    Route::get('/prayerPlace-restore/{id}/restore', [PrayerPlaceController::class, 'restore'])->name('prayerPlace.restore');
    Route::delete('/prayerPlace-restore/{id}/delete', [PrayerPlaceController::class, 'delete'])->name('prayerPlace.delete');


    Route::resource('prayerStaff', PrayerStaffController::class);
    Route::get('/prayerStaff-trash', [PrayerStaffController::class, 'trash'])->name('prayerStaff.trash');
    Route::get('/prayerStaff-restore/{id}/restore', [PrayerStaffController::class, 'restore'])->name('prayerStaff.restore');
    Route::delete('/prayerStaff-restore/{id}/delete', [PrayerStaffController::class, 'delete'])->name('prayerStaff.delete');


    Route::resource('school', SchoolController::class);
    Route::get('/school-trash', [SchoolController::class, 'trash'])->name('school.trash');
    Route::get('/school-restore/{id}/restore', [SchoolController::class, 'restore'])->name('school.restore');
    Route::delete('/school-restore/{id}/delete', [SchoolController::class, 'delete'])->name('school.delete');

    Route::resource('schoolStaff', SchoolStaffController::class);
    Route::get('/schoolStaff-trash', [SchoolStaffController::class, 'trash'])->name('schoolStaff.trash');
    Route::get('/schoolStaff-restore/{id}/restore', [SchoolStaffController::class, 'restore'])->name('schoolStaff.restore');
    Route::delete('/schoolStaff-restore/{id}/delete', [SchoolStaffController::class, 'delete'])->name('schoolStaff.delete');


    Route::resource('post', PostController::class);
    Route::get('/post-trash', [PostController::class, 'trash'])->name('trash');
    Route::get('/post-restore/{id}/restore', [PostController::class, 'restore'])->name('restore');

    Route::delete('/post-restore/{id}/delete', [PostController::class, 'delete'])->name('delete');


    Route::get('/roles', [RoleController::class, 'index'])->name('role');
    Route::get('/roles/{id}', [RoleController::class, 'show'])->name('show');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::get('/roles/{id}/update', [RoleController::class, 'update'])->name('update');
    Route::get('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';