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
            @if ($book != null)
            <div class="table-responsive-sm">
                <div class="title">
                    <div class="caption">
                        Book List
                        <a class="btn-info btn-sm" href="/book/create">Add new book</a>
                        {{-- <button type="submit" class="btn-info btn-sm">Add new book</button> --}}
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table" id="datatable">
                        <thead>
                        <tr>
                            <th>Book id</th>
                            <th>Name</th>
                            <th>Book Cover</th>
                            <th>Prize</th>
                            <th>Publisher</th>
                            <th>Content Owner</th>

                            <th>&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($book as $row)
                            <tr>
                                <td>{{$row->book_uniq_idx}}</td>
                                <td class="font-myan">{{ $row->bookname }}</td>
                                <td class="font-myan">{{$row->cover_photo}}</td>

                                <td style="" class="row">

                                    @if($pub->count() > 0)
                                        @foreach($pub as $row2)
                                            @if($row2->idx === $row->publisher_id)

                                            {{$row2->name}}

                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $row->prize }}</td>
                                <td style="" class="row">

                                    @if($contentOwner->count() > 0)
                                        @foreach($contentOwner as $row3)
                                            @if($row3->idx === $row->co_id)
                                            {{$row3->name}}
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('book.delete', $row->idx)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-xs btn-danger" type="submit">Delete</button>
                                    </form>
                                     <form action="{{ route('book.edit', $row->idx)}}" method="post">
                                        @csrf
                                        @method('UPDATE')
                                        <button class="btn-xs btn-primary" type="submit">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p>No entry found!</p>
        @endif
    </div>
    </body>
</html>
<script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>
