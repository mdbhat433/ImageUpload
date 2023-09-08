
<html>
<head>
    <title>Laravel</title>
    
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }

        label{
            margin-right:20px;
        }

        form{
            background:#f5f5f5;
            padding:20px;
            border-radius:10px;
        }

        input[type="submit"]{
            background:#0098cb;
            border:0px;
            border-radius:5px;
            color:#fff;
            padding:10px;
            margin:20px auto;
        }

    </style>
</head>
<body>
@if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>
@endif

{!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

<div class="row cancel">

    <div class="col-md-4">

        {!! Form::file('image', array('class' => 'image')) !!}

    </div>

    <div class="col-md-4">

        <button type="submit" class="btn btn-success">Create</button>

    </div>

</div>
{!! Form::close() !!}
</body>
</html>