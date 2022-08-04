@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                  <ul class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">View</a>
                    <a href="#" class="list-group-item list-group-item-action">Create</a>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>
                    <div class="form-group">
                        <label for="decription"> Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="row my-3">
                        <label class="col-3">Pizza price($)</label>
                        <div class="col-3">
                            <input type="number" class="form-control" placeholder="small pizza price"/>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" placeholder="medium pizza price"/>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" placeholder="large pizza price"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                       <select class="form-select">
                        <option value="vegetarian">Vegetarian</option>
                        <option value="nonvegetarian">Non vegetarian Pizza</option>
                        <option value="traditional">Traditional Pizza</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group text-center my-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
