@extends('layouts.admin')


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
                        <a class="btn btn-sm btn-primary" href="{{route('admin.houses.show', $house)}}">View</a>
                        <a class="btn btn-sm btn-secondary" href="{{route('admin.houses.edit', $house)}}">Edit</a>


                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalId-{{$house->id}}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId-{{$house->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$house->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{$house->id}}">
                                            Delete house {{$house->reference_code}}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this? The operation cannot be reverted
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <form action="{{route('admin.houses.destroy', $house )}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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

    {{$houses->links('pagination::bootstrap-5')}}


</div>



@endsection