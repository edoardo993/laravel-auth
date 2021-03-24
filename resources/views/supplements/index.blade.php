@extends('supplements.mainLayout')
@section('main-content')

    <table class="table">

        <thead class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Ingredients</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Use</th>
            <th scope="col">Price</th>
            <th scope="col">Img URL</th>
            <th>Created</th>
            <th scope="col">Action</th>
        </tr>

        </thead>

        <tbody>

            @foreach ($supplements as $supplement)

                <tr>
                    <th scope="row">{{$supplement->id}}</th>
                    <td><a href="{{route('supplements.show', compact('supplement'))}}">{{$supplement->name}}</a></td>
                    <td>{{$supplement->brand}}</td>
                    <td>{{$supplement->ingredients}}</td>
                    <td>{{$supplement->quantity}}</td>
                    <td>{{$supplement->description}}</td>
                    <td>{{$supplement->use}}</td>
                    <td>{{$supplement->price}}0$</td>
                    <td><img src="{{$supplement->img_url}}" width="100"></td>
                    <td>{{$supplement->created_at}}</td>
                    <td>
                        <a href="{{route('supplements.show', compact('supplement'))}}">
                            <button type="submit" class="btn btn-primary">
                                INFO
                            </button>
                        </a>
                        <a href="{{route('supplements.edit', compact('supplement'))}}">
                            <button type="submit" class="btn btn-primary">
                                EDIT
                            </button>
                        </a>

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$supplement->id}}">
                            DELETE
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$supplement->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">ATTENTION</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you wanna delete this item?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <form action="{{route('supplements.destroy', compact('supplement'))}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>
@endsection
