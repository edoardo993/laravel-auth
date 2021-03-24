@extends('supplements.mainLayout')
@section('main-content')

    @php

        if(!empty($edit) && isset($edit)){
            $title = 'update a supplement below!';
            $method = 'PUT';
            $url = route('supplements.update', compact('supplement'));
        }else{
            $title = 'add a new supplement below!';
            $method = 'POST';
            $url = route('supplements.store');
        }


    @endphp

        <h1 class="title">{{$title}}</h1>

        <form action="{{$url}}"
                method="post"
                class="needs-validation"
                novalidate
                name="invio"
        >

            @csrf
            @method($method)

            <div class="form-group">

                <label for="name">Name</label>

                <input type="text"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        name="name"
                        placeholder="Name"
                        required
                        value="{{isset($supplement) ? $supplement->name : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>

            </div>

            <div class="form-group">

                <label for="brand">Brand</label>

                <input type="text"
                        name="brand"
                        class="form-control"
                        placeholder="Brand"
                        required
                        value="{{isset($supplement) ? $supplement->brand : ''}}"

                >

                <div class="invalid-feedback">
                    Please provide a valid brand.
                </div>

            </div>

            <div class="form-group">

                <label for="ingredients">Ingredients</label>

                <input type="text"
                        name="ingredients"
                        class="form-control"
                        placeholder="Ingredients"
                        required
                        value="{{isset($supplement) ? $supplement->ingredients : ''}}"

                >

                <div class="invalid-feedback">
                    Please provide valid ingredients.
                </div>

            </div>

            <div class="form-group">

                <label for="quantity">Quantity</label>

                <input type="text"
                        name="quantity"
                        class="form-control"
                        placeholder="Quantity"
                        required
                        value="{{isset($supplement) ? $supplement->quantity : ''}}"
                >

                <div class="invalid-feedback">
                    Please provide a valid quantity.
                </div>

            </div>

            <div class="form-group">

                <label for="description">Description</label>

                <input type="text"
                        name="description"
                        class="form-control"
                        placeholder="Description"
                        required
                        value="{{isset($supplement) ? $supplement->description : ''}}"
                >

                <div class="invalid-feedback">
                    Please provide a valid description.
                </div>

            </div>

            <div class="form-group">

                <label for="use">Use</label>

                <input type="text"
                        name="use"
                        class="form-control"
                        placeholder="Use"
                        required
                        value="{{isset($supplement) ? $supplement->use : ''}}"
                >

                <div class="invalid-feedback">
                    Please provide a valid use.
                </div>

            </div>

            <div class="form-group">

                <label for="price">Price</label>

                <input type="text"
                        name="price"
                        class="form-control"
                        placeholder="Price"
                        required
                        value="{{isset($supplement) ? $supplement->price : ''}}"
                >

                <div class="invalid-feedback">
                    Please provide a valid price.
                </div>

            </div>

            <div class="form-group">

                <label for="img_url">Img URL</label>

                <input type="text"
                        name="img_url"
                        class="form-control"
                        placeholder="Img URL"
                        required
                        value="{{isset($supplement) ? $supplement->img_url : ''}}"
                >

                <div class="invalid-feedback">
                    Please provide a
                </div>

            </div>

            <input type="submit" value=" {{isset($supplement) ? 'update' : 'add' }}" onclick="validation()" class="submit-btn-add">

        </form>

@endsection
