@extends('master')


@section('content')

    <table class="table table-bordered table-condensed">
        <thead>
            <th>ID</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>
        </thead>

        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->status }}</td>
                <td>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">
                        Details
                    </a>{{ $category->action }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop