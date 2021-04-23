<?php defined('_EXEC') or die; ?>

        <footer class="p-20 p-md-40" style="background-color:#19213c;">
            <div class="container">
                <div class="row m-b-20 m-b-md-40">
                    <div class="col-md-4 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.contact_us}</h6>
                        <nav class="m-b-20">
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-light"><i class="fas fa-envelope m-r-5"></i><?php echo Configuration::$vars['contact']['email']; ?></a></li>
                                <li><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-light"><i class="fas fa-phone m-r-5"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
                            </ul>
                        </nav>
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.follow_us}</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-facebook m-r-5"></i><?php echo Configuration::$vars['rrss']['facebook']['user']; ?></a></li>
                                <li><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-instagram m-r-5"></i><?php echo Configuration::$vars['rrss']['instagram']['user']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light"><?php echo Configuration::$web_page; ?></h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="/" class="text-light">{$lang.home}</a></li>
                                <li class="m-b-5"><a href="/acerca-de-nosotros" class="text-light">{$lang.about_us}</a></li>
								<li class="m-b-5"><a href="/servicios" class="text-light">{$lang.services}</a></li>
								<li class="m-b-5"><a href="/llave-en-mano" class="text-light">{$lang.key_on_hand}</a></li>
								<li class="m-b-5"><a href="/proyectos" class="text-light">{$lang.projects}</a></li>
								<li class="m-b-5"><a href="/contactanos" class="text-light">{$lang.contact_us}</a></li>
                                <li><a href="/aviso-de-privacidad" class="text-light">{$lang.privacy_notice}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                        <figure class="p-10" style="height:60px;border-radius:5px;background-color:#fff;">
                            <img src="{$path.images}logotype.svg" alt="Logotype" class="img-fluid" style="height:100%;">
                        </figure>
                    </div>
                </div>
                <p class="text-light">Copyright © 2021 <strong><?php echo Configuration::$web_page; ?></strong> <i class="fas fa-heart" style="color:#f44336;"></i> {$lang.website} {$lang.design_by} <a href="mailto:gmafud@temasoluciona.mx" target="_blank" class="text-light"><strong>Tema Soluciona</strong></a> & {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank" class="text-light"><strong>Code Monkey</strong></a></p>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
