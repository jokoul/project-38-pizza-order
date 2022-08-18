@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center wrapper">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Order</div>
                <div class="card-body">
                    @if(Auth::check())
                        <!--if user login-->
                        <form action="{{ route('order.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <p>Name : {{ auth()->user()->name }}</p>
                                <p>Email : {{ auth()->user()->email }}</p>
                                <p>Phone Number: <input type="number" class="form-control" name="phone"></p>
                                <p>Small pizza order: <input type="number" class="form-control" name="small_pizza" value="0"></p>
                                <p>Medium pizza order: <input type="number" class="form-control" name="medium_pizza" value="0"></p>
                                <p>Large pizza order: <input type="number" class="form-control" name="large_pizza" value="0"></p>
                                <p><input type="hidden" name="pizza_id" value="{{ $pizza->id }}"></p>
                                <p><input type="date" name="date" class="form-control"></p>
                                <p><input type="time" name="time" class="form-control"></p>
                                <p><textarea name="body" class="form-control"></textarea></p>                                

                                <p>
                                    <button class="btn btn-danger" type="submit">Make Order</button>
                                </p>
                                @if(session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if(session('errmessage'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('errmessage') }}
                                    </div>
                                @endif
                            </div>
                        </form>
                    @else
                        <p><a href="/login">Please login to make order</a></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <img src="{{ Storage::url($pizza->image) }}" alt="{{ $pizza->name }}" class="img-thumbnail" width="500"> 
                    <p><h3>{{ $pizza->name }}</h3></p>
                    <p><h3>{{ $pizza->description }}</h3></p>
                    <p>Small pizza price : ${{ $pizza->small_pizza_price }}</p>
                    <p>Medium pizza price : ${{ $pizza->medium_pizza_price }}</p>
                    <p>Large pizza price : ${{ $pizza->large_pizza_price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media screen and (max-width:768px){
        .wrapper{
            display: flex;
            flex-direction: column-reverse
        }
    }
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
