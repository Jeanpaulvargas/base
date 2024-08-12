<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">FORMULARIO PARA PRODUCTOS</h1>
        <div class="border shadow p-4">
            <form action="">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="col-md-4">
                        <label for="precio" class="form-label">Ingrese precio</label>
                        <input type="number" id="precio" name="precio" min="0" step="0.01" placeholder="0.00" id="precio" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="descripcion" class="form-label">Descripción del producto</label>
                        <input type="text" id="descripcion" class="form-control" placeholder="Ingrese la descripción">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>