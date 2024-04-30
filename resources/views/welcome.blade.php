@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Amazing Properties</h1>
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
<section class="houses py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 g-4">

            @forelse ($houses as $house )

            <div class="col">
                <div class="card position-relative h-100">

                    <a href="{{route('guests.houses.show', $house)}}">
                        <img src="{{$house->cover_image}}" alt="The house image description" class="card-img-top">
                    </a>


                    <div class="card-body">
                        {{$house->description}}
                        <a href="{{route('guests.houses.show', $house)}}">view</a>
                    </div>

                    <div class="bg-primary text-white price position-absolute top-0 end-0 fs-3 m-3">
                        $ {{$house->price}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>
                    😢 Sorry no houses yet!
                </p>
            </div>
            @endforelse


        </div>
    </div>
</section>


@endsection