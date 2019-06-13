<nav class="navbar navbar-expand-md fixed-top navbar-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav pull-sm-right">
      <li class="nav-item">
        <a class="nav-link" href="" >Proyecto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#modalLogin">Inicio</a>
      </li>
    </ul>
  </div>    
</nav>

    <div class="modal fade bd-example-modal-xl" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
          <div class="container">
    <ul id="tabs" class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Registrarse</a>
        </li>
        <li class="nav-item">
            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Iniciar sesión</a>
        </li>
    </ul>


    <div id="content" class="tab-content" role="tablist">
        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
            <div class="card-header" role="tab" id="heading-A">
                <h5 class="mb-0">
                    <!-- Note: `data-parent` removed from here -->
                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                      Registrarse
                    </a>
                </h5>
            </div>

            <!-- Note: New place of `data-parent` -->
            <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                <div class="card-body">
                  <form class="form-signin" action="index.php" method="post">
                    <div class="container">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label">* Numero de Identificación:</label>
                        <input type="number" name="cedula" id="cedula" class="form-control" placeholder="" required autofocus>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label">* Nombre Completo:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" required autofocus>  
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label  class="control-label">* Tipo:</label>
                        <select name="tipo" id="tipo" class="form-control">
                        <option value="3">Consulta</option>
                        </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="nit">* Correo Electronico:</label>
                        <input type="text" name="correo" id="correo" class="form-control" placeholder="" required autofocus>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="nit">* Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" required autofocus>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="nit">* Clasificación:</label>
                        <select name="clasificacion" id="clasificacion" class="form-control">
                        <option value="2">Estudiante</option>
                        <option value="3">Ciudadano</option>
                        <option value="4">Funcionario</option>
                        <option value="5">Empresario</option>
                        </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="nit">* Contraseña:</label>
                        <input type="password" name="clave" id="clave" class="form-control" placeholder="" required autofocus>
                        </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="nit">* Entidad:</label>
                        <select name="id_entidad" id="id_entidad" class="form-control">
                        <option value="0">No aplica</option>
                        </select>   
                        </div>
                      </div>
                      <br>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="text-center">
                            <button type="submit"  name="boton1" aria-label="Left Align" data-toggle="tooltip" data-placement="left" title="Registrar">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Registrar
                            </button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
            <div class="card-header" role="tab" id="heading-B">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                        Iniciar sesión
                    </a>
                </h5>
            </div>
            <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                <div class="card-body">
                  <form class="form-signin" action="login.php" method="post">
                    <div class="container">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="nit">Numero de Identificación:</label>
                        <input type="number" name="usu_num" id="usu_num" class="form-control" placeholder="" required autofocus>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="clave">  Contraseña:</label>
                        <input type="password" name="usu_clav" id="usu_clav" class="form-control" placeholder="" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="text-left">
                          <a href="olvidoclave.php">¿Olvidaste tu clave?</a>
                          </div>
                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="text-center">
                          <button type="submit" class="btn btn-success " name="Iniciar" aria-label="Left Align" data-toggle="tooltip" data-placement="left" title="Iniciar">
                          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar
                          </button> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

          </div>
        </div>
       </div>
    </div>
