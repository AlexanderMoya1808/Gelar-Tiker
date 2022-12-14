<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Shop!</div>
        <div class="masthead-heading text-uppercase">We Prepare All Good Stuff For You!!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Explore Now!</a>
    </div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Find Your Favorite Bag</h2>
            <h3 class="section-subheading text-muted">Best Place For Your Fashion</h3>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-2 col-sm-3 col-md-2 ">
                        <button class="m-0 float-left ml-5 mr-3 btn btn-primary" id="sort" onclick="sorting()" data-flag="1"><i class="sortIcon fas fa-fw fa-sort-alpha-down"></i></button>
                    </div>
                    <div class="col-8 col-sm-6 col-md-8">
                        <form class="form-inline d-flex md-form form-sm active-cyan active-cyan-2 mt-2 mb-3">
                            <i class="fas fa-fw fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-1 w-75" name="search_text" id="search_text" type="text" placeholder="Search Name / Desc" aria-label="Search">
                        </form>
                    </div>
                    <div class="col-2 col-sm-6 col-md-2">
                        <form class="form-inline d-flex md-form form-sm active-cyan active-cyan-2 mt-2 mb-3">
                            <input class=" form-control form-control-sm ml-0 w-75" name="maximum" id="maximum" type="text" placeholder="Max Price" aria-label="min">
                            <input class=" form-control form-control-sm ml-0 w-75" name="minimum" id="minimum" type="text" placeholder="Min Price" aria-label="max">
                        </form>
                    </div>
                </div>
            </div>

            <!-- button buat filter -->
            <div class="category mb-5">
                <button class="btn badge badge-primary mr-2 filter" value=""> All </button>|
                <?php foreach ($category as $c) : ?>
                    <button class="btn badge badge-primary mr-2 filter" value="<?= $c['category_name'] ?>">
                        <!-- value nya buat identifier filter yg di klik di javascriptnya 
                            class filter buat ngetrigger jquery-->
                        <?= $c['category_name'] ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row" id="result">

        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Order System</h2>
            <h3 class="section-subheading text-muted">Our fulfillment system has been standarized to ensure best customer experience.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('assets/img/misc/payment_confirmation.jpg'); ?>" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Step One</h4>
                        <h4 class="subheading">Order and Confirm Payment</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">After choosing your items, finalize order and make payment on our payment channels.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('assets/img/misc/warehouse.jpg'); ?>" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Step Two</h4>
                        <h4 class="subheading">Process Order</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">After payment has been confirmed, our warehouse team will prepare your order for shipment.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('assets/img/misc/shipment.jpg'); ?>" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Step Three</h4>
                        <h4 class="subheading">Shipment</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Order that has been processed will be shipped with our courier partners.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('assets/img/misc/done.jpg'); ?>" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Step Four</h4>
                        <h4 class="subheading">Order Completion</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">After your order has been received, please confirm shipment or contact us if you have any inquiry.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4> Use it <br/> and <br/> Enjoy!</h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Clients-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/misc/jne.jpg'); ?>" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/misc/sicepat.jpg'); ?>" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/misc/anteraja.jpg'); ?>" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/misc/gosend.jpg'); ?>" alt="" /></a>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
            </div>
        </form>
    </div>
</section>