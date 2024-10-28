<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [HomeController::class, 'index']);
/*
Route::get('/', function () {
    return view('admin.dashboard.index');
});
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});




/*
Route::get('/Portofolio', [HomeController::class, 'portofolio']);

Route::get('/Experience', [ExperienceController::class, 'experience']);
Route::get('/Skills', [SkillController::class, 'skill']);
Route::get('/Education', [EducationController::class, 'education']);
Route::get('/Certification', [CertificationController::class, 'certification']);
Route::get('/Contact', [ContactController::class, 'contact']);
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth'])->prefix('/admin')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Route untuk mengelola Certification
    Route::resource('certification', CertificationController::class)->names([
        'index' => 'admin.certification.index',
        'create' => 'admin.certification.create',
        'store' => 'admin.certification.store',
        'edit' => 'admin.certification.edit',
        'update' => 'admin.certification.update',
        'destroy' => 'admin.certification.destroy'
    ]);

    // Route untuk mengelola Contact
    Route::resource('contact', ContactController::class)->names([
        'index' => 'admin.contact.index',
        'create' => 'admin.contact.create',
        'store' => 'admin.contact.store',
        'edit' => 'admin.contact.edit',
        'update' => 'admin.contact.update',
        'destroy' => 'admin.contact.destroy'
    ]);

    // Route untuk mengelola Education
    Route::resource('education', EducationController::class)->names([
        'index' => 'admin.education.index',
        'create' => 'admin.education.create',
        'store' => 'admin.education.store',
        'edit' => 'admin.education.edit',
        'update' => 'admin.education.update',
        'destroy' => 'admin.education.destroy'
    ]);

    // Route untuk mengelola Experience
    Route::resource('experience', ExperienceController::class)->names([
        'index' => 'admin.experience.index',
        'create' => 'admin.experience.create',
        'store' => 'admin.experience.store',
        'edit' => 'admin.experience.edit',
        'update' => 'admin.experience.update',
        'destroy' => 'admin.experience.destroy'
    ]);

    // Route untuk mengelola Project
    Route::resource('project', ProjectController::class)->names([
        'index' => 'admin.project.index',
        'create' => 'admin.project.create',
        'store' => 'admin.project.store',
        'edit' => 'admin.project.edit',
        'update' => 'admin.project.update',
        'destroy' => 'admin.project.destroy'
    ]);

    // Route untuk mengelola Skill
    Route::resource('skill', SkillController::class)->names([
        'index' => 'admin.skill.index',
        'create' => 'admin.skill.create',
        'store' => 'admin.skill.store',
        'edit' => 'admin.skill.edit',
        'update' => 'admin.skill.update',
        'destroy' => 'admin.skill.destroy'
    ]);

    Route::resource('user', UserController::class)->names([
        'index' => 'admin.user.index',
        'create' => 'admin.user.create',
        'store' => 'admin.user.store',
        'edit' => 'admin.user.edit',
        'update' => 'admin.user.update',
        'destroy' => 'admin.user.destroy'
    ]);
});