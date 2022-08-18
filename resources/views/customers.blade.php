@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-header">
                    <span>Customers</span>
                    <div>
                        <a class="link" href="{{ route('pizza.index') }}">View Pizza</a>
                        <a class="link" href="{{ route('pizza.create') }}">Create Pizza</a>
                    </div>
                </div>

                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Member since</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <th>{{ $customer->name }}</th>
                                        <th>{{ $customer->email }}</th>
                                        <th>{{ \Carbon\Carbon::parse($customer->created_at)->format('M d Y') }}</th><!--We use Carbon to format the date-->
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
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
    .link{
        color: whitesmoke;
        text-decoration: none; 
    }
    .link:hover{
        color:rgba(245, 245, 245, 0.572);
    }

</style>
@endsection