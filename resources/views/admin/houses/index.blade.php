@extends('layouts.app')


@section('content')

<h1 class="p-3 bg-dark text-white">Properties</h1>
<div class="container min-vh-100 py-5">
    <a class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3" href="{{route('admin.houses.create')}}" role="button">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span>ADD</span>
    </a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">ref_code</th>
                    <th scope="col">cover_image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($houses as $house )

                <tr class="">
                    <td scope="row">{{$house->id}}</td>
                    <td>{{$house->reference_code ?? 'N/A'}}</td>
                    <td><img width="100" src="{{$house->cover_image}}" alt=""></td>
                    <td>
                        <a href="{{route('admin.houses.show', $house)}}">View</a>
                    </td>
                </tr>

                @empty

                <tr class="">
                    <td scope="row">nothing found here</td>
                </tr>

                @endforelse

            </tbody>
        </table>
    </div>




</div>



@endsection
