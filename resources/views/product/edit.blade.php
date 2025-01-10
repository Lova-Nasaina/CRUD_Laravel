<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 class="container">Creation Produit</h1>
    <div class="container mt-4">
        <div class="card">
            <div class="card-head">
                <div class="card-body">
                    <div>
                        @if ($errors->any())

                            <ul>
                                @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        @endif
                    </div>


                    <form action="/saveEdit/{{ $produit->id }}" method="post">

                        @csrf

                        @method('put')

                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" value="{{ $produit->name }}">
                            <label for="">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="quantity" class="form-control" value="{{ $produit->quantity }}">
                            <label for="">Quantity</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="decimale" name="price" class="form-control" value="{{ $produit->price }}">
                            <label for="">price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="description" class="form-control" value="{{ $produit->description }}">
                            <label for="">description</label>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Edite">
                        <a href="{{ URL::to('/product') }}" class="btn btn-primary">Return</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
