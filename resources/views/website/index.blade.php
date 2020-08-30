@extends('website.components.layout')

@section('title')
    glory tech bd
@endsection

@section('content')


        <!-- Home Section -->
        <section class="home_section" id="home">
            <!-- Background Videos -->
            <div class="home_bg">
                <video class="home_vidieo" autoplay muted loop>
                    <source src="{{asset('assets/website/videos/banner-video.mp4')}}" type="video/mp4">
                    <source src="{{asset('assets/website/videos/banner-video.webm')}}" type="video/webm">
                    <source src="{{asset('assets/website/videos/banner-video.ogv')}}" type="video/ogv">
                </video>
            </div>

            <!-- Home Background Overlay -->
            <div class="home_overlay"></div>

            <!-- Home Content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="home_content wow fadeInUp" data-wow-duration="3s" data-wow-delay="1s">
                            <div class="home_titele">
                                <div class="home_title_01 mb_15">
                                    <h5 class="home_first_title">Welcome To</h5>
                                </div>
                                <div class="home_title-02 mb_15">
                                    <h1><span>Gl<span class="white">o</span>ry </span> Creative Agency</h1>
                                </div>

                                <div class="home_text_title">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatibus veniam
                                        enim!</p>
                                </div>

                                <div class="home_button mt_30">
                                    <a href="#contact" class="btn custom_btn home_btn smooth_scroll">Contact Us <span><i
                                                class="fas fa-phone-alt"></i></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topTobottom_button">
                <a href="#about" class="btn toptobottom_btn smooth_scroll"><i class="ion-chevron-down"></i></a>
            </div>
        </section>

        <section class="about_setion section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>Who we are?</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="about_left_content my_10 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="about_left_img">
                                <img src="{{asset('assets/website/img/about.jpg')}}" alt="" class="img-fluid about_img p_10">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_right_content my_10 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="about_right_content_title mb_10">
                                <h6>Gl<span>o</span>ry Technologies | BD</h6>
                            </div>
                            <div class="about_left_text">
                                <p class="about_text_01 mb_10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                                    culpa inventore porro perferendis dolore doloribus totam. Suscipit, voluptatum! Porro
                                    tenetur cumque, natus pariatur expedita magni neque? Aperiam sunt nihil ut.</p>
                                <p class="about_text_02">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                                    culpa inventore porro perferendis dolore doloribus totam. Suscipit, voluptatum! Porro
                                    tenetur cumque, natus pariatur expedita magni neque? Aperiam sunt nihil ut.</p>
                            </div>

                            <div class="about_button_group mt_20">
                                <a href="#" class="btn custom_btn join_btn smooth_scroll">Join With Us <span><i
                                            class="fas fa-user-plus"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="about_item text-center my_15 py_20 px_10 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <div class="about_item_icon mb_15">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="about_item_title mb_20">
                                <h4>Mission</h4>
                            </div>
                            <div class="about_item_text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsa voluptate animi
                                    ducimus assumenda consequuntur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="about_item text-center my_15 py_20 px_10 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".3s">
                            <div class="about_item_icon mb_15">
                                <i class="far fa-eye"></i>
                            </div>
                            <div class="about_item_title mb_20">
                                <h4>Vision</h4>
                            </div>
                            <div class="about_item_text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsa voluptate animi
                                    ducimus assumenda consequuntur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="about_item text-center my_15 py_20 px_10 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".6s">
                            <div class="about_item_icon mb_15">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="about_item_title mb_20">
                                <h4>Ambition</h4>
                            </div>
                            <div class="about_item_text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsa voluptate animi
                                    ducimus assumenda consequuntur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="about_item text-center my_15 py_20 px_10 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".6s">
                            <div class="about_item_icon mb_15">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="about_item_title mb_20">
                                <h4>Passion</h4>
                            </div>
                            <div class="about_item_text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsa voluptate animi
                                    ducimus assumenda consequuntur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->


        <!-- Service Section -->
        <section class="service_section section" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>What We do?</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">

                    <!-- Service Item 01 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service_item my_30 p_30 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <div class="service_icon">
                                <i class="ion-android-color-palette"></i>
                            </div>
                            <div class="service_details mt_15">
                                <div class="service_item_title">
                                    <h4>Graphice Design</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 02 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="service_item my_30 p_30 text-center">
                            <div class="service_icon">
                                <i class="ion-social-html5"></i>
                            </div>
                            <div class="service_details mt_15">
                                <div class="service_item_title">
                                    <h4>Web Design</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 03 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service_item my_30 p_30 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".4s">
                            <div class="service_icon">
                                <i class="ion-code-working"></i>
                            </div>
                            <div class="service_details mt_15">
                                <div class="service_item_title">
                                    <h4>Development</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Service Item 04 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service_item my_30 p_30 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".6s">
                            <div class="service_icon">
                                <i class="ion-social-wordpress"></i>
                            </div>
                            <div class="service_details service_d_details mt_15">
                                <div class="service_item_title">
                                    <h4>wordpress</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 05 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service_item my_30 p_30 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".8s">
                            <div class="service_icon">
                                <i class="ion-social-chrome"></i>
                            </div>
                            <div class="service_details service_d_details mt_15">
                                <div class="service_item_title">
                                    <h4>Browser</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 06 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service_item my_30 p_30 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="1s">
                            <div class="service_icon service_d_style_icon">
                                <i class="ion-heart"></i>
                            </div>
                            <div class="service_details service_d_details mt_15">
                                <div class="service_item_title">
                                    <h4>24/7 support</h4>
                                </div>
                                <div class="service_text mt_15">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus modi numquam ad
                                        facere eaque sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Service Section End -->


        <!-- Portfolio Section -->

        <section class="portfolio_section section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>Our Letest Work!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Our Portfolio</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">

                    <!-- Portfolio Item 01 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-1.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-1.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 02 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-2.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-2.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 03 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-3.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-3.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 04 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-4.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-4.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 05 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-5.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-5.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 06 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio_item my_15 p_5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="portfolio_item_img portfolio_d_item_img">
                                <a class="image-link" href="{{asset('assets/website/img/portfolio/p-6.jpg')}}">
                                    <div class="portfolio_overlay"></div>
                                    <div class="portfolio_img_icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <img src="{{asset('assets/website/img/portfolio/p-6.jpg')}}" alt="" class="img-fluid portfolio_img">
                                </a>
                            </div>
                            <div class="portfolio_item_details p_20">
                                <div class="portfolio_item_name_01">
                                    <h6>Design</h6>
                                </div>
                                <div class="portfolio_item_name_02">
                                    <h5><a href="#">BTBD Portfolio Site</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->


        <section class="presentation_section section" id="presentation">
            <div class="presentation_section_overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sub_section_title px_15 py_5 ">
                            <h4>Our Video Presentation</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <div class="presentation_heading">
                            <h3 class="mb_20">Creative & perfect agency to help you to grow up your business.</h3>
                        </div>
                        <div class="presentation_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores non est placeat
                                molestias
                                magnam unde.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <div class="presentation_button">
                            <button class="btn presentation_btn"><i class="ion-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="skill_section section" id="skill">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>We are Skilled!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Our Expert Team</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-6">
                        <div class="all_teams_text my_15">
                            <div class="teams_skill_title mb_10">
                                <h6>About <b>Gl<span>o</span>ry</b> Technologies Team members!</h6>
                            </div>
                            <div class="teams_skill_text pr_20">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, non tenetur.
                                    Fugiat quos unde porro ad eaque molestias, sed illum sint rem et fuga expedita placeat
                                    rerum voluptate exercitationem tempore quod minus velit delectus! Possimus facilis
                                    praesentium, obcaecati nam debitis est minima quas alias commodi, culpa quos
                                    reprehenderit, dolores fuga. Possimus facilis
                                    praesentium, obcaecati nam debitis est minima quas alias commodi, culpa quos
                                    reprehenderit, dolores fuga.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div id="skill-bar-wrapper" class="work_skill my_15">

                            <div class="skill_step my_15">
                                Photograpy<span style="float:right;">75%</span>
                                <div class="skillbar-container clearfix mt_10" data-percent="75%">
                                    <div class="skills"></div>
                                </div>
                            </div>

                            <div class="skill_step my_15">
                                Graphic Design<span style="float:right;">80%</span>
                                <div class="skillbar-container clearfix mt_10" data-percent="80%">
                                    <div class="skills"></div>
                                </div>
                            </div>
                            <div class="skill_step my_15">
                                Web Design<span style="float:right;">90%</span>
                                <div class="skillbar-container clearfix mt_10" data-percent="90%">
                                    <div class="skills"></div>
                                </div>
                            </div>
                            <div class="skill_step my_15">
                                Web Development<span style="float:right;">70%</span>
                                <div class="skillbar-container clearfix mt_10" data-percent="70%">
                                    <div class="skills"></div>
                                </div>
                            </div>
                            <div class="skill_step my_15">
                                Marketting<span style="float:right;">60%</span>
                                <div class="skillbar-container clearfix mt_10" data-percent="60%">
                                    <div class="skills"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="all_team_members owl-carousel owl-theme">



                            <!-- Team Member 1 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/5.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>MH Munir</h6>
                                        <p>Web Designer & Developer</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <!-- Team Member 2 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/6.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>Farhad Hossain</h6>
                                        <p>Senior Web Developer</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <!-- Team Member 3 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/1.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>AB Sumon</h6>
                                        <p>Web Developer</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>



                            <!-- Team Member 4 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/2.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>Nayamat Ullah</h6>
                                        <p>Front End Developer</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <!-- Team Member 5 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/3.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>SM Shahariar</h6>
                                        <p>SEO</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                            <!-- Team Member 6 -->
                            <div class="team_member text-center my_15">
                                <div class="team_member_img">
                                    <img src="{{asset('assets/website/img/team/4.jpg')}}" alt="Team Member" class="img-fluid p_5">
                                </div>
                                <div class="team_member_details p_10">
                                    <div class="member_title">
                                        <h6>Mehedi Hasan</h6>
                                        <p>Jonior Front End Developer</p>
                                    </div>
                                    <div class="member_social_icons mt_10">
                                        <ul>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li class="member_social_item mr_5">
                                                <a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Stats Section -->
        <section class="stats_section section" id="stats">
            <div class="container">
                <div class="row">

                    <!-- Stats Item 01 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="stats_item text-center my_15 stats_item_style  wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <h5 style="color: #FC6A8D;"><span class="counter">780</span></h5>
                            <h6 class="counter_title mt_15">Happy Clients</h6>
                        </div>
                    </div>

                    <!-- Stats Item 02 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="stats_item text-center my_15 stats_item_style  wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".6s">
                            <h5 style="color: #2AAFC0;">+<span class="counter">90</span></h5>
                            <h6 class="counter_title mt_15">Project Complited</h6>
                        </div>
                    </div>

                    <!-- Stats Item 03 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="stats_item text-center my_15 stats_item_style  wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".6s">
                            <h5 style="color: #93CC48">+<span class="counter">1,200</span></h5>
                            <h6 class="counter_title mt_15">File Download</h6>
                        </div>
                    </div>

                    <!-- Stats Item 04 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="stats_item text-center my_15  wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <h5 style="color: #FFBC00;"><span class="counter">100</span>%</h5>
                            <h6 class="counter_title mt_15">Satisfied Clients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section End-->

        <!-- Testimonial Section -->
        <section class="testimonial_section section" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>What say clients about us!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Testimonials</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="all_client_items owl-carousel owl-theme">

                            <!-- Testimonial 01 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Design Quality "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/01.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 02 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Development "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/02.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 03 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Development "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/03.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 04 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Development "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/04.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 05 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Development "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/05.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 06 -->
                            <div class="client_item p_20 my_15 mx_15">
                                <div class="client_work_and_review">
                                    <div class="client_work">
                                        <h6>" Development "</h6>
                                    </div>

                                    <div class="client_reviews">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client_details mb_15">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque quibusdam
                                        ullam cumque in nisi perferendis.
                                        Eaque quibusdam
                                        ullam cumque in nisi perferendis
                                    </p>
                                </div>
                                <div class="client_info">
                                    <div class="client_item_img mr_10">
                                        <img src="{{asset('assets/website/img/testimonial/06.jpg')}}" alt="Client"
                                             class="client_img img-fluid rounded-circle">
                                    </div>
                                    <div class="client_name_and_company">
                                        <h5>Maichel Jon</h5>
                                        <p>Data Connect</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Price Section -->
        <section class="price_section section" id="price">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>Our Lovely Customer!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Our Pricing</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="price_item price_item_left my_15 py_30 px_20 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <div class="price_title price_title_left">
                                <h3>Basice</h3>
                            </div>
                            <div class="hr_tag_side">
                                <hr>
                            </div>
                            <div class="prrice_and_price_details prrice_and_price_details_left">
                                <div class="price">
                                    <h4 class="ml_20"><span class="dollar">&#36;</span>35 <br> <span
                                            class="month">Month</span></h4>
                                </div>
                                <div class="price_details">
                                    <p>
                                        You will get all these awesome services with this great price. Get it now!
                                    </p>
                                </div>
                            </div>
                            <div class="hr_tag_side">
                                <hr>
                            </div>
                            <ul class="package package_left">
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Full access</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Powerful Admin Panel</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Email Accounts</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div class="price_button price_button_left">
                                <a href="#" class="btn price_btn">Get Start</a>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="price_item_middle middle_item my_15 py_30 px_20 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".5s">
                            <div class="price_title">
                                <h3>Unlimited</h3>
                            </div>

                            <div class="hr_tag_middle">
                                <hr>
                            </div>

                            <div class="prrice_and_price_details">
                                <div class="price">
                                    <h4 class="ml_20"><span class="dollar">&#36;</span>65 <br> <span
                                            class="month">Month</span></h4>
                                </div>
                                <div class="price_details_middle">
                                    <p>
                                        You will get all these awesome services with this great price. Get it now!
                                    </p>
                                </div>
                            </div>

                            <div class="hr_tag_middle">
                                <hr>
                            </div>

                            <ul class="package">
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Full access</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Powerful Admin Panel</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Email Accounts</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>10 Free Web sites</li>
                            </ul>
                            <div class="price_button">
                                <a href="#" class="btn price_btn middle_price_btn">Get Start</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="price_item price_item_right my_15 py_30 px_20 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="1s">
                            <div class="price_title price_title_right">
                                <h3>Professional</h3>
                            </div>

                            <div class="hr_tag_side">
                                <hr>
                            </div>

                            <div class="prrice_and_price_details prrice_and_price_details_right">
                                <div class="price">
                                    <h4 class="ml_20"><span class="dollar">&#36;</span>99 <br> <span
                                            class="month">Month</span></h4>
                                </div>
                                <div class="price_details">
                                    <p>
                                        You will get all these awesome services with this great price. Get it now!
                                    </p>
                                </div>
                            </div>

                            <div class="hr_tag_side">
                                <hr>
                            </div>

                            <ul class="package package_right">
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Full access</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Powerful Admin Panel</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>Email Accounts</li>
                                <li class="my_20 packge_list"><i class="fas fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div class="price_button price_button_right">
                                <a href="#" class="btn price_btn">Get Start</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Price Section End-->

        <!-- Oure Client Section -->
        <section class="our_client_section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sub_section_title px_15 py_5 ">
                            <h4>Our Seticfied clients</h4>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="happy_clients owl-carousel owl-theme">

                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-01.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-02.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-03.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>

                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-04.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>

                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-05.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-06.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-07.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-08.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>
                            <div class="happy_client_item">
                                <img src="{{asset('assets/website/img/clients/client-09.png')}}" alt=""
                                     class="img-fluid rounded-circle happy_client_img">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Oure Client Section End -->


        <!-- Blog Section -->
        <section class="blog_section section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>Our Letest News!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Our Blogs</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <!-- Blog Post 01 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog_item blog_item_left my_25 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <div class="blog_img">
                                <img src="{{asset('assets/website/img/blog/b-1.jpg')}}" alt="Blog Post" class="img-fluid p_5">
                            </div>
                            <div class="blog_details p_20">
                                <div class="date_comment mb_5">
                                    <div class="post_date">
                                        <p> <span class="cln_icon post_icon"><i class="ion-ios-calendar-outline"></i></span>
                                            20-08-2020</p>
                                    </div>
                                    <div class="post_comment">
                                        <p> <span class="comment_icon post_icon"><i
                                                    class="ion-ios-chatboxes-outline"></i></span>
                                            <span class="comment_quantity">10k</span></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog_title mb_5">
                                    <h6>About Our Creative Website </h6>
                                </div>
                                <div class="post_article mb_5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores omnis. Enim,
                                        nulla. Ipsa, quidem! <a class="readmore_btn" href="#"> Read More...</a></p>
                                </div>
                                <hr>
                                <div class="author">
                                    <p> <label>Post by :</label> <span>Mh Munir</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 02 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog_item my_25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="blog_img">
                                <img src="{{asset('assets/website/img/blog/b-2.jpg')}}" alt="Blog Post" class="img-fluid p_5">
                            </div>
                            <div class="blog_details p_20">
                                <div class="date_comment mb_5">
                                    <div class="post_date">
                                        <p> <span class="cln_icon post_icon"><i class="ion-ios-calendar-outline"></i></span>
                                            20-08-2020</p>
                                    </div>
                                    <div class="post_comment">
                                        <p> <span class="comment_icon post_icon"><i
                                                    class="ion-ios-chatboxes-outline"></i></span>
                                            <span class="comment_quantity">10k</span></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog_title mb_5">
                                    <h6>About Our Creative Website </h6>
                                </div>
                                <div class="post_article mb_5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores omnis. Enim,
                                        nulla. Ipsa, quidem! <a class="readmore_btn" href="#"> Read More...</a></p>
                                </div>
                                <hr>
                                <div class="author">
                                    <p> <label>Post by :</label> <span>Mh Munir</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 03 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog_item blog_item_right my_25 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="1s">
                            <div class="blog_img">
                                <img src="{{asset('assets/website/img/blog/b-3.jpg')}}" alt="Blog Post" class="img-fluid p_5">
                            </div>
                            <div class="blog_details p_20">
                                <div class="date_comment mb_5">
                                    <div class="post_date">
                                        <p> <span class="cln_icon post_icon"><i class="ion-ios-calendar-outline"></i></span>
                                            20-08-2020</p>
                                    </div>
                                    <div class="post_comment">
                                        <p> <span class="comment_icon post_icon"><i
                                                    class="ion-ios-chatboxes-outline"></i></span>
                                            <span class="comment_quantity">10k</span></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog_title mb_5">
                                    <h6>About Our Creative Website </h6>
                                </div>
                                <div class="post_article mb_5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores omnis. Enim,
                                        nulla. Ipsa, quidem! <a class="readmore_btn" href="#"> Read More...</a></p>
                                </div>
                                <hr>
                                <div class="author">
                                    <p> <label>Post by :</label> <span>Mh Munir</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Section End -->

        <!-- Contact Section -->
        <section class="contact_section section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="all_section_title py_10">
                            <div class="all_title_01">
                                <h6>So easy to contact Us!</h6>
                            </div>
                            <div class="all_title_02">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="contact_item my_15 p_20">
                            <div class="contact_number">
                                <div class="contact_item_icon mr_15">
                                    <i class="ion-android-call"></i>
                                </div>
                                <div class="contact_item_details">
                                    <p class="contact_number_1">+880-01811914794</p>
                                    <p class="contact_number_2">+880-01811914794</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact_item my_15 p_20">
                            <div class="contact_number">
                                <div class="contact_item_icon mr_15">
                                    <i class="ion-ios-email"></i>
                                </div>
                                <div class="contact_item_details">
                                    <p class="contact_email_1"> <a href="#">our_support@example.com</a></p>
                                    <p class="contact_email_2"><a href="#">our_support@example.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="contact_item my_15 p_20">
                            <div class="contact_number">
                                <div class="contact_item_icon mr_15">
                                    <i class="ion-android-locate"></i>
                                </div>
                                <div class="contact_item_details">
                                    <p>House No 580, Dc Road, Chawkbazar, Chittagong, Bangladesh.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact_form my_15 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <form action="#">
                                <div class="name_filed my_15">
                                    <input type="text" class="form-control my_form_group" placeholder="Your Name">
                                </div>

                                <div class="emali_filed my_15">
                                    <input type="email" class="form-control my_form_group" placeholder="Your Email">
                                </div>

                                <div class="subject_filed my_15">
                                    <input type="text" class="form-control my_form_group" placeholder="Subject">
                                </div>


                                <div class="textarea_filed my_15">
                                <textarea class="form-control my_form_group" rows="5" cols="50"
                                          placeholder="Your Messages"></textarea>
                                </div>

                                <div class="message_button mt_20">
                                    <a href="#" class="btn custom_btn message_btn">Send Messages <span><i
                                                class="fas fa-paper-plane"></i></span></a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <!-- Google Map -->
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div id="map" class="mt_15"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Footer -->
        <footer class="footer_section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer_title">
                            <h3>Gl<span>o</span>ry.</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 text-center">
                        <div class="footer_social_link">
                            <ul>
                                <li class="social_item mr_10"><a class="social_link" href="#"><i
                                            class="ion-social-facebook"></i></a></li>
                                <li class="social_item mr_10"><a class="social_link" href="#"><i
                                            class="ion-social-twitter"></i></a></li>
                                <li class="social_item mr_10"><a class="social_link" href="#"><i
                                            class="ion-social-googleplus"></i></a></li>
                                <li class="social_item mr_10"><a class="social_link" href="#"><i
                                            class="ion-social-instagram"></i></a></li>
                                <li class="social_item "><a class="social_link" href="#"><i
                                            class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 text-center">
                        <div class="footer_text">
                            <p>2020 &copy; By <b>Glory Tech.</b> All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottomTotop_button">
                <a href="#home" class="bottomtotop_btn smooth_scroll"><i class="ion-chevron-up"></i></a>
            </div>
        </footer>
        <!-- Footer End -->





@endsection
