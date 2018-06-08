<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cotizador online.</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	


    ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 8px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 8px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 10%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }


</style>



<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

function VerifyCheckbox ()
{
	var checkbox = $('table tbody input[type="checkbox"]');
	var sids = ""
  checkbox.each(function(){
        /*pega en un string todos los ids*/
        if(this.checked){sids += "," + this.value;}  								
			});	
	/*escribe todos los ids en un hidden en el form de borrado para que lo pase a la pagina borradora*/
  $("#delid").val(sids); 
}


function individual(id)
{
   //alert(id);	 
  /*escribe todos los ids en un hidden en el form de borrado para que lo pase a la pagina borradora*/
  $("#delid").val(id); 
}


</script>
</head>
<body>

<?php

include('./conexion.php');

$consulta = "SELECT * FROM productos ORDER BY productoNombre ASC";
?>






    <div class="container">
		<ul>
		<li>
		    <a href="#">Navegación &#9662;</a>
          <ul class="dropdown">
          	<li><a href="./admin.php">Inicio</a></li>
            <li><a href="./descargas.php">Presupuestos</a></li>
            <li><a href="./salir.php">Cerrar sesión</a></li>
            </ul>
      </li>
    	</ul>		    
    
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Listado <b>Articulos</b></h2>
						
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar articulo</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal" onclick="javascript: VerifyCheckbox();"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					 if ($resultado = $mysqli->query($consulta)) {
					 	while ($fila = $resultado->fetch_row()) {
							$pid = $fila[0];
					?>
                  <tr>
						<td>
							<span class="custom-checkbox">
								<?php echo "<input type='checkbox' id='checkbox".$pid."' name='options[]' value='".$pid."'>" ?>
								<?php echo "<label for='checkbox1".$pid."'></label>" ?>
							</span>					
							
						</td>
								<?php	
																	
										echo "<td>". $fila[1] . "</td>";
                        		echo "<td>". $fila[2] . "</td>";
                        ?>      
						
                  
                        <td>
                           <?php echo "<a href='#editEmployeeModal".$pid."' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Editar'>&#xE254;</i></a>"; ?>
                           
                           <!--
                           linea original
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                           -->
                           <!--
                           my linea asp
                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="javascript: $('#delid').val(<% = rsUser("id") %>);"><i class="material-icons" data-toggle="tooltip" title="Borrar">&#xE872;</i></a>
                           -->
                          
                          <!-- como yo supongo que deberia se en php segun como veo arriba -->
                           <?php echo "<a href='#deleteEmployeeModal' class='delete' data-toggle='modal' onclick='javascript: individual(".$pid.");'><i class='material-icons' data-toggle='tooltip' title='Eliminar'>&#xE872;</i></a>"; ?>
                        </td>
                    </tr>

					<!-- Edit Modal HTML -->
        			<?php echo "<div id='editEmployeeModal".$pid."' class='modal fade'> ";?>
                <div class="modal-dialog">
                        <div class="modal-content">
                                <form name="modifica" method="post" action="./modifica.php">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Editar articulo</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
																<div class="form-group">
																	<?php echo "<input type='hidden' id='pid' name='pid' value='".$pid."'>";?>
																</div>                                                
                                                
                                                <div class="form-group">
                                                        <label>Articulo</label>
                                                        <?php echo "<textarea name='articulo' class='form-control' required>".$fila[1]."</textarea>"; ?>
                                                </div>
                                                <div class="form-group">
                                                        <label>Precio</label>
                                                        <?php echo "<input type='text' name='precio' value='".$fila[2]."' class='form-control' required> ";?>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-info" value="Guardar">
                                        </div>
                                </form>
                        </div>
                </div>
                </div>
                

                

					</div>
        </div>
                    
					<?php
                    			}		
					         }
					?>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="./agregandoespecial.php">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar articulo.</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Articulo</label>
							<!-- <input type="text" class="form-control" name="articulo" required> -->
							<textarea name="articulo" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" class="form-control" name="precio" required>
						</div>
						
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Editar articulo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Articulo</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" class="form-control" required>
						</div>
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="eliminar" method="post" action="./eliminar.php">
				
					<div class="modal-header">						
					<!--hiden agregado aca escribe el id el click sobre el icono de borrado de cada fila
					    y tambien la funcion javascript verifychecbox del borrado grupa -->
            <input type="hidden" id="delid" name="delid" value="">
            
						<h4 class="modal-title">Eliminar articulo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
										
						<p>Seguro desea eliminar el articulo?</p>
						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>  
