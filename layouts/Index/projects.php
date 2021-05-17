<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['js', '{$path.js}Index/projects.js?v=1.0']);

?>

<main>
    <?php if ($global['render'] == 'list') : ?>
        <section class="d-flex align-items-end p-20 p-md-40" style="height:50vh;background-color:#fff;">
            <div class="container m-b-0 m-b-md-40">
                <h1 class="text-center text-dark">{$lang.pj_tt_1}</h1>
            </div>
        </section>
        <section>
            <div class="row no-gutters">
                <?php foreach ($global['projects'] as $value) : ?>
                    <div class="col-md-3 pos-relative">
                        <figure style="height:300px;">
                            <img src="{$path.uploads}<?php echo $value['cover']; ?>" alt="Cover" class="img-cover">
                        </figure>
                        <a href="/proyectos/<?php echo $value['token']; ?>" class="pos-absolute d-flex align-items-center justify-content-center text-light" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);font-size:34px;"><?php echo $value['name']; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php elseif ($global['render'] == 'details') : ?>
        <?php if (!empty($global['project']['gallery'])) : ?>
            <section id="slideshow" class="pos-relative">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($global['project']['gallery'] as $value) : ?>
                        <figure class="item" style="height:400px;">
                            <img src="{$path.uploads}<?php echo $value; ?>" alt="Gallery" class="img-cover">
                        </figure>
                    <?php endforeach; ?>
                </div>
                <a data-action="prev_slideshow" class="btn btn-dark pos-absolute" style="top:180px;left:20px;z-index:97;"><i class="fas fa-chevron-left"></i></a>
                <a data-action="next_slideshow" class="btn btn-dark pos-absolute" style="top:180px;right:20px;z-index:97;"><i class="fas fa-chevron-right"></i></a>
            </section>
        <?php else : ?>
            <section class="p-40"></section>
        <?php endif; ?>
        <section class="p-20 p-md-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 m-b-20 m-b-md-0">
                        <h2 class="m-b-20"><?php echo $global['project']['name']; ?></h2>
                        <p class="m-b-20 text-justify"><?php echo $global['project']['description'][Session::get_value('lang')]; ?></p>
                        <figure>
                            <img src="{$path.uploads}<?php echo $global['project']['cover']; ?>" class="img-cover">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="btn btn-light bx-shadow d-flex align-items-start justify-content-center flex-column m-b-20"><strong>{$lang.pj_tt_3}</strong> <?php echo $global['project']['architecture']; ?></a>
                        <a href="" class="btn btn-light bx-shadow d-flex align-items-start justify-content-center flex-column m-b-20"><strong>{$lang.pj_tt_4}</strong> <?php echo $global['project']['location']; ?></a>
                        <a href="" class="btn btn-light bx-shadow d-flex align-items-start justify-content-center flex-column m-b-20"><strong>{$lang.pj_tt_5}</strong> <?php echo $global['project']['specs']; ?></a>
                        <a href="" class="btn btn-light bx-shadow d-flex align-items-start justify-content-center flex-column m-b-20"><strong>{$lang.pj_tt_6}</strong> <?php echo $global['project']['start']; ?></a>
                        <a href="https://<?php echo $global['project']['website']; ?>" target="_blank" class="btn btn-light bx-shadow d-flex align-items-start justify-content-center flex-column"><strong>{$lang.pj_tt_7}</strong> <?php echo $global['project']['website']; ?></a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>
