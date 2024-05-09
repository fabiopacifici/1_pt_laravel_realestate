@extends('layouts.admin')

@section('pageTitle', 'Edit house')

@section('content')


<h1 class="p-3 bg-dark text-white">Edit property: {{$house->reference_code}}</h1>
<div class="container py-5">

    @include('partials.validation-errors')


    <form action="{{route('admin.houses.update', $house)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="reference_code" class="form-label">Ref. code</label>
            <input type="text" class="form-control" name="reference_code" id="reference_code" aria-describedby="refCodeHelper" placeholder="ABS12345" value="{{old('reference_code', $house->reference_code)}}" />
            <small id="refCodeHelper" class="form-text text-muted">Type a reference code</small>

            @error('reference_code')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="d-flex gap-2">
            <img width="200" class="img-fluid" src="{{$house->cover_image}}" alt="image">
            <div class="mb-3 w-100">
                <label for="cover_image" class="form-label">Upload a different image</label>
                <input type="text" class="form-control" name="cover_image" id="cover_image" aria-describedby="coverImageHelper" placeholder="https://lorempicsum.com/myimage.png" value="{{old('cover_image', $house->cover_image)}}" />
                <small id="coverImageHelper" class="form-text text-muted">Type the cover_image size here</small>

                @error('cover_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripotion</label>
            <textarea class="form-control" name="description" id="description" rows="3" required>{{old('description', $house->description)}}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="square_meters" class="form-label">Square Meters</label>
            <input type="number" class="form-control" name="square_meters" id="square_meters" aria-describedby="squareMetersHelper" placeholder="200" value="{{old('square_meters', $house->square_meters)}}" />
            <small id="squareMetersHelper" class="form-text text-muted">Type the square meters of the property</small>
            @error('square_meters')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="200000" value="{{old('price', $house->price)}}" required />
            <small id="priceHelper" class="form-text text-muted">Type the price for the current property</small>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exterior" class="form-label">Exterior</label>
            <input type="text" class="form-control" name="exterior" id="exterior" aria-describedby="refCodeHelper" placeholder="10ac" value="{{old('exterior', $house->exterior)}}" required />
            <small id="refCodeHelper" class="form-text text-muted">Type the exterior size here</small>
            @error('exterior')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-dark">Update</button>

    </form>
</div>

@endsection