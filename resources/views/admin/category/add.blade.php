@extends('layouts.admin');

@section('head')
    <link id="pagestyle" href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link id="pagestyle" href="{{asset('css/style.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{`add-category`}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description" rows="3"> </textarea>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status"/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" class="form-control" name="meta_keywords" rows="3"> </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" class="form-control" name="meta_descrip" rows="3"> </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
