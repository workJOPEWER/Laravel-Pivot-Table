@extends('master')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categories</th>
            <th scope="col">Posts</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection