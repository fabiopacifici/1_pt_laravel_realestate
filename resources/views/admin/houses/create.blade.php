@extends('layouts.app')

@section('pageTitle', 'Create a new house')

@section('content')

<h1 class="p-3 bg-dark text-white">Create a new property</h1>
<div class="container py-5">


    <form action="{{route('admin.houses.store')}}" method="post">
        @csrf


        <div class="mb-3">
            <label for="reference_code" class="form-label">Ref. code</label>
            <input type="text" class="form-control" name="reference_code" id="reference_code" aria-describedby="refCodeHelper" placeholder="ABS12345" />
            <small id="refCodeHelper" class="form-text text-muted">Type a reference code</small>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Descripotion</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>


        <div class="mb-3">
            <label for="square_meters" class="form-label">Square Meters</label>
            <input type="number" class="form-control" name="square_meters" id="square_meters" aria-describedby="squareMetersHelper" placeholder="200" />
            <small id="squareMetersHelper" class="form-text text-muted">Type the square meters of the property</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="200000" />
            <small id="priceHelper" class="form-text text-muted">Type the price for the current property</small>
        </div>


        <div class="mb-3">
            <label for="exterior" class="form-label">Exterior</label>
            <input type="text" class="form-control" name="exterior" id="exterior" aria-describedby="refCodeHelper" placeholder="10ac" />
            <small id="refCodeHelper" class="form-text text-muted">Type the exterior size here</small>
        </div>


        <button type="submit" class="btn btn-dark">Create</button>



    </form>
</div>


@endsection
