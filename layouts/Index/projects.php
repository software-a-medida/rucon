<?php defined('_EXEC') or die; ?>

<main>
    <?php if ($global['render'] == 'list') : ?>
        <section class="d-flex align-items-end p-20 p-md-40" style="height:50vh;background-color:#fff;">
            <div class="container m-b-40">
                <h1 class="m-b-20 text-center text-dark">{$lang.pj_tt_1}</h1>
                <p class="text-center text-dark">{$lang.pj_tt_2}</p>
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
        <!--  -->
    <?php endif; ?>
</main>
