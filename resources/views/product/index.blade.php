<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>

    {{-- <div class="container mt-5">
        <button class="btn btn-primary mb-3">Crée Production</button>
        <button class="btn btn-primary mb-3">Login In</button>
    </div> --}}

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container row mt-5" style="margin-left: 90px;">
        <div class="col text-start">
            <a href="{{ URL::to('/create') }}"> <button type="button" class="btn btn-primary">ADD Product</button></a>
        </div>
        <div class="col text-end">
            <button type="button" class="btn btn-secondary">Login In</button>
        </div>
    </div>


    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $item)


                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>

                    <td><a href="/edit/{{ $item->id }}" class="btn btn-primary mb-1">Edit</a></td>

                    <form action="/delete/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button class="btn btn-danger mb-1">Delete</button></td>
                    </form>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</body>

</html>
