<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);

?>

<main>
    <section class="pos-relative" style="height:100vh;">
        <figure style="height:100%;">
            <img src="{$path.images}hm_1.png" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-end p-20 p-md-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);">
            <div class="container">
                <h1 class="m-b-20 text-center text-light">{$lang.hm_tt_1_1} <strong id="typing"></strong><span id="cursor">|</span> {$lang.hm_tt_1_2}</h1>
                <p class="m-b-20 text-center text-light">{$lang.hm_tt_2}</p>
                <div class="d-flex justify-content-center m-b-20 m-b-md-40">
                    <a href="/contactanos" class="btn" style="width:100%;max-width:200px;border:0px;border-radius:40px;background-color:#263689;">{$lang.contact_us}</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color:#263689;">
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-md-6">
                <figure style="height:400px;overflow:hidden;">
                    <img src="{$path.images}hm_2.png" alt="Cover" class="img-cover">
                </figure>
            </div>
            <div class="col-md-6 p-20 p-md-40 text-center text-md-left">
                <h4 class="m-b-20 text-light">{$lang.hm_tt_3}</h4>
                <p class="m-b-20 text-justify text-light" style="max-width:400px;">{$lang.hm_tt_4}</p>
                <a href="/contactanos" class="btn btn-b-none text-dark" style="border-radius:40px;background-color:#fff;">{$lang.start_now}</a>
            </div>
        </div>
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-md-6 order-1 order-md-2">
                <figure style="height:400px;overflow:hidden;">
                    <img src="{$path.images}hm_2.png" alt="Cover" class="img-cover">
                </figure>
            </div>
            <div class="col-md-6 order-2 order-md-1 p-20 p-md-40 text-center text-md-left">
                <h4 class="m-b-20 text-light">{$lang.hm_tt_5}</h4>
                <p class="m-b-20 text-justify text-light" style="max-width:400px;">{$lang.hm_tt_6}</p>
                <a href="/contactanos" class="btn btn-b-none text-dark" style="border-radius:40px;background-color:#fff;">{$lang.start_now}</a>
            </div>
        </div>
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-md-6">
                <figure style="height:400px;overflow:hidden;">
                    <img src="{$path.images}hm_2.png" alt="Cover" class="img-cover">
                </figure>
            </div>
            <div class="col-md-6 p-20 p-md-40 text-center text-md-left">
                <h4 class="m-b-20 text-light">{$lang.hm_tt_7}</h4>
                <p class="m-b-20 text-justify text-light" style="max-width:400px;">{$lang.hm_tt_8}</p>
                <a href="/contactanos" class="btn btn-b-none text-dark" style="border-radius:40px;background-color:#fff;">{$lang.start_now}</a>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 text-center">{$lang.hm_tt_9}</h2>
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow">
                        <i class="fas fa-hands-helping m-b-20" style="font-size:40px;"></i>
                        <h4 class="m-b-20">{$lang.hm_tt_11}</h4>
                        <p class="text-center">{$lang.hm_tt_12}</p>
                    </div>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow">
                        <i class="fas fa-hands-helping m-b-20" style="font-size:40px;"></i>
                        <h4 class="m-b-20">{$lang.hm_tt_13}</h4>
                        <p class="text-center">{$lang.hm_tt_14}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow">
                        <i class="fas fa-hands-helping m-b-20" style="font-size:40px;"></i>
                        <h4 class="m-b-20">{$lang.hm_tt_15}</h4>
                        <p class="text-center">{$lang.hm_tt_16}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#f2f2f2;">
        <div class="container">
            <h2 class="text-center">{$lang.hm_tt_17}</h2>
        </div>
    </section>
    <section style="background-color:#f2f2f2;">
        <div class="row no-gutters">
            <?php foreach ($global['projects'] as $value) : ?>
                <div class="col-md-4 pos-relative">
                    <figure style="height:400px;">
                        <img src="{$path.uploads}<?php echo $value['cover']; ?>" alt="Cover" class="img-cover">
                    </figure>
                    <a href="/proyectos/<?php echo $value['token']; ?>" class="pos-absolute d-flex align-items-center justify-content-center text-light" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);font-size:34px;"><?php echo $value['name']; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="p-20 text-center text-md-right">
            <a href="/proyectos" class="btn btn-b-none text-light" style="border-radius:40px;background-color:#263689;">{$lang.view_more_projects}</a>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#f2f2f2;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-0 text-center text-md-left">
                    <h2 class="m-b-20">{$lang.hm_tt_19}</h2>
                    <p class="m-b-20">{$lang.hm_tt_20}</p>
                    <a href="/contactanos" class="btn btn-b-none text-light" style="border-radius:40px;background-color:#263689;">{$lang.start_now}</a>
                </div>
                <div class="col-md-8 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow" style="background-color:#fff;">
                        <i class="fas fa-user-circle m-b-20" style="font-size:60px;color:#757575;"></i>
                        <h4 class="m-b-10">Alejandro Ruiz</h4>
                        <a href="tel:+9999317677" class="text-center text-dark">+ (999) 931 76 77</a>
                        <a href="mailto:contacto@gruporucon.com" class="text-center text-dark">contacto@gruporucon.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
