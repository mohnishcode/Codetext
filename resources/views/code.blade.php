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

        <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>    
    </head>
    <body>

        <div class="jumbotron jumboton-fluid text-center">
            <h1>Place your code!</h1>

        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <form action="code" method="post">
                        {{csrf_field()}}
                        <textarea name="editor">


                        </textarea>
                        <br>
                        <input type="input" name="title" placeholder="Code title">   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" class="btn btn-primary" value="upload"> 
                        &nbsp;&nbsp;
                        <button href="/download" class="btn btn-success">Download!</button> 
                    </form>
                    <br><br><br><br>
                </div>
                <script>
                    CKEDITOR.replace( 'editor' );
                </script>
            </div>
        </div>

    </body>
</html>
