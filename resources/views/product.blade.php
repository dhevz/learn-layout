@extends('layout.master_dua')
@section('title', 'page product')
@section('content')
    @parent
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Product</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($dtProduct as $item)
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <li class="list-group-item"><img src="{{ asset($item['photo']) }}"> </li>
                    @empty
                        <div class="   alert alert-dark d-inline-block">
                            Tidak ada data...
                        </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection
