@extends('layouts.public')

@section('title', '- Contact Me')

@section('content')
    <section class="hero is-large is-info" {{-- style="background: url(https://media.istockphoto.com/vectors/solutions-vector-id854342964?k=20&m=854342964&s=612x612&w=0&h=yqWhpjZO6QWZxGboI6ZnZbM1O0OcdA_7HcJId_OK3Aw=) no-repeat;
                        background-size:cover" --}}>
        <div class="hero-body">
            <div class="container">
                <p class="title">
                    About us
                </p>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur.
                </p>

            </div>
        </div>
    </section>
    <section class="section ">
        <div class="title has-text-centered">
            Our Team
        </div>
        <div class="columns is-centered">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">Computer Engineering</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
