@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="fw-bold text-center my-5">{{ $todo->title }}</h4>
                <div class="card mt-3">
                    <div class="card-header">{{ $todo->title }}</div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{ route('todos.edit', ['todo' => $todo->id]) }}" class="btn btn-sm btn-outline-dark">نمایش</a>
                        <form class="me-2" action="{{ route('todos.delete', ['todo' => $todo->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
