<section>
    <div class="container">
        <div style="margin: auto; padding: 5% 30% ; ">
            
            <h1 style="text-align: center; margin: 50px; padding: auto;">Registrarse</h1>
            <form action="usuariosstore.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-usuario">Usuario</span>
                    <input type="text" class="form-control" aria-describedby="inputGroup-sizing-usuario" name="usuario">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-password">Password</span>
                            <input type="password" class="form-control" aria-describedby="inputGroup-sizing-password" name="password">
                        </div>    
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Registrarse</button>
                        </div>
                    </div>
                </div>

                <div class="row divRegistrarse">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <a class="btn btn-success" href="../index.php">volver</a>    
                        </div>
                    </div>
                </div>
                
                
            </form>
            
            
        </div>
    </div>
</section>
