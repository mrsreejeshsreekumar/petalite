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
                            <h3>Foundation & Basement (Random Rubble Masonry)</h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Foundation (60 Width X 75 Height) cm </li>
                                        <li>Basement (45 Width X 60 Height) cm or Same level of the existing </li>
                                        <li>RCC Belt Including 15cm Thick RCC Belt and throughout the building Ratio 1:2:4 </li>

                                        </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <h3>Super Structure</h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Solid Block Work Ground Floor - Solid Block Work Masonry (24cm Thick Wall)</li>
                                        <li>(with cement mortar 1:7 Ratio & height of the roof 3.10Meter )</li>
                                        <li>including the 10cm thick slab </li>

                                        </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row row-60 row-md-80 row-lg-90">
                        <div class="col-lg-8 col-xl-6">
                            <h3>Lintel Works </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Lintel would be placed on the entire wall (Lintel at 2.1m)</li>
                                        <li>8" mm Steel bar 4No's with Stirrups </li>
                                        <li>21cm width or Same as the wall width and 15cm thick , Ratio 1:2:4 </li>

                                        </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <h3>Roof Slab </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>RCC Flat - 10cm thick slab with Leak Proof</li>
                                        <li>Ratio - 1:2:4, Using 20mm 3/4" normal size brocken stone </li>


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
                            <h3>ELECTRICAL WORKS </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Wires - V Guard (ISI Marked)</li>
                                        <li>Modular Switches - V Guard (ISI Marked)</li>
                                        <li>ELCB & Circuit Breaker - Standard / Havells.</li>
                                        <li>Provision for Fittings - Tube lights, fan, fancy fittings, chandelier,exhaust fan, A/C etc.</li>
                                        <li>Geyser provision in all bath rooms</li>
                                        <li>Exhaust fan for all bath rooms</li>


                                        </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row row-60 row-md-80 row-lg-90">
                        <div class="col-lg-8 col-xl-6">
                            <h3>Provisions for bed room </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>Two Numbers of Light Points</li>
                                        <li> One Ceiling Fan Point </li>
                                        <li>One A/C Point (For All Bed rooms, Living & Dining)</li>
                                        <li>Two Numbers of Plug Points & enough switches </li>
                                        <li>Two way control for 1 light point & fan point for bed room and staircase </li>
                                        </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <h3>PLUMBING & SANITATION </h3>
                            <div class="row row-sm row-30">
                                <div class="col-sm-12">
                                    <ol class="list-ordered">
                                        <li>PVC Pipes - ISI Marked</li>
                                        <li>C.P. Fitting : Capstone / Zew or Equivalent</li>
                                        <li>Long Body Taps</li>
                                        <li>Health Faucets</li>
                                        <li>Angle Valves</li>
                                        <li>Shower set </li>
                                        <li>Pillar Taps for Bathrooms </li>
                                        <li>Pillar Taps For Hall </li>
                                        <li>W Closet (Fullset) </li>
                                        <li>Wash Basin - Bath Room </li>
                                        <li>Wash Basin - Dining </li>






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