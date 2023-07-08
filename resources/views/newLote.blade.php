<!DOCTYPE html>
<html>
<head>
    <title>New Lote</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Lote</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('StoreLote') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="product_id" class="col-md-4 col-form-label text-md-right">Product ID</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="produto_id" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="validade" class="col-md-4 col-form-label text-md-right">Validade</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="validade" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codebar" class="col-md-4 col-form-label text-md-right">Codebar</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="codebar" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="valor" class="col-md-4 col-form-label text-md-right">Valor</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="valor" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create Lote
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2e
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body
