 
@extends('layout/main')
 
 @section('title', 'Form Tambah Data')
   
 @section('container')
 <div class= "container">
     <div class="row">
         <div class="col-8">
            <h1 class="mt-3">Form Tambah Data</h1>
            

            <div class="card" style="width: 30rem;">
            <div class="card-body">
                <form method="POST" action="{{ url('/students') }}">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Nama" name="nama">
                        @error('nama')
                        <div  id="invalidCheckFeedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror " id="nim" placeholder="NIM" name="nim">
                        @error('nim')
                        <div  id="invalidCheckFeedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email">
                        @error('email')
                        <div  id="invalidCheckFeedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror " id="jurusan" placeholder="Jurusan" name="jurusan">
                        @error('jurusan')
                        <div  id="invalidCheckFeedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
            </div>
            

            
         </div>
     </div>   
 </div>
 @endsection
   