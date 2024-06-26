@extends('layouts.app')


@section('content')

<div class="p-5 mb-4 bg-light rounded-3" style="background-image: url({{$house->cover_image}}); min-height: 70vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">
            Using a series of utilities, you can create this jumbotron, just
            like the one in previous versions of Bootstrap. Check out the
            examples below for how you can remix and restyle it to your liking.
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Example button
        </button>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{$house->cover_image}}" alt="">
        </div>
        <div class="col">
            <h1>Description</h1>

            <div class="meta">
                <div>ref no. {{$house->reference_code ?? 'N/A'}}</div>
                <div>price: {{$house->price}}</div>
            </div>
            <hr>
            <p>
                {{$house->description}}
            </p>
        </div>
    </div>
</div>
@endsection