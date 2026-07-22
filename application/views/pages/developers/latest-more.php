<div class="page">
    <!-- Page Header-->

    <!-- Single Product-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-6">
                    <div class="slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                            <?php foreach ($carousal as $item) { ?>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="<?php echo $item['parent']; ?>" alt="" width="530" height="480" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-slide-to-scroll="1" data-md-vertical="true">
                            <?php foreach ($carousal as $item) { ?>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="<?php echo $item['parent']; ?>" alt="" width="169" height="152" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product">
                        <h3><?php echo $details['Tittle'] ?></h3>
                        <div class="group-md group-middle">
                            <div class="single-product-price"><?php echo $details['sqft'] . ' SQFT' ?></div>
                            <div class="box-rating"><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star-half-o"></span></div>
                        </div>
                        <p><?php echo $details['features'] ?></p>
                        <div class="divider divider-30"></div>
                        <ul class="list list-description d-inline-block d-md-block">
                            <li><span>Tittle:</span><span><?php echo $details['Tittle'] ?></span></li>
                            <li><span>Type:</span><span><?php echo $details['type'] ?></span></li>
                            <li><span>Budget:</span><span><?php echo $details['budget'] ?></span></li>
                        </ul>
                        <div class="group-sm group-middle">

                            <div><a class="button button-secondary button-pipaluk" href="#tabs-5-1">Interested</a></div>
                        </div>
                        <div class="divider divider-40"></div>
                        <div class="group-md group-middle"><span class="social-title">Share</span>
                            <div>
                                <ul class="list-inline list-inline-sm social-list">
                                    <li><a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/PetalteArchitects"></a></li>
                                    <li><a class="icon fa fa-twitter" target="_blank" href="https://www.facebook.com/PetalteArchitects"></a></li>
                                    <li><a class="icon fa fa-google-plus" target="_blank" href="https://www.facebook.com/PetalteArchitects"></a></li>
                                    <li><a class="icon fa fa-instagram" target="_blank" href="https://www.facebook.com/PetalteArchitects"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Lists and Blockquote-->
            <section class="section section-sm section-last bg-default text-left">
                <div class="container">

                    <div class="row row-60 row-md-80 row-lg-90">
                        <div class="col-lg-8 col-xl-6">
                            <h3>Features </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Luxury Villa </li>
                                        <li>Swimming Pool</li>
                                        <li>Lagoon Pond with Rain water harvesting  </li>
                                        <li>CCTV across the common area  </li>
                                        <li>Children’s Play area, Park & Seating Facility </li>
                                        <li>Gym, Yoga Room, Indoor Games Room </li>
                                        <li>Waste Management, Street Lights   </li>



                                        </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <h3>Other Features </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Kunnathur Mana Ayurveda Heritage and Resort, PM Palace Event Centre, Kerala Sahithya Academy Kamala Surayya Cultural Centre, Schools, Collages, Mosque, Temple, Church, Government & Private Hospitals, Banks (SBI, Federal, Union, Kerala No:1, Cooperative, KSFE Etc), KSEB, Telephone Exchange, Post Office, Village, Panchayat, Supermarkets etc. all are about 500 meter around the Plot</li>
                                      


                                        </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row row-60 row-md-80 row-lg-90">
                        <div class="col-lg-8 col-xl-6">
                            <h3>Material Details </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>i. Sand Block Work - M Sand Concrete - M Sand</li>
                                        <li> Cement ACC, Malabar, Dalmia, Ramco, Chettinad, Ambuja </li>
                                        <li>Steel Kairali, Prince, Metcon, Vyshak </li>

                                        </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <h3>Plastering Ratio </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Roof Plastering 1:4 RCC Flat - 10cm thick slab with Leak Proof</li>
                                        <li>Wall Plastering 1:6</li>


                                        </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                  
                </div>
            </section>

 <!-- Tab panes-->
 <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-5-1">
                    <div class="box-comment">

                    </div>
                    <h5 class="text-spacing-100 font-weight-normal">Add Your Query</h5>
                    <form class="rd-form rd-mailform">
                        <div class="row row-14 gutters-14">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-your-name-4" type="text" name="name" data-constraints="@Required" />
                                    <label class="form-label" for="contact-your-name-4">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email-4" type="email" name="email" data-constraints="@Email @Required" />
                                    <label class="form-label" for="contact-email-4">Your E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-4">Message</label>
                                    <textarea class="form-input textarea-lg" id="contact-message-4" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-secondary button-pipaluk" type="submit">Submit</button>
                    </form>
                </div>

            </div>

          
        </div>
</div>
</section>



</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>