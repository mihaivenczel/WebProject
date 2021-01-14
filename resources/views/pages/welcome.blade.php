@extends('components.main')

@section('title', '| Homepage')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Popular posts</h1>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @foreach ($posts as $post)



                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? '...' : '' }}</p>
                    <a href="{{ url('webproject/'.$post->slug) }}" class="btn btn-primary">Read more</a>
                </div>

                <hr>

            @endforeach

        </div>
    </div>

@endsection



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

@section('scripts')
    <script src="js/scripts.js"></script>

@endsection
