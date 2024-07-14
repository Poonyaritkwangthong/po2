@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-[24px] font-bold my-4">
                    <h2>Suggestion Page</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('suggestion.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Topic Name</th>
                    <th>Detail</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suggestions as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->topic_name }}</td>
                        <td>{{ $item->s_detail }}</td>
                        <td>
                            <form action="{{ route('suggestion.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('suggestion.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

@endsection
