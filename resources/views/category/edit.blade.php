@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="{{ url('category') }}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update', $category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            @error('name')
                             <div><strong class="text-danger">{{$message}}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                            @error('description')
                             <div><strong class="text-danger">{{$message}}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"  {{ $category->status == 1 ? 'checked':'' }}  style="width: 20px; height:20px;"> Checked=visible, unchecked=hidden
                            @error('status')
                             <div><strong class="text-danger">{{$message}}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection