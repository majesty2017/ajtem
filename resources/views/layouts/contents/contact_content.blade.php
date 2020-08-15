<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/40.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <!-- Google Maps -->
                    <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3963.442765649097!2d0.4678668141611413!3d6.591760374196288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1597366232032!5m2!1sen!2sgh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Contact Info</h5>
                    </div>

                    <div class="contact-information mb-30">
                        <p>
                            We are ajtem who believe in the work and well being of our customers, partners and clients.
                            We are available 24/7 to support and answer your queries.
                        </p>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p><strong>The Managing Editor</strong> <br> African Journal of Technical Education and Management</p>
                                <address>
                                    Ho Technical University (HTU) <br>
                                    P. O. Box HP 217 <br>
                                    Ho - V/R <br>
                                    Ghana <br>
                                </address>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Email:</p>
                                <h6>ajtem@htu.edu.gh</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>For more information please contact the following:</p>
                                <ul>
                                    <li><a href=""><i class="fa fa-check"> Prof. Ben Honyenuga (+233 244515420)</i></a></li>
                                    <li><a href=""><i class="fa fa-check"> Dr. Peter K.A. Agbodza (+233 542442025)</i></a></li>
                                    <li><a href=""><i class="fa fa-check"> Mr. Magnus Akaba (+233 243483396)</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>GET IN TOUCH</h5>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @include('layouts.includes.partials.single_sidebar')
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
