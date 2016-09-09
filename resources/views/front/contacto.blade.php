<section id="contacto">
    <div id="contact-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Contacto</h2>
                    <p>Puede dejar un mensaje desde la casilla a continuacion, su consulta o sugerencia es bienvenida!</p>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <!--
                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                        -->
                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="panel-body">
                            {!! Form::open(['route' => 'mail.store', 'method' => 'post']) !!}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('name', null ,array('class' => 'form-control', 'placeholder' => 'Su nombre')) !!}
                                        <!--
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="required">
                                        -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::email('email',null,array('class'=>'form-control','placeholder'=>'Su Email')) !!}
                                        <!--
                                        <input type="email" name="email" class="form-control" placeholder="Tu Email" required="required">
                                         -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::textarea('mensaje', null, array('class'=>'form-control', 'rows' => '4', 'placeholder'=>'ingresa tu mensaje')) !!}
                                            <!--
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Ingresa tu mensaje.." required="required"></textarea>
                                            -->
                               </div>
                                <div class="form-group">
                                    {!! Form::submit('Enviar',['class'=>'btn-submit']) !!}
                                    <!--
                                    <button type="submit" class="btn-submit">Enviar</button>
                                    -->
                                </div>
                           {!! Form::close() !!}
                         </div>
                        </div>
                    </div>
                        <!--
                        </form>
                        -->

                    <div class="col-sm-6">
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p></p>
                            <ul class="address">
                                <li><i class="fa fa-map-marker"></i> <span> Direccion:</span>  Corrientes 2101 - Resistencia (Chaco, Argentina) </li>
                                <li><i class="fa fa-whatsapp"></i> <span> Teléfono:</span> 364-511324  </li>
                                <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:m.cussatti@hotmail.com"> direccion de correo</a></li>
                                <li><i class="fa fa-globe"></i> <span> Web:</span> <a href="#">www.EstudioMarciaCussatti.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#contacto-->
