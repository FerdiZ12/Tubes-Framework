@extends('masters', ['title' => 'Home'])

@section('content')
    <div class="row">
        <div class="col text-center mt-5">
            <div class="text-center">
                <h1>Vens<span class="text-primary fw-bold">_laundry</span></h1>
            </div>
            <section>
                <div class="container p-5" style="width: 100%">
                    <div class="">
                        <a href="{{ route('purchased.index') }}">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/vens_laundry.jpg') }}"
                                alt="" srcset=""></a>
                    </div>
                </div>
        </div>
    </div>
@endsection
