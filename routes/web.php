<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Route;

use App\Mail\ReservePaymentConfirmedMail;
use App\Mail\ReserveAdminPaymentNotificationMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/reserve', [ReserveController::class, 'create'])->name('reserve');
    Route::post('/reserve', [ReserveController::class, 'store']);
    // ---------------------------
    // RESERVATION PAYMENT
    // ---------------------------
    Route::post('/reserve/create-checkout-session', [ReserveController::class, 'createSession']);
    Route::get('/reserve/return', [ReserveController::class, 'return'])->name('reserve.return');


    Route::get('/test-mail', function () {

        $reserve = App\Models\Reserve::where('id', 4)->first();

        // Enviar usando la cola (recomendado con Mailpit)
        //Mail::to($reserve->email)->queue(new ReservePaymentConfirmedMail($reserve));
        //Mail::to(config('mail.admin_address'))->queue(new ReserveAdminPaymentNotificationMail($reserve));

        // Renderizar para ver en pantalla
        return (new ReserveAdminPaymentNotificationMail($reserve))->render();
    });


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/billing', [ProfileController::class, 'billing'])->name('profile.billing');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/update_email', [ProfileController::class, 'updateEmail'])->name('profile.updateEmail');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('role:super_admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/{id}/json', [UserController::class, 'showJson'])->name('users.show.json');
        Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
    });

    // ---------------------------
    // EVENTS
    // ---------------------------

    // Todos los usuarios autenticados (registered, admin, super) → pueden ver y reservar
    Route::get('/events/show_all', [EventController::class, 'show_all'])->name('events.show_all');
    Route::post('/events/reserve', [EventController::class, 'reserve'])->name('events.reserve');
    Route::get('/events/{id}/json', [EventController::class, 'showJson'])->name('events.show.json');

    // Solo administrator y super_admin
    Route::middleware('role:administrator,super_admin')->group(function () {
        Route::get('/reserve/list', [ReserveController::class, 'index'])->name('reserve.index');
        Route::get('/events', [EventController::class, 'index'])->name('events.index');
        Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/events', [EventController::class, 'store'])->name('events.store');
        Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
    });

    // ---------------------------
    // SUBSCRIPTION & BILLING
    // ---------------------------
    Route::get('/subscription/pricing', [SubscriptionController::class, 'pricing'])->name('subscription.pricing');
    Route::post('/subscription/create-checkout-session', [SubscriptionController::class, 'createSession']);
    Route::get('/subscription/return', [SubscriptionController::class, 'return'])->name('subscription.return');

});

require __DIR__.'/auth.php';
