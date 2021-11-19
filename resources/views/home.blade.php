<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"></script>
</head>

<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow -sm">
            <div class="card-body">
                <h3>To-do List</h3>
                <form action="{{ route('store') }}" methods="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Add your new todo">
                        <button type="submit" class="btn btn-drak btn-sm px 4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>

                @if (count($todolists))
                    <ul>
                        @foreach ($todolists as $todolists)
                            <li class="list-group-item">
                                <form action="{{ route('destroy',$todolsit->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash-alt"></i></button>


                                </form>
                            </li>
                        @endforeach
                    </ul>
               @endif
            </div>
        </div>
    </div>

</body>

</html>
