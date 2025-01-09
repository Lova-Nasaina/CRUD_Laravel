<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <h1>Creation Produit</h1>
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
                    <form action="{{ route('product.store') }}" method="post">

                        @csrf

                        @method('post')

                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control">
                            <label for="">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="quantity" class="form-control" >
                            <label for="">Quantity</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="decimale" name="price" class="form-control" >
                            <label for="">price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="description" class="form-control" >
                            <label for="">description</label>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
