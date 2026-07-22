<div class="page">


  <!-- Section Pricing-->
  <section class="section section-sm section-last bg-default">
    <div class="container">
        
    <div class="heading-panel-left heading-panel-left-1">
              <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft">Petalite </span></h1>
              <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s">Developers</span></h4>
            </div>
            <div class="row row-30" data-lightgallery="group">
            <div class="col-sm-12 col-lg-12">
              <p style="display: flex;">We offer 3 different budget to customers</p>
               </div>
            </div>
   
        <div class="row row-30 justify-content-center">
        <?php foreach ($features as $item) { ?>
           <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="box-pricing box-pricing-black box-pricing-popular">
              <div class="box-pricing-body">
                <h5 class="box-pricing-title"><?php echo $item['tittle'] ?></h5>
                <h3 class="box-pricing-price"><?php echo $item['rate'] ?></h3>
                <div class="box-pricing-time">Sq Feet</div>
                <div class="box-pricing-divider">
                  <div class="divider"></div><span><?php echo $item['tittle'] ?></span>
                </div>
                <ul class="box-pricing-list">
                <?php foreach ($item['Features'] as $newFeature) { ?>
                  <li class="active"><?php echo $newFeature; ?></li>
                 <?php }?>
                </ul>
              </div>
              <div class="box-pricing-button"><a class="button button-lg button-block button-secondary" href="<?php echo base_url('More-Info-Projects/'.$item["id"])?>">More...</a></div>
              <div class="box-pricing-badge">popular</div>
            </div>
          </div>
          <?php } ?>
         
        </div>

    </div>

  </section>


</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>