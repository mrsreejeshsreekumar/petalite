    <!-- Improve your interior with deco-->
    
    <div class="page">
    <section class="section section-sm bg-default">
        <div class="container">
        
          <div class="heading-panel-left heading-panel-left-1">
              <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft">Petalite </span></h1>
              <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s">Electricals</span></h4>
            </div>
            <div class="row row-30" data-lightgallery="group">
            <div class="col-sm-12 col-lg-12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
            </div>
            <section class="section section-xl bg-default">
        <div class="container">
          <div class="row row-90 justify-content-center">
            <div class="col-lg-12 col-xl-12">
            
              <div class="row row-lg row-40">
              <?php foreach ($products as $item) { ?>
                <div class="col-sm-6 col-md-4">
                  <!-- Product-->
                  <article class="product">
                    <div class="product-figure"><img src="<?php echo $item['img'] ?>" alt="" width="270" height="280"/>
                      <div class="product-button"><a class="button button-md button-white button-ujarak" href=""><?php echo $item['title'] ?></a></div>
                    </div>
                    <h5 class="product-title"><a href=""><?php echo $item['title'] ?></a></h5>
                    <div class="product-price-wrap">
                      <div class="product-price"><?php echo $item['feature'] ?></div>
                    </div>
                  </article>
                </div>
                <?php }?>
              
              </div>
           
          </div>
        </div>
      </section>
      </section>
    </div>
