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
                        class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}"
                        placeholder="Brand"
                        required
                        value="{{isset($supplement) ? $supplement->brand : ''}}"

                >

                <div class="invalid-feedback">
                    {{$errors->first('brand')}}
                </div>

            </div>

            <div class="form-group">

                <label for="ingredients">Ingredients</label>

                <input type="text"
                        name="ingredients"
                        class="form-control {{ $errors->has('ingredients') ? 'is-invalid' : '' }}"
                        placeholder="Ingredients"
                        required
                        value="{{isset($supplement) ? $supplement->ingredients : ''}}"

                >

                <div class="invalid-feedback">
                    {{$errors->first('ingredients')}}
                </div>

            </div>

            <div class="form-group">

                <label for="quantity">Quantity</label>

                <input type="text"
                        name="quantity"
                        class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}"
                        placeholder="Quantity"
                        required
                        value="{{isset($supplement) ? $supplement->quantity : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('quantity')}}
                </div>

            </div>

            <div class="form-group">

                <label for="description">Description</label>

                <input type="text"
                        name="description"
                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                        placeholder="Description"
                        required
                        value="{{isset($supplement) ? $supplement->description : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('description')}}
                </div>

            </div>

            <div class="form-group">

                <label for="use">Use</label>

                <input type="text"
                        name="use"
                        class="form-control {{ $errors->has('use') ? 'is-invalid' : '' }}"
                        placeholder="Use"
                        required
                        value="{{isset($supplement) ? $supplement->use : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('use')}}
                </div>

            </div>

            <div class="form-group">

                <label for="price">Price</label>

                <input type="text"
                        name="price"
                        class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                        placeholder="Price"
                        required
                        value="{{isset($supplement) ? $supplement->price : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('price')}}
                </div>

            </div>

            <div class="form-group">

                <label for="img_url">Img URL</label>

                <input type="text"
                        name="img_url"
                        class="form-control {{ $errors->has('img_url') ? 'is-invalid' : '' }}"
                        placeholder="Img URL"
                        required
                        value="{{isset($supplement) ? $supplement->img_url : ''}}"
                >

                <div class="invalid-feedback">
                    {{$errors->first('img_url')}}
                </div>

            </div>

            <input type="submit" value=" {{isset($supplement) ? 'update' : 'add' }}" class="submit-btn-add">

        </form>

@endsection
