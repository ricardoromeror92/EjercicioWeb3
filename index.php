<?php
require_once("View/layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<div>
    <h1 class="text-center">Determinar si un numero es divisible entre otro</h1>
    <div class="text-center">
        <label>Numero a calcular:</label><br>
        <input type="text" id="factorial"><br><br>
        <button id="calcular" class="btn btn-primary">Calcular</button>
    </div> <br><br><br>
    <p id="factorialTexto"></p>
    <p id="factorialResultado"></p>    
    </div>

    <script>
        var factorial = document.getElementById("factorial");
        var boton = document.getElementById("calcular");
        var mostrar = document.getElementById("resultadoTotal");

        boton.addEventListener("click", function() {

            var resultado = calcularFactorial(factorial.value);
            var valor = factorial.value;
            var factorialResultado = document.getElementById("factorialResultado");
            var factorialTexto = document.getElementById("factorialTexto");
            factorialTexto.textContent = factorial.value + "! = ";
            while (valor > 1){
                factorialTexto.textContent = factorialTexto.textContent + valor + " * ";
                valor --;
            }

            factorialTexto.textContent = factorialTexto.textContent + valor;

            factorialResultado.textContent = factorial.value + "! = " + resultado;
        });

        function calcularFactorial (n) {
            var total = 1; 
            for (i=1; i<=n; i++) {
                total = total * i; 
            }
            return total; 
        }

        

    </script>