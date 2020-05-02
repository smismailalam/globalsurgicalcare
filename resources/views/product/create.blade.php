<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <link href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script> --}}
</head>
<body>
<h3 class="text-center"> Create Student </h3>

<div class="container-fluid">
    <div class="row">

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-8 col-md-offset-2">
            <form id="formData" method="POST" action="{{ URL::to('/product/save') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Product Name </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Specification </label>
                    <textarea class="form-control" name="specification" placeholder="Specification"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Unit </label>
                    <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> wholesalse Price </label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="wholesalse Price">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Photo </label>
                    <input type="file" class="form-control" name="photos[]" id="photos" onchange="loadFile(event)" multiple>
                </div>

                {{-- <div class="form-group">
                    <img id="student_pic" height="100" width="100"/>
                </div>                 --}}
            </form>
            <button type="submit" form="formData" class="btn btn-default">Submit</button>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    function loadFile(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('student_pic');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
{{-- <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) 
        {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ url("student/delete") }}',
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ? 
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
   
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script> --}}
</body>
</html>