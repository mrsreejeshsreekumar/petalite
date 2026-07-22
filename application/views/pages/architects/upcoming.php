    <!-- Improve your interior with deco-->
    
    <div class="page">
    <section class="section section-sm bg-default">
        <div class="container">
        
          <div class="heading-panel-left heading-panel-left-1">
              <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft">Architects </span></h1>
              <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s">Petalite Architects</span></h4>
            </div>
            <div class="row row-30" data-lightgallery="group">
            <div class="col-sm-12 col-lg-12">
              <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
               </div>
            </div>

          <div class="row row-30" data-lightgallery="group">
          <?php foreach ($archi_pics as $item) { ?>
          <div class="col-sm-6 col-lg-4">
        
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                  <div class="thumbnail-mary-figure">
                    <img src="<?php echo $item['thumb'] ?>" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a class="icon fl-bigmug-line-zoom60" href="<?php echo $item['thumb'] ?>" data-lightgallery="item">
                    <img src="<?php echo $item['thumb']  ?>" alt="" width="370" height="303"/></a>
                    <h5 class="thumbnail-mary-title"><a><?php echo $item['title']  ?></a></h5>
                  </div>
                </article>
              </div>
            
            </div>
            <?php } ?>


          </div>
        </div>
      </section>
    </div>
