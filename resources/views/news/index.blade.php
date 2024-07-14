@extends('layouts.admin')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-[24px] font-bold my-4">
                    <h2>News Page</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Create item</a>
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
                    <th>News Name</th>
                    <th>Image</th>
                    <th>Location</th>
                    <th>Detail</th>
                    <th>Date</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name_news }}</td>
                        <td><center><img class="h-1/4 w-1/4" src="{{ asset('/images/news/'.$item->n_img) }}"></center></td>
                        <td>{{ $item->n_location }}</td>
                        <td>{{ $item->n_detail }}</td>
                        <td>{{ $item->n_date }}</td>
                        <td>
                            <form action="{{ route('news.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('news.edit',$item->id) }}">Edit</a>
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
