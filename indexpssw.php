
<?php
session_start();

$usuario = $_SESSION['usuario'];


if (!isset($usuario)) {
header("location:inicio.php");
}
    ?>


<html>

<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="stats/css/colors.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="indexpssw.php">Olocuilta</a>
    </div>

        <div class="navbar-header">
      <a class="navbar-brand" href="combospssw.php">Combos Olocuilta´s</a>
    </div>

        <div class="navbar-header">
      <a class="navbar-brand" href="promopssw.php">Promociones</a>
    </div>

            <div class="navbar-header">
      <a class="navbar-brand" href="especialidadespsww.php">Especiales Olocuilta's</a>
    </div>




    <ul class="nav navbar-nav">

    
    </ul>
    <ul class="nav navbar-nav navbar-right">
     

     <li><a href="perfil.php"><span><?php echo "$usuario"; ?></span></a></li>
      <li><a href="salir.php"><span class="glyphicon glyphicon-log-out"></span>  Cerrar sesión</a></li>

    </ul>
  </div>
</nav>
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '30b5ca47ac3397e41070688ab0209d1be0084019';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
</head>
<body>

    <form class="col-12" method="post" action="">
    <script type="text/javascript">(function(){
    var content = document.getElementById("geolocation-test");

    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(function(objPosition)
        {
            var lon = objPosition.coords.longitude;
            var lat = objPosition.coords.latitude;


            content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";

        }, function(objPositionError)
        {
            switch (objPositionError.code)
            {
                case objPositionError.PERMISSION_DENIED:
                    content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
                break;
                case objPositionError.POSITION_UNAVAILABLE:
                    content.innerHTML = "No se ha podido acceder a la información de su posición.";
                break;
                case objPositionError.TIMEOUT:
                    content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
                break;
                default:
                    content.innerHTML = "Error desconocido.";
            }
        }, {
            maximumAge: 75000,
            timeout: 15000
        });
    }
    else
    {
        content.innerHTML = "Su navegador no soporta la API de geolocalización.";
    }
})();</script>
</form>

  <img src="img/logito.png" align="center" style="width: 70%; margin-top: 0px; height: 500px; margin-bottom: 20px; margin-left: 15%">


<div class="container" style="width: 100%;">

    <div class="row">
        <!-- Elementos generados a partir del JSON -->
        <main id="items" class="col-sm-8 row"></main>
        <!-- Carrito -->
        <aside class="col-sm-4" style=" width: 20%; float: right;">
            <h2>Carrito</h2>
            <!-- Elementos del carrito -->
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <!-- Precio total -->
            <p class="text-right">Total: <span id="total"></span>&euro;</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <button type="button" class="btn btn-success" style="margin-right: 80px; margin-bottom: 50px;">Efectivo</button>
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ACGPUR2WNWBVU">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>


        </aside>
    </div>
</div>


<script>
        window.onload = function () {
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'Queso',
                    precio: 0.75,
                    imagen: 'img/queso.jpg'
                },
                {
                    id: 2,
                    nombre: 'Frijol Con Queso',
                    precio: 0.60,
                    imagen: 'img/frijolconqueso.jpg'
                },
                {
                    id: 3,
                    nombre: 'Revuelta',
                    precio: 0.60,
                    imagen: 'img/revuelta.jpg'
                },
                {
                    id: 4,
                    nombre: 'Queso Con Loroco',
                    precio: 0.80,
                    imagen: 'img/quesoconloroco.jpg'
                },
                {
                    id: 5,
                    nombre: 'La Pupa',
                    precio: 2.50,
                    imagen: 'img/lapupa.jpg'
                },
                {
                    id: 6,
                    nombre: 'Ayote',
                    precio: 0.75,
                    imagen: 'img/ayote.jpg'
                },
                {
                    id: 7,
                    nombre: 'Ajo',
                    precio: 0.75,
                    imagen: 'img/ajo.jpg'
                },
                {
                    id: 8,
                    nombre: 'Chile Verde',
                    precio: 0.75,
                    imagen: 'img/chileverde.jpg'
                },
                {
                    id: 9,
                    nombre: 'Camarón',
                    precio: 1,
                    imagen: 'img/camaron.jpg'
                },
                {
                    id: 10,
                    nombre: 'Pollo',
                    precio: 1,
                    imagen: 'img/pollo.jpg'
                },
                {
                    id: 11,
                    nombre: 'Peperoni',
                    precio: 1,
                    imagen: 'img/peperoni.jpg'
                },
                {
                    id: 12,
                    nombre: 'Chorizo',
                    precio: 0.60,
                    imagen: 'img/chorizo.jpg'
                },
                {
                 id: 13,
                    nombre: 'Horchata',
                    precio: 1,
                    imagen: 'img/horchata.jpg'
                },
                {
                    id: 14,
                    nombre: 'Ensalada',
                    precio: 1.50,
                    imagen: 'img/ensalada.jpg'
                },
                {
                    id:15,
                    nombre: 'Cebada',
                    precio: 1,
                    imagen: 'img/cebada.jpg'
                },
                {
                    id: 16,
                    nombre: 'Tamarindo',
                    precio: 1,
                    imagen: 'img/tamarindo.jpg'
                },
                {
                    id: 17,
                    nombre: 'Coca-Cola',
                    precio: 1,
                    imagen: 'img/cocacola.jpg'
                },
                {
                    id: 18,
                    nombre: 'Sprite',
                    precio: 1,
                    imagen: 'img/sprite.jpg'
                },
                {
                    id: 19,
                    nombre: '7UP',
                    precio: 1,
                    imagen: 'img/7up.jpg'
                },
                {
                    id: 20,
                    nombre: 'Crema Soda',
                    precio: 1,
                    imagen: 'img/cremasoda.jpg'
                }

            ]
            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            // Funciones
            function renderItems () {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Imagen
                    let miNodoImagen = document.createElement('img');
                    miNodoImagen.classList.add('img-thumbnail');
                    miNodoImagen.setAttribute('src', info['imagen']);
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = '$' + info['precio'];
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoImagen);
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }

            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();
            }

            function renderizarCarrito () {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Quitamos los duplicados
                let carritoSinDuplicados = [...new Set(carrito)];
                // Generamos los Nodos a partir de carrito
                carritoSinDuplicados.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Cuenta el número de veces que se repite el producto
                    let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                        return itemId === item ? total += 1 : total;
                    }, 0);
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                    miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0]['nombre']} - ${miItem[0]['precio']}€`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.style.marginLeft = '1rem';
                    miBoton.setAttribute('item', item);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito () {
                console.log()
                // Obtenemos el producto ID que hay en el boton pulsado
                let id = this.getAttribute('item');
                // Borramos todos los productos
                carrito = carrito.filter(function (carritoId) {
                    return carritoId !== id;
                });
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal () {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }
            // Eventos

            // Inicio
            renderItems();
        } 
    </script>

</body>
</html>