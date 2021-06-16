<?php

defined('_EXEC') or die;

$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/contact_us.js?v=1.2']);

?>

<main>
    <section class="pos-relative" style="height:50vh;">
        <figure style="height:100%;">
            <img src="{$path.images}ct_1.png" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-end p-20 p-md-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);">
            <div class="container">
                <h1 class="text-center text-light">{$lang.ct_tt_1}</h1>
            </div>
        </div>
    </section>
    <section id="map" style="height:400px;"></section>
    <section class="p-20 p-md-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h2>{$lang.ct_tt_3}</h2>
                    <p class="m-b-20">{$lang.ct_tt_4}</p>
                    <form name="contact_us" class="text-right">
                        <input type="text" name="name" placeholder="{$lang.name}" class="m-b-10 p-10" style="width:100%;height:40px;border:0px;border-radius:5px;background-color:#fafafa;">
                        <input type="email" name="email" placeholder="{$lang.email}" class="m-b-10 p-10" style="width:100%;height:40px;border:0px;border-radius:5px;background-color:#fafafa;">
                        <input type="text" name="phone" placeholder="{$lang.phone}" class="m-b-10 p-10" style="width:100%;height:40px;border:0px;border-radius:5px;background-color:#fafafa;">
                        <textarea name="message" placeholder="{$lang.message}" class="m-b-10 p-10" style="width:100%;height:100px;border:0px;border-radius:5px;background-color:#fafafa;"></textarea>
                        <button type="submit" class="btn btn-b-none" style="background-color:#19213c;">{$lang.submit}</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4 class="m-b-20">{$lang.ct_tt_5}</h4>
                    <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" class="d-flex align-items-center m-b-5 text-dark"><?php echo Configuration::$vars['contact']['phone']; ?></a>
                    <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" class="d-flex align-items-center m-b-5 text-dark"><?php echo Configuration::$vars['contact']['email']; ?></a>
                    <a href="<?php echo Configuration::$vars['map']; ?>" target="_blank" class="d-flex align-items-start m-b-20 text-dark"><?php echo Configuration::$vars['address']; ?></a>
                    <a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="btn btn-dark d-inline-flex align-items-center justify-content-center m-r-5 p-0" style="width:30px;height:30px;border-radius:50%;"><i class="fab fa-facebook"></i></a>
                    <a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="btn btn-dark d-inline-flex align-items-center justify-content-center p-0" style="width:30px;height:30px;border-radius:50%;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>
