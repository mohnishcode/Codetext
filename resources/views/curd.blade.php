<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <a href="/code" class="btn btn-danger">Write code</a>
        <br>
        <div class="container">

            <div class="row">



                @foreach($titles as $data)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <br>
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="{{asset('img.png')}}" alt="Card image" style="width:80%">
                        <div class="card-body">
                            <h4 class="card-title">Title: {{$data->title}}</h4>
                            <p class="card-text">Date: {{$data->created_at}}</p>
                            <a href="#" class="btn btn-primary">Edit!</a>
                            <a href="/download/{{$data->id}}" class="btn btn-success" >Download</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </body>
</html>
