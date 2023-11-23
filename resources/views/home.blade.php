@extends('layouts.app')

@section('title', 'Home | XiAO DiNG DoNG')

@section('content')

    {{-- File CSS --}}
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">

    {{-- <div class="navbar-group">

        @guest
            @include('layouts/navbarGuest')
        @endguest

        @auth
            @include('layouts/navbarMember')
        @endauth

        @admin
            @include('layouts/navbarAdmin')
        @endadmin

    </div> --}}

    <h1 class="title-menu">菜单 Menu</h1>

    <div class="button-group">
        <form method="POST" action="{{ route('filterCategory') }}>
            <button href="#" class="btn btn-secondary"
            value="main-course">主菜 | Main Course</button>
            <button href="#" class="btn btn-secondary" value="beverage">饮料 | Beverage</button>
            <button href="#" class="btn btn-secondary" value="dessert">甜点 | Dessert</button>
        </form>

    </div>

    <div class="banner-category">
        @if ($category === 'main-course')
            <p>主菜 | Main Course</p>
        @elseif($category === 'beverage')
            <p>饮料 | Beverage</p>
        @elseif($category === 'dessert')
            <p>甜点 | Dessert</p>
        @endif
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-2">
        @foreach ($foods as $f)
            <div class="col">
                <div class="card h-100 text-white text-center bg-dark mb-3" style="width: 90%">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $f->food_image) }}" alt="Image Not Found"
                        style="width: 100%; height:90%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $f->food_name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="m-5 d-flex justify-content-center">
            {{-- NAVIGATION LINK --}}
            {{-- {{ $foods->withQueryString()->links() }} --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
