<?php defined('_EXEC') or die; ?>

<main>
    <section class="pos-relative" style="height:70vh;">
        <figure style="height:100%;">
            <img src="{$path.images}sv_1.png" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-end align-items-md-center p-20 p-md-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);">
            <div class="container">
                <h1 class="m-b-20 text-center text-light">{$lang.sv_tt_1}</h1>
                <div class="d-flex justify-content-center m-b-20 m-b-md-0">
                    <a href="/contactanos" class="btn" style="width:100%;max-width:200px;border:0px;border-radius:40px;background-color:#263689;">{$lang.contact_us}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40 m-b-0 m-b-md-20">
        <div class="container">
            <div class="pos-relative">
                <div class="pos-absolute pos-mobile-auto" style="width:100%;top:-120px;">
                    <div class="row">
                        <div id="service" class="col-md-3 m-b-20 m-b-md-0">
                            <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow" style="height:180px;background-color:#fff;transition:400ms;">
                                <i class="fas fa-hard-hat m-b-20" style="font-size:40px;"></i>
                                <h4 class="m-b-5">{$lang.sv_tt_3}</h4>
                                <p class="text-center">{$lang.sv_tt_4}</p>
                            </div>
                        </div>
                        <div id="service" class="col-md-3 m-b-20 m-b-md-0">
                            <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow" style="height:180px;background-color:#fff;transition:400ms;">
                                <i class="fas fa-road m-b-20" style="font-size:40px;"></i>
                                <h4 class="m-b-5">{$lang.sv_tt_5}</h4>
                                <p class="text-center">{$lang.sv_tt_6}</p>
                            </div>
                        </div>
                        <div id="service" class="col-md-3 m-b-20 m-b-md-0">
                            <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow" style="height:180px;background-color:#fff;transition:400ms;">
                                <i class="fas fa-paint-roller m-b-20" style="font-size:40px;"></i>
                                <h4 class="m-b-5">{$lang.sv_tt_7}</h4>
                                <p class="text-center">{$lang.sv_tt_8}</p>
                            </div>
                        </div>
                        <div id="service" class="col-md-3">
                            <div class="p-20 d-flex align-items-center justify-content-center flex-column bx-shadow" style="height:180px;background-color:#fff;transition:400ms;">
                                <i class="fas fa-city m-b-20" style="font-size:40px;"></i>
                                <h4 class="m-b-5">{$lang.sv_tt_9}</h4>
                                <p class="text-center">{$lang.sv_tt_10}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 text-center">{$lang.sv_tt_11}</h2>
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column">
                        <h3 class="m-b-20" style="font-size:60px;color:#19213c;">+8</h3>
                        <h4 class="text-center">{$lang.sv_tt_12}</h4>
                    </div>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column">
                        <h3 class="m-b-20" style="font-size:60px;color:#19213c;">+10,000</h3>
                        <h4 class="text-center">{$lang.sv_tt_14}</h4>
                    </div>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="p-20 d-flex align-items-center justify-content-center flex-column">
                        <h3 class="m-b-20" style="font-size:60px;color:#19213c;">+25</h3>
                        <h4 class="text-center">{$lang.sv_tt_16}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="p-20 p-md-40" style="background-color:#f2f2f2;">
        <div class="container">
            <h2 class="m-b-20 text-center">{$lang.sv_tt_18}</h2>
            <p class="m-b-20 text-center">{$lang.sv_tt_19}</p>
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <div class="row no-gutters m-b-20">
                        <div class="col-4 order-1 order-md-2">
                            <span class="m-circle">1</span>
                        </div>
                        <div class="col-8 order-2 order-md-1 p-l-10 p-l-md-0 p-r-0 p-r-md-10">
                            <h4 class="m-b-5 text-left text-md-right"><strong>{$lang.step} 1</strong></h4>
                            <p class="text-left text-md-right">{$lang.sv_tt_20}</p>
                        </div>
                    </div>
                    <div class="row no-gutters m-b-20">
                        <div class="col-4 order-1 order-md-2">
                            <span class="m-circle">2</span>
                        </div>
                        <div class="col-8 order-2 order-md-1 p-l-10 p-l-md-0 p-r-0 p-r-md-10">
                            <h4 class="m-b-5 text-left text-md-right"><strong>{$lang.step} 2</strong></h4>
                            <p class="text-left text-md-right">{$lang.sv_tt_21}</p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-4 order-1 order-md-2">
                            <span class="m-circle">3</span>
                        </div>
                        <div class="col-8 order-2 order-md-1 p-l-10 p-l-md-0 p-r-0 p-r-md-10">
                            <h4 class="m-b-5 text-left text-md-right"><strong>{$lang.step} 3</strong></h4>
                            <p class="text-left text-md-right">{$lang.sv_tt_22}</p>
                        </div>
                    </div>
                </div>
                <div data-desktop class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="d-flex align-items-center justify-content-center" style="width:300px;height:300px;border-radius:50%;border:5px solid #e0e0e0;">
                            <span style="width:200px;height:200px;border-radius:50%;background-color:#263689;"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row no-gutters m-b-20">
                        <div class="col-4">
                            <span class="m-circle">4</span>
                        </div>
                        <div class="col-8 p-l-10">
                            <h4 class="m-b-5"><strong>{$lang.step} 4</strong></h4>
                            <p>{$lang.sv_tt_23}</p>
                        </div>
                    </div>
                    <div class="row no-gutters m-b-20">
                        <div class="col-4">
                            <span class="m-circle">5</span>
                        </div>
                        <div class="col-8 p-l-10">
                            <h4 class="m-b-5"><strong>{$lang.step} 5</strong></h4>
                            <p>{$lang.sv_tt_24}</p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-4">
                            <span class="m-circle">6</span>
                        </div>
                        <div class="col-8 p-l-10">
                            <h4 class="m-b-5"><strong>{$lang.step} 6</strong></h4>
                            <p>{$lang.sv_tt_25}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</main>
