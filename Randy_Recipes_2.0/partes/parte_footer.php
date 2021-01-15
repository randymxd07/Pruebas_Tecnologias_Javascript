    
    <!-- A todos los lead tendrán unn tamaño de 20px -->
    <!-- Lo hice en una etiqueta style porque los estilos no se estan aplicando -->
    <style>.lead{font-size: 20px;}</style>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!-- Materialize Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Scripts de emergencia -->
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {

            // Sidenav //
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);

            // Parallax //
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);

            // Fixed-Action-Btn //
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems,{
                // direction: 'left',
                // hoverEnabled: false
                toolbarEnabled: true
            });

            // MaterialBox //
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems);

        });

    </script>

    </body>

    </html>