<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso RUT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container ">
		<br>
		<!-- TITULO -->
		<div class="row">
			<div class="col-sm d-flex justify-content-center">
				<h2>Ingrese su RUT</h2>
			</div>
		</div>

		<div class="input-group input-group-lg">
  			<input type="text" id="nameInput" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese su RUT">
		</div>

		<br>
		<br>

		<div class="container ">
			<div class="row ">
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" value="1" onclick="rellenar(1)">1</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(2)">2</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(3)">3</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(4)">4</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(5)">5</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(6)">6</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(7)">7</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(8)">8</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(9)">9</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar(0)">0</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg" onclick="rellenar('K')">K</button>
				</div>
				<div class="col-sm d-flex justify-content-center">
					<button class="btn btn-warning btn-lg" onclick="borrar('')">BORRAR</button>
				</div>
			</div>
			<br>
			<div class="d-grid gap-2">
				<button class="btn btn-primary btn-lg" type="button">Ingresar</button>
			</div>
		</div>
	</div>
	<script>
		const nameInput = document.getElementById("nameInput");
		const formObject = {};

		Object.defineProperty(formObject, "name",{
			get(){
				return nameInput.value;
			},
			set(newValue){
				nameInput.value = newValue;
			}
		});	
		function rellenar(value){
			if (formObject.name.length == 10) {
				return false;
			}
			var nameInput = '11111111-1';
			var globalRegex = RegExp('\b(\d{1,3}(?:\.\d{1,3}){2}-[\dkK])\b/','gm');
			console.log(globalRegex.test(nameInput));
			formObject.name = formObject.name + value;
			checkRut(formObject.name);
		}

		function borrar(){
			formObject.name = formObject.name.slice(0, -1);
			checkRut(formObject.name);
			//formObject.name = formObject.name - value;
		}

		function checkRut(rut) {
			// Despejar Puntos
			var valor = rut.replace('.','');

    		// Despejar Guión
   			valor = valor.replace('-','');

			//Aislar Cuerpo y Dígito Verificador
			cuerpo = valor.slice(0,-1);
    		dv = valor.slice(-1).toUpperCase();

			//Formatear RUN
			formObject.name = cuerpo + '-'+ dv;

			//Si no cumple con el mínimo ej. (n.nnn.nnn)
			if(cuerpo.length < 8) {return false;}

			//Calcular Dígito Verificador
			suma = 0;
   			multiplo = 2;

			//Para cada dígito del Cuerpo
			for(i=1;i<=cuerpo.length;i++) {
    
				//Obtener su Producto con el Múltiplo Correspondiente
				index = multiplo * valor.charAt(cuerpo.length - i);
				
				//Sumar al Contador General
				suma = suma + index;
				
				//Consolidar Múltiplo dentro del rango [2,7]
				if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
			}
			
			//Calcular Dígito Verificador en base al Módulo 11
			dvEsperado = 11 - (suma % 11);

			//Casos Especiales (0 y K)
			dv = (dv == 'K')?10:dv;
    		dv = (dv == 0)?11:dv;

			//Validar que el Cuerpo coincide con su Dígito Verificador
			//Error alert('Mensaje',se envian options)
			if(dvEsperado != dv){console.error('ta malo'); return false;}

			//Te indica por cosola del navegador el DV, si es correcto te indica el numero, si no, da falso
			//console.log(dvEsperado);
			return true;
		}
	</script>
</body>
</html>
