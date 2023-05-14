<!DOCTYPE html>
<html>
<head>
    <title>Edit Produto</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Produto</div>
php
Copy code
                <div class="card-body">
                    <form method="POST" action="{{ route('produtoUpdate', ['id' => $produto->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $produto->name }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="setor">Setor</label>
                            <input id="setor" type="text" class="form-control" name="setor" value="{{ $produto->setor }}" required>
                        </div>

                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input id="valor" type="number" class="form-control" name="valor" value="{{ $produto->valor }}" required>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>