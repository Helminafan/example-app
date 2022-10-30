@extends('uts.master')
@section('master')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center mb-5 mt-5 text-success">Daftar Harga Barang</h1>
        <div class="row justify-content-between">
            @foreach($barang as $brg => $barang)
            <div class="card mb-5 py-3 shadow" style="width: 18rem;">
                <a href="{{route('reviewBarang.view', $barang->id)}}" style="text-decoration: none; color:inherit;">
                    <img src="assets/{{$barang->fotoBarang}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>{{$barang->namaBarang}}</h4>
                        <h5 class="text-success">Rp {{$barang->harga}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection