@extends('layout.main')

@section('title','Mobil')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4"><i class="mdi mdi-car"></i> List Mobil Centra <i class="mdi mdi-car"></i></h1>
        <a href="{{ route('mobil.create') }}" class="btn btn-primary col-lg-2">Tambah Mobil</a>
        <hr>
        <div class="row">
            @foreach ($mobil as $item)
                <div class="col-md-4 mb-4 ">
                    <div class="card">
                        <div class="card-body ">
                            <img src="{{  $item['url_foto'] }}" class="card-img-top rounded">
                            <h2 class="card-title text-center mt-2">{{ $item['merk'] }}</h2>
                            <p class="card-text text-center">{{ $item['tahun'] }}</p>
                            <p class="card-text text-center">{{ $item['cabang'] }}</p>
                            <p class="card-text text-center"><i>Stok: </i>{{ $item['stok'] }}</p>
                            <p class="card-text text-center">{{ $item['Harga'] }}</p>
                            <div class="d-flex justify-content-between">
                              <a href="{{route('mobil.edit', $item["id"])}}" class="btn btn-warning">Edit</a>
                              <form action="{{route('mobil.destroy', $item["id"])}}" method="post">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                              </form>
                              <a href="#" class="btn btn-warning ">Beli</a>
                            </div>
                            <div class="text-center">
                              <a href="{{route('mobil.show', $item["id"])}}" class="btn btn-info mt-2">Lihat Selengkapnya!</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ url('js/app.js') }}"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
    title: "Good job!",
    text: "{{session('success')}}",
    icon: "success"
    });
  </script>
@endif
<!-- confirm dialog -->
<script type="text/javascript">
 
  $('.show_confirm').click(function(event) {
       let form =  $(this).closest("form");
       let name = $(this).data("name");
       event.preventDefault();
       Swal.fire({
         title: " Hapus Sekarang? ",
         text: "Data tidak akan bisa recovery!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "iya, Hapus Sekarang!"
       })
       .then((willDelete) => {
         if (willDelete.isConfirmed) {
           form.submit();
         }
       });
   });

</script>
@endsection