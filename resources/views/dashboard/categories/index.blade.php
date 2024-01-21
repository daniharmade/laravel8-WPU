@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post Categories</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive col-lg-6">
            <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-primary"> <i
                                        class="bi bi-exclamation-circle"></i></a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"> <i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
