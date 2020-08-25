 
@extends('layout/main')
 
 @section('title', 'Daftar Siswa')
   
 @section('container')
 <div class= "container">
     <div class="row">
         <div class="col-6">
            <h1 class="mt-3">Daftar Siswa</h1>
 
 
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                <p class="card-text">{{ $student->email }}</p>
                <p class="card-text">{{ $student->jurusan }}</p>
            </div>
            </div>

         </div>
     </div>   
 </div>
 @endsection
   