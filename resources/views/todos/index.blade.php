@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="fw-bold">تسک‌ها</h4>
                    <a href="{{ route('todos.create') }}" class="btn btn-sm btn-outline-dark fw-bold">ایجاد تسک</a>
                </div>
                <div class="card mt-3">
                    <div class="card-header fw-semi-bold">تسک‌ها</div>
                    <div class="card-body">
                        <ul class="list-group p-3">
                            @foreach ($todos as $todo)
                                <li class="list-group-item d-flex justify-content-between">{{ $todo->title }}
                                    <div>
                                        <a href="{{ route('todos.show', ['todo' => $todo->id]) }}"
                                            class="btn btn-sm btn-dark">نمایش</a>
                                        @if (!$todo->is_complete)
                                            <a href="{{ route('todos.compelete', ['todo' => $todo->id]) }}"
                                                class="btn btn-sm btn-outline-success me-2">انجام شد</a>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">{{ $todos->links() }}</div> {{-- show paginate links --}}
        </div>
    </div>
@endsection
