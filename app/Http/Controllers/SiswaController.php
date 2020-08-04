<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class SiswaController extends Controller
{
   public function index()
   {
   	$tampil = siswa::all();
   	return view('view', compact('tampil'));
}
}