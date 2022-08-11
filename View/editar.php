 <!-- ##### Contact Area Start ##### -->
 <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h5>Edita tu perfil </h5>
                        <div></div>
                        <!-- Contact Form -->
                        <form action="?c=Usuario&a=Modificar" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="username" id="username" value="<?php echo $this->usuario_model->username ?>" required >
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nombre de Usuario</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" value="<?php echo $this->usuario_model->correo ?>" required >
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Correo de Usuario</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="password" name="pass" id="pass" value="<?php echo $this->usuario_model->contrasenia ?>" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="password" name="repass" id="repass" >
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Confirmar Contraseña</label>
                                    </div>
                                </div>
                               
                                <div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="realname" id="realname" value="<?php echo $this->usuario_model->nombre_usuario ?>" >
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nombre Real</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message"><?php echo $this->usuario_model->descripcion ?></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Describete Al Publico!</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Confirmar Cambios</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

             
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->