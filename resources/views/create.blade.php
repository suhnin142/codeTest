<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"> --}}

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div>
                <form method="post" action="{{ route('books.store') }}">
                        <div class="form-group">
                            <label for="price">Book Unique ID :</label>
                            <input type="text" class="form-control" name="id"/>
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="name">Book Name:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="prize">Book Price :</label>
                            <input type="number" class="form-control" name="prize"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Book Cover</label>
                            <input type="text" class="form-control" name="cover"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Publisher</label>
                            <input type="text" class="form-control" name="publisher"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Content Owner</label>
                            <input type="text" class="form-control" name="contentOwner"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
            </div>
    </div>
    </body>
</html>
<script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>
