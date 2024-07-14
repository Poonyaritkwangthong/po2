<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add News</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Name:</strong>
                        <input type="text" name="name_news" class="form-control" placeholder="News Name">
                        @error('name_news')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label class="block">Image:</label>
                        <input name="n_img" class="block border rounded py-1.5 px-2" type="file" accept="image/*" onchange="loadFile(event)"><br>
                        <img class="w-1/2 my-2 rounded h-96" id="output"/>
                        <script>
                           var loadFile = function(event) {
                           var output = document.getElementById('output');
                           output.src = URL.createObjectURL(event.target.files[0]);
                           output.onload = function() {
                              URL.revokeObjectURL(output.src)
                           }
                           };
                        </script>
                        @error('n_img')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <strong>Location:</strong>
                        <input type="text" name="n_location" class="form-control" placeholder="Location">
                        @error('n_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <strong>Detail:</strong>
                        <input type="text" name="n_detail" class="form-control" placeholder="Detail">
                        @error('n_detil')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <strong>Date:</strong>
                        <input type="date" name="n_date" class="form-control" placeholder="Date">
                        @error('n_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
