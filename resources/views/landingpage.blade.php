@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>
                        Afrit Herdantoro
                    </p>
                    <h1>
                        Vespa Enthusiast <br>
                    </h1>
                    {{-- <p>
                        Saya sangat suka mendesain sebuah website dan mobile apps. Selain membuat membuat desainnya, <br>
                        saya juga bisa mengimplementasikan desain yang saya buat menjadi sebuah website atau mobile apps.
                    </p> --}}
                    <div class="tombol d-flex align-items-center justify-content-center">
                        <a href="{{ '/projects' }}" class="btn mx-3 project">See My Projects -></a>
                        <a href="#contact" class="btn mx-3 contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">Services</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Layanan yang Saya Tawarkan</h2>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-1 list-layanan">
                @foreach ($project_categories as $project_category)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('css/icon-mobile.png') }}" alt="">
                            <h5>{{ $project_category->name }}</h5>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor
                            sit amet consectetur. </p> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="projects">
        <div class="container">
            <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">Projects</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Project Saya</h2>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-2 list-project">
                @foreach ($projects as $project)
                    <div class="col">
                        <div class="card">
                            <img src="{{ Storage::url($project->thumbnail) }}" class="card-img-top" alt="...">
                            <h5>{{ $project->title }}</h5>
                            <p>{{ $project->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col">
                    <div class="tombol d-flex justify-content-center">
                        <a href={{ '/projects' }} class="btn mx-3 project">See More -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">Blogs</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Blog Terbaru</h2>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-2 list-blog">
                @foreach ($blogs as $blog)
                    <div class="col">
                        <a href="/blogs/detail/{{ $blog->id }}" style="text-decoration: none;">
                            <div class="card">
                                <img src="{{ Storage::url($blog->thumbnail) }}" class="card-img-top" alt="...">
                                <h5>{{ $blog->title }}</h5>
                                <p>{{ $blog->description }}</p>
                                <div class="tanggal d-flex justify-content-between align-items-center">
                                    <p>{{ $blog->created_at->format('d F Y') }}</p>
                                    <p class="category-blog">{{ $blog->category->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <div class="tombol d-flex justify-content-center">
                        <a href="/blogs" class="btn mx-3 project">See More -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="contact">
        <div class="contact" id="#contact">
            <div class="container">
                <div class="row">
                    <div class="col text-center badge1">
                        <p class="badge">Contact</p>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between content g-4">
                    <div class="col col-lg-6 my-3">
                        <h2>Come Start Project With Me!</h2>
                        <p class="p">If you have questions about projects, collaborations, conversations, you can chat to my email,</p>
                        <div class="contact-list d-flex align-items-center justify-content-between">
                            <p>aprit@gmail.com</p>
                            {{-- <p>0812 3456 78910</p> --}}
                        </div>
                    </div>
                    <div class="col col-lg-4 my-3">
                        <img src="{{ asset('css/aprit.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
