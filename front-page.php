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
    <div class="page-content">
      <div class="card wedding-card">
        <div class="content">
        
          <h2 class="title">Boda</h2>
          <p class="copy">Descubre nestros servicios de diseño, coordinación, integral y dia B.</p>
          <button class="btn" onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'" >Ver Más</button>
        </div>
      </div>
      <div class="card social-event">
        <div class="content">
          <h2 class="title">Evento Social</h2>
          <p class="copy">¡Te montamos y ayudamos a crear un eventazo con nuestro equipo de Event Designers!</p>
          <button class="btn" onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'">Ver Más</button>
        </div>
      </div> 
      <div class="card enterprise-event">
        <div class="content">
          <h2 class="title">Evento de Empresa</h2>
          <p class="copy">Haz de tus reuniones y eventos un gran éxito, olvidándote de las preocupaciones.</p>
          <button class="btn" onclick="window.location.href='<?php echo get_permalink( get_page_by_path( 'wedding' ) ); ?>'">Ver Más</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>