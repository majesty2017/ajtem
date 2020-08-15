<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/40.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>ABOUT US</h2>
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
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <!-- About Us Content -->
                <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>About Us</h5>
                    </div>
                    <p>
                        The African Journal of Technical Education and Management (AJTEM) is an international peer-reviewed
                        Journal with the aim of publishing research findings in the fields of Science,
                        Technology, Arts, Business and Management Education. It embodies a blend of an interdisciplinary
                        community of researchers, academics and practitioners (including policy makers) as its contributors
                        and for its readership.
                    </p>
                    <p>
                        The Journal is published twice in a year. The first in June and the second in December.
                        The Journal publishes solicited (through conference call)
                        and unsolicited (through online platform) manuscripts.
                    </p>
{{--                    Interest--}}
                    <h6>AREAS OF INTEREST</h6>
                    <p>The main areas to be covered by the Journal shall include:</p>
                    <ul>
                        <li><i class="fa fa-check"></i> Science and Engineering (All fields of Science and Engineering including Building Technology and Survey works)</li>
                        <li><i class="fa fa-check"></i> Technology and Innovation (including ICT).</li>
                        <li><i class="fa fa-check"></i> Applied Sciences (including Statistics, Environmental Studies, Hospitality and Tourism)</li>
                        <li><i class="fa fa-check"></i> Business and Management (including Accounting, Banking and Finance, International Business, Marketing, Secretaryship, Purchasing and Supply, Planning and Logistics)</li>
                        <li><i class="fa fa-check"></i> Social Sciences (including Economics, Development, Education)</li>
                        <li><i class="fa fa-check"></i> The Arts (including Fashion Design, Industrial Art, Jewelry and Cosmetology).</li>
                    </ul>
{{--                    category--}}
                    <h6>ARTICLE CATEGORIES</h6>
                    <p>The main areas to be covered by the Journal shall include:</p>
                    <ul>
                        @foreach($categories as $category)
                        <li><i class="fa fa-check"></i> {{$category->name}}</li>
                        @endforeach
                    </ul>
                    {{--                    REVIEW PROCESS--}}
                    <h6>REVIEW PROCESS</h6>
                    <p>
                        Submission of an article to AJTEM implies that the research described has not been published
                        previously (except in the form of an abstract or an academic dissertation, thesis or research
                        project). The covering letter should explicitly state that the manuscript is not under consideration
                        for publication elsewhere. It is important that all authors approve the submission of the manuscript
                        for consideration for publication. To verify originality, all manuscripts submitted to AJTEM will be
                        checked using originality detection software. Following, every manuscript submitted to AJTEM shall
                        undergo double blind review. Three reviewers shall be assigned to review the manuscript and responses
                        from at least two reviewers and the Editor’s review of the paper shall be used to make a decision to
                        accept the paper or not.
                    </p>
                    {{--                    ETHICS POLICY--}}
                    <h6>ETHICS POLICY</h6>
                    <p>
                        For all submitted manuscripts involving human participants’ research conducted by one or more of
                        the authors, the authors must communicate the following to the editors before the manuscript can
                        be reviewed. (1) The authors have obtained approval from all appropriate Institutional Review
                        Boards or equivalent institutional oversight authorities and (2) the data collection efforts do not
                        involve deception of human subjects even if the protocol was approved by all appropriate
                        Institutional Review Boards. If authors are uncertain whether their data collection procedure
                        involved deception, please contact one of the editors.
                    </p>
                    <img class="mt-15" src="{{ asset('assets/img/bg-img/35.jpg') }}" alt="">

                    <!-- Team Member Area -->
                    <div class="section-heading mt-30">
                        <h5>Our Team</h5>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/36.jpg') }}" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mrs. Susan Monroe</h6>
                            <span>Reporter</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/37.jpg') }}" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mr. Luke Garner</h6>
                            <span>Editor in Chief</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/38.jpg') }}" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Ms. Elena Korikova</h6>
                            <span>Marketer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/39.jpg') }}" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mr. Tom Wellington</h6>
                            <span>Photographer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.includes.partials.single_sidebar')
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->
