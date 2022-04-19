@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- @include('sections.errors') --}}
                <div class="card mt-3">
                    <div class="card-header fw-semi-bold">ویرایش تسک</div>
                    <div class="card-body">
                        <form action="{{ route('todos.update', ['todo'=> $todo->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title" class="mb-2">عنوان</label>
                                <input type="text" id="title" name="title" placeholder="عنوان" class="form-control @error('title') border-danger @enderror" value="{{ $todo->title }}">
                                @error('title')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="description" class="mb-2">توضیحات</label>
                                <textarea type="text" id="description" name="description" placeholder="توضیحات" class="form-control @error('description') border-danger @enderror">{{ $todo->description }}</textarea>
                                @error('description')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-dark mt-4">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
