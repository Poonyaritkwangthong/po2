<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Problem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2 class="">Add Problem</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('problem.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="form-group">
                        <label>Problem Name:</label>
                        <input type="text" name="problem_name" class="form-control" placeholder="Problem Name">
                        @error('problem_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label class="block">Image:</label>
                        <input name="p_img" class="block border rounded py-1.5 px-2" type="file" accept="image/*" onchange="loadFile(event)"><br>
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
                        @error('p_img')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label>Detail:</label>
                        <input type="text" name="p_detail" class="form-control" placeholder="Detail">
                        @error('p_detail')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label>Location:</label>
                        <input type="text" name="p_location" class="form-control" placeholder="Location">
                        @error('p_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label>Date:</label>
                        <input type="date" name="p_date" class="form-control" placeholder="Date">
                        @error('p_date')
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
