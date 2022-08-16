@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">Category1</a>
                        <a href="" class="list-group-item list-group-item-action">Category2</a>
                        <a href="" class="list-group-item list-group-item-action">Category3</a>
                        <a href="" class="list-group-item list-group-item-action">Category4</a>
                        <a href="" class="list-group-item list-group-item-action">Category5</a>
                   </ul>    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                   <div class="row">
                        @forelse ($pizzas as $pizza)
                            <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                                <img src="{{ Storage::url($pizza->image) }}" alt="{{ $pizza->name }}" class="img-thumbnail" width="200">
                                <p>{{ $pizza->name }}</p>
                                <p>{{ $pizza->description }}</p>
                                <a href="{{ route('pizza.show',$pizza->id) }}">
                                    <button class="btn orderBtn mb-2">Order Now</button>
                                </a>
                            </div>
                        @empty
                            <p>No pizza to show</p>
                        @endforelse
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px
    }
    a.list-group-item:hover{
      background-color: rgb(177, 30, 30);
      color: #fff;
    }
    .card-header{
        background-color: rgb(177, 30, 30);
        color: #fff;
        font-size: 20px;
    }
    .orderBtn{
        background-color: rgb(177, 30, 30);
        color: #fff;
    }
</style>
@endsection
