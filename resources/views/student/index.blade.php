 
@extends('layout/main')
 
 @section('title', 'Daftar Siswa')
   
 @section('container')
 <div class= "container">
     <div class="row">
         <div class="col-6">
            <h1 class="mt-3">Daftar Siswa</h1>
 
 
            <ul class="list-group">
                @foreach($mahasiswa as $mhs)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $mhs->nama }}
                    <a href="/students/{{ $mhs->id }}" class="badge badge-primary badge-pill">Detail</a>
                </li>
                @endforeach
            </ul>
         </div>
     </div>   
 </div>
 @endsection
   