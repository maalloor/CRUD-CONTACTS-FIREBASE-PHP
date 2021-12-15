<?php
    include('includes/header.php');
?>
    <div class="row">
        <ol class="menu">
            <li><span class="item-filtro DroidSerif-Regular">All</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Corporativa</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Moda</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Deportiva</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Seguridad industrial</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Hoteleria y limpieza</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Salud y alimenticia</span></li>
        </ol>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-4 g-3" id="hola">

        </div>
    </div>
    <script>
        const table = document.querySelector('#hola');
        axios.get('http://localhost/Proyectos/FIREBASE-PHP/prueba.php?accion=mostrarTodo')
            .then(response => {
                this.result = response.data;
                console.log(result);
                this.result.forEach((elemento) => {
                    table.innerHTML += `
                    <div class="col">
                        <div class="card card-view">
                            <img class="img-view-card" src="${elemento.photo}" width="" alt="">
                        </div>
                    </div>
                `
                });
            });
    </script>
<?php
    include('includes/footer.php');
?>