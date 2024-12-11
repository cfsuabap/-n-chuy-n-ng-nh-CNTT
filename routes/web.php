<?php

use App\Livewire\DangKy;
use App\Livewire\DangNhap;
use App\Livewire\TrangChu;
use App\Livewire\ExamDetail;
use App\Livewire\TheoryList;
use App\Livewire\ExamPractice;
use App\Livewire\ChiTietKhoaHoc;
use App\Livewire\Contact;
use App\Livewire\ExperiencePage;
use App\Livewire\IntroductionCenter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', TrangChu::class);
Route::get('/dang-nhap',  DangNhap::class)->name('dang-nhap');
Route::get('/dang-ky', DangKy::class)->name('dang-ky');
Route::get('/khoahoc/{slug}', ChiTietKhoaHoc::class)->name('khoahoc');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('thi-thu-truc-tuyen/{id}', ExamDetail::class)->name('exam.detail');
Route::get('exam/{id}/practice', ExamPractice::class)->name('exam.practice');
Route::get('/theory-list/{slug}', TheoryList::class)->name('theory-list');
// Route for Introduction to Center
Route::get('/introduce-center', IntroductionCenter::class)->name('introduce-center');

// Route for Experience Page
Route::get('/experience-page', ExperiencePage::class)->name('experience-page');
Route::get('/lien-he', Contact::class)->name('contact');
