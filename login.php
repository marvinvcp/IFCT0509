<?php include '_header.php' ?>

<div class="well">login</div>
usuario: <input type="text" name="usuario"  value="" /><br>
password: <input type="password" name="password" value="" /><br>
<br>

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
      <form action="procesadatos.php" method="post">
        <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Sheena Kristin A.Eschor</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td>Nombre del cliente:</td>
                        <td><input type="text" name="nombre" class" form-control input-sm chat-input" placeholder="nombre"></td>
                      </tr>
                      <tr>
                        <td>D.N.I:</td>
                        <td><input type="text" name="DNI" class" form-control input-sm chat-input" placeholder="DNI"></td>
                      </tr>
                      <tr>
                        <td>Direccion:</td>
                        <td><input type="text" name="Direccion" class" form-control input-sm chat-input" placeholder="Direccion"></td>
                      </tr>
                     <tr>
                       <td>Poblacion:</td>
                       <td><input type="text" name="Poblacion" class" form-control input-sm chat-input" placeholder="Poblacion"></td>
                    </tr>
                    <tr>
                       <td>Provincia:</td>
                       <td><input type="text" name="Provincia" class" form-control input-sm chat-input" placeholder="Provincia"></td>
                    </tr>
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><input type="text" name="Gender" class" form-control input-sm chat-input" placeholder="Gender"></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td><input type="text" name="Home Address" class" form-control input-sm chat-input" placeholder="Home Address"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="text" name="Email" class" form-control input-sm chat-input" placeholder="Email"><a href="1990@hotmail.com"></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="Phone Number" class" form-control input-sm chat-input" placeholder="Number"><br><br>
                        </td>

                           <tr>
                             <td>año de nacimiento:</td>
                             <td><input tupe"text" name="ano_de_nacimiento" class="from-control input-sm chat-input" placeholder=" año de nacimiento" ></td>
                           </tr>

                           <tr> 
                             <td>Fecha de nacimiento</td>
                             <td><input type="text" name="dia" value="" placeholder="Dia" maxlength="2" ></td> <br>
                             <td><input type="text" name="mes" value="" placeholder="Mes" maxlength="2" ></td> <br>
                             <td><input type="text" name="año" value="" placeholder="Año" maxlength="4" ></td> <br>
                           </tr>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Cliente</a>
                  <a href="#" class="btn btn-primary">Operador</a>
                  <a href="#" class="btn btn-primary">Admin</a>
                  <a href="#" class="btn btn-primary">Superadmin</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
<input type="submit" name="submit" value="enviar" />
</form> 
            
          </div>
        </div>
      </div>
    </div>