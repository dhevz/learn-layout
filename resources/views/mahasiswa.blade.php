@extends('layout.master')
@section('title', 'Page nya mahasiswa')
@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Mahasiswa</h1>

        @component('components.alert')
            Berhasil menampilkan seluruh data mahasiswa! revisi
            @slot('class')
                @if (count($dtMahasiswa) >= 5)
                    success
                @else
                    danger sekali
                @endif
            @endslot
            @slot('judul')
                WARNA HIJAU
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($dtMahasiswa as $item)
                        <li class="list-group-item">{{ $item }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">
                            Tidak ada data...
                        </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection
