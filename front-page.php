<?php get_header() ?>
<div class="front-page">
    <div class="parallax">
        <div>
            <h1 class="secondary-color">HAPPINESS BEGINS</h1>
            <p><b>Wedding Planners and Event designers</b></p>
            <p>En Happiness Begins ofrecemos un servicio exclusivo, a medida y demanda de nuestros clientes</p>
            <p>Es por eso que no tenemos precios cerrados ni acordados; eloboramos un presupuesto personalizado para cada uno de nuestros clientes, centrándonos en sus peticiones y necesidades.</p>
        </div>

    </div>

    <div class="container">
        <h1 class="text-center primary-color">Que necesitas</h1>
        <div class="types">

            <div class="card">
                <?php
                $wedding =  get_template_directory_uri() . '/assets/images/wedding.jpg';
                ?>
                <div class="image" style="background-image: url(<?php echo $wedding ?>);"></div>
                <div class="button-effect">
                <button class="bttn-pill bttn-md bttn-danger"onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'">Boda</button>

                </div>
            </div>
            <div class="card">
                <?php
                $social_event =  get_template_directory_uri() . '/assets/images/evento-social.jpeg';
                ?>
                <div class="image" style="background-image: url(<?php echo $social_event ?>);"></div>
                <button class="bttn-pill bttn-md bttn-danger"onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'">Evento Social</button>

           
            </div>
            <div class="card">
                <?php
                $bussines =  get_template_directory_uri() . '/assets/images/entrepreneur.png';
                ?>
                <div class="image" style="background-image: url(<?php echo $bussines ?>);"></div>
                <button class="bttn-pill bttn-md bttn-danger"onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'">Evento de Empresa</button>
            </div>

        </div>

    </div>
</div>


<?php get_footer() ?>