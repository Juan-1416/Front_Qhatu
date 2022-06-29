
<html>
    <link rel="stylesheet" href="css/iniciarsesion.css">
    <article id="contenedor">
    <section id="contenedorcentrado">
        <section id="login">
            <form id="loginform">
                <label for="usuario">Usuario</label>
                <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                <label for="password">Contraseña</label>
                <input id="password" type="password" placeholder="Contraseña" name="password" required>

                <button type="submit" title="Ingresar" name="Ingresar">Login</button>
            </form>

        </section>
        <article id="derecho">
            <section class="titulo">
                Bienvenido a Qhatu
            </section>
            <hr>
            <section class="pie-form">
                <a href="#">¿Perdiste tu contraseña?</a>
                <a href="../registrar/registrar.html">¿No tienes Cuenta? Registrate</a>
                <hr>
                <section class="login_red_social">
                    <h2>Iniciar session con:</h2>
                <section class="login-items">
                    <button class="fb"><i class="fab fa-facebook-f"></i> Acceder  con Facebook</button>
                    <button class="tw"><i class="fab fa-twitter"></i> Acceder con Twitter</button>
                    <button class="correo"><i class="fas fa-envelope"></i> Acceder con Correo</button>
                </section>
                </section>
                <a href="{{url('http://127.0.0.1:8000')}}">« Volver</a>
            </section>
        </article>
    </section>
</article>
</html>
