@extends('admin.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Manage Categories</a></li>
    <li class="breadcrumb-item active">Edit Category</li>
</ol>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit Category</div>
    <div class="card-body">
    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('category.update', ['id' => $category->id]) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <label for="exampleInputName">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $category->name }}" placeholder="Enter name" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $category->description }}" placeholder="Description" required>
            @if ($errors->has('description'))
                <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Parent Category</label>
            <select name="parent_id" class="form-control">
                <option value="0">None</option>
                @if (isset($categories))
                    @foreach($categories as $cat)
                        @if ($cat->id != $category->id)
                            <option value="{{ $cat->id }}" @if($cat->id == $category->parent_id) selected @endif>{{ $cat->name }}</option>
                        @endif
                       
                    @endforeach
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Edit</button>
    </form>
    </div>
</div>
@endsection