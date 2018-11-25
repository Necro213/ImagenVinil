<footer class="footer magic_fade_in">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 footer_col magic_fade_in">
                <div class="footer_about">
                    <div class="footer_logo">
                        <div class="logo"><a href="#"><img src="{{asset('/img/system/logo.png')}}" alt="" style="height: 60px; width: auto;"></a></div>
                    </div>
                    <br><br><br><br>
                    <div class="footer_text">
                        <p>
                            {{$gnrl->quienessomos}}
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 footer_col">
                <h2 style="color: white">Contactanos</h2>
                <div class="contact_container">
                    <form action="mailto:necro213a@gmail.com" id="contact_form" class="contact_form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="contact_input" name="nombre" placeholder="Tu Nombre" required="required">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="contact_input" name="correo" placeholder="Tu Correo" required="required">
                            </div>
                        </div>
                        <div>
                            <textarea class="contact_input contact_textarea" name="mensaje" placeholder="Mensaje" required="required"></textarea>
                        </div>
                        <button class="contact_button" type="submit" name="Submit">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>