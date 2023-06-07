<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>">
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset('js/jquery.min.js') ?>"></script>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6">
                <div class="panel pane-success">
                    <div class="panel-heading">
                        <label> TAREA </label>
                    </div>
                    <div class="panel-body">
                        <form id="ejemplo3_res" method="post">
                            @csrf
                            <div class="form-group">
                                <label>VALOR1:</label>
                                <input type="text" class="form-control" name="valor1" required>
                            </div>
                            <div class="form-group">
                                <label>VALOR2:</label>
                                <input type="text" class="form-control" name="valor2" required>
                            </div>
                            <div class="form-group">
                                <label>VALOR3:</label>
                                <input type="text" class="form-control" name="valor3" required>
                            </div>
                            <div class="form-group">
                                <label>RESULTADO:</label>
                                <input type="text" class="form-control" id="respuesta" disabled>
                            </div>                         
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">CALCULAR</button>
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    $("#ejemplo3_res").submit(function(event) { 
       event.preventDefault();
       $.ajax({
        url: '<?php echo route('prueba.ejemplo3_res') ?>',
        type: 'POST',        
        data: $("form").serialize(),
        success:function(datos){
            var valores=eval(datos)
            $("#respuesta").val(valores[0])
        } 
       })        
    });
</script>

</body>
</html>
