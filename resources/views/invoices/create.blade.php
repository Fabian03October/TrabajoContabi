<!-- resources/views/invoices/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear Factura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Crear Factura</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rfc_receptor">RFC del Receptor:</label>
            <input type="text" id="rfc_receptor" name="rfc_receptor" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre_receptor">Nombre del Receptor:</label>
            <input type="text" id="nombre_receptor" name="nombre_receptor" class="form-control">
        </div>

        <div class="form-group">
            <label for="uso_cfdi">Uso del CFDI:</label>
            <input type="text" id="uso_cfdi" name="uso_cfdi" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="clave_producto">Clave del Producto:</label>
            <input type="text" id="clave_producto" name="clave_producto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="unidad">Unidad:</label>
            <input type="text" id="unidad" name="unidad" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="valor_unitario">Valor Unitario:</label>
            <input type="number" step="0.01" id="valor_unitario" name="valor_unitario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="importe">Importe:</label>
            <input type="number" step="0.01" id="importe" name="importe" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="impuesto">Impuesto:</label>
            <input type="number" step="0.01" id="impuesto" name="impuesto" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Factura</button>
    </form>
</div>
</body>
</html>
