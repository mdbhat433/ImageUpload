<!DOCTYPE html>
<html>
<head>
    <title> Upload Image </title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h2>Upload Image </h2></div>
  <div class="panel-body">
           @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="col-md-5 alert alert-success alert-dismissable">
 
        <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
         <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
  
         <strong>{{ $message }}</strong>
        </div>
        
        <img src="images/{{ Session::get('image') }}">

        @endif


    {!! Form::open(array('route' => 'postimage','files'=>true)) !!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::file('image_file', array('class' => 'form-control')) !!}
                </div>
                <div class="col-md-6">
                
                    <button type="submit" class="btn btn-block btn-success">Upload</button>
                </div>
            </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</body>
</html>