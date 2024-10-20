@extends('layout.main')

@section('title','Edit Mobil' )
    
@section('content')
<div class="col-md-6 grid-margin stretch-card mt-3" >
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Edit Data</h4>
        <p class="card-description">Masukan Data Baru Mobil</p>
        <form method="POST" action="{{ route('mobil.update', $mobil['id'])}}" class="forms-sample" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="form-group">
            <label for="merk">Merk Mobil</label>
            <input type="text" class="form-control" id="merk" name="merk" value="{{ old('merk') }}" placeholder="Masukan Merk Mobil">
            @error('merk')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Mobil</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" placeholder="Masukan Tahun Mobil">
            @error('tahun')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="cabang">Cabang</label>
            <select class="form-control" name="cabang" id="cabang">
              <option value="Celentang">Celentang</option>
              <option value="Kuto">Kuto</option>
            </select>
            @error('cabang')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="harga">Harga Mobil</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Masukan Harga Mobil">
            @error('harga')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="stok">stok Mobil</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok') }}" placeholder="Masukan stok Mobil">
            @error('stok')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="url_foto">Foto</label>
            <input type="url" class="form-control" name="url_foto" value="{{ old('url_foto') }}">
            @error('url_foto')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2"> Simpan </button>
          <a href="{{url('mobil')}}"> Batal </a>
        </form>
      </div>
    </div>
  </div>
@endsection