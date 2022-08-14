@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 mt-3">
             @if(count($errors) > 0)
            <div class="card mt-2">
                <div class="card-body">
                   
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pizza</div>
                
                <form action="{{ route('pizza.update',$pizza->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{$pizza->name}}"> 
                    </div>
                    <div class="form-group">
                        <label for="decription"> Description of pizza</label>
                        <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                    </div>
                    <div class="row my-3">
                        <label class="col-3">Pizza price($)</label>
                        <div class="col-3">
                            <input type="text" name="small_pizza_price" class="form-control" placeholder="small pizza price" value={{$pizza->small_pizza_price}}>
                        </div>
                        <div class="col-3">
                            <input type="text" name="medium_pizza_price" class="form-control" placeholder="medium pizza price" value={{$pizza->medium_pizza_price}}>
                        </div>
                        <div class="col-3">
                            <input type="text" name="large_pizza_price" class="form-control" placeholder="large pizza price" value={{$pizza->large_pizza_price}}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                       <select class="form-select" name="category">
                        <option value="vegetarian">Vegetarian</option>
                        <option value="nonvegetarian">Non vegetarian Pizza</option>
                        <option value="traditional">Traditional Pizza</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                        <img class="mt-2" src="{{ Storage::url($pizza->image) }}" width="80">
                    </div>
                    <div class="form-group text-center my-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
