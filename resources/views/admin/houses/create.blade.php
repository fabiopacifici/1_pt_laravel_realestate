@extends('layouts.admin')

@section('pageTitle', 'Create a new house')

@section('content')
<h1 class="p-3 bg-dark text-white">Create a new property</h1>

<div class="container py-5">
    @include('partials.validation-errors')


    <form action="{{route('admin.houses.store')}}" method="post">
        @csrf


        <div class="mb-3">
            <label for="reference_code" class="form-label">Ref. code</label>
            <input type="text" class="form-control @error('reference_code') is-invalid @enderror" name="reference_code" id="reference_code" aria-describedby="refCodeHelper" placeholder="ABS12345" value="{{old('reference_code')}}" />
            <small id="refCodeHelper" class="form-text text-muted">Type a reference code</small>
            @error('reference_code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">cover_image</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" id="cover_image" aria-describedby="coverImageHelper" placeholder="https://lorempicsum.com/myimage.png" value="{{old('cover_image')}}" />
            <small id="coverImageHelper" class="form-text text-muted">Type the cover_image size here</small>
            @error('cover_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" required>{{old('description')}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="square_meters" class="form-label">Square Meters</label>
            <input type="number" class="form-control @error('square_meters') is-invalid @enderror" name="square_meters" id="square_meters" aria-describedby="squareMetersHelper" placeholder="200" required value="{{old('square_meters')}}" />
            <small id="squareMetersHelper" class="form-text text-muted">Type the square meters of the property</small>

            @error('square_meters')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="priceHelper" placeholder="200000" value="{{old('price')}}" />
            <small id="priceHelper" class="form-text text-muted">Type the price for the current property</small>

            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exterior" class="form-label">Exterior</label>
            <input type="text" class="form-control @error('exterior') is-invalid @enderror" name="exterior" id="exterior" aria-describedby="refCodeHelper" placeholder="10ac" value="{{old('exterior')}}" />
            <small id="refCodeHelper" class="form-text text-muted">Type the exterior size here</small>

            @error('exterior')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-dark">Create</button>



    </form>
</div>


@endsection