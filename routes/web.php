<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/', [AdminController::class, 'home']);


//admin
route::get('/home',[AdminController::class, 'index'])->name('home');
route::get('/create_room',[AdminController::class, 'create_room']);
route::post('/add_room',[AdminController::class, 'add_room']);
route::get('/view_room',[AdminController::class, 'view_room']);
route::get('delete_room/{id}',[AdminController::class,'delete_room']);
route::get('update_room/{id}',[AdminController::class,'update_room']);
route::post('edit_room/{id}',[AdminController::class,'edit_room']);
route::get('room_search',[AdminController::class,'room_search']);
route::get('/room_details/{id}',[HomeController::class,'room_details']);

route::post('/add_booking/{id}',[HomeController::class,'add_booking']);


route::get('/bookings',[AdminController::class, 'bookings']);
route::get('/delete_booking/{id}',[AdminController::class, 'delete_booking']);
route::get('/approve_booking/{id}',[AdminController::class, 'approve_booking']);
route::get('/reject_booking/{id}',[AdminController::class, 'reject_booking']);

route::get('/view_gallery',[AdminController::class, 'view_gallery']);

route::post('/upload_gallery',[AdminController::class, 'upload_gallery']);

route::get('/delete_gallery/{id}',[AdminController::class, 'delete_gallery']);
route::post('/contact',[HomeController::class, 'contact']);

route::get('/all_messages',[AdminController::class, 'all_messages']);