<?php
 
 namespace App\Http\Controllers;

 use App\Models\Instansi;
 
 class UserController extends Controller
 {
     public function index()
     {
         $instansis = Instansi::all(); // Mengambil semua data instansi dari database
         return view('user.home', compact('instansis')); // Mengirim data ke view
     }
 
     public function layanan()
     {
         $instansis = Instansi::all(); // Menampilkan layanan dari instansi yang dikelola admin
         return view('user.layanan', compact('instansis'));
     }
 }
 
 