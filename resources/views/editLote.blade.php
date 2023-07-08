<!DOCTYPE html>
<html>
<head>
    <title>Edit lote</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit lote</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('loteUpdate', ['id' => $lote->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">validade</label>
                            <input id="name" type="date" class="form-control" name="validade" value="{{ $lote->validade }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="setor">codebar</label>
                            <input id="setor" type="number" class="form-control" name="codebar" value="{{ $lote->codebar }}" required>
                        </div>

                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input id="valor" type="number" class="form-control" name="valor" value="{{ $lote->valor }}" required>
                        </div>

                        <div class="form-group">
                            <label for="valor">produto</label>
                            <input id="valor" type="number" class="form-control" name="produto_id" value="{{ $lote->produto_id }}" required>
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