@extends('website.main_master')
@section('main')


  
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="vet.html" class="nav-link">Veterinarian</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-11 ftco-animate text-center">
                <h1 class="mb-4">Highest Quality Care For Pets You'll Love</h1>
                <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services active text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-blind"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Dog Walking</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-dog-eating"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pet Daycare</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-grooming"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pet Grooming</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-5 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" 
                 style="background-image: url('{{ asset('assets/images/about-1.jpg') }}');">
            </div>
        </div>
        <div class="col-md-7 pl-md-5 py-md-5">
            <div class="heading-section pt-md-5">
                <h2 class="mb-4">Why Choose Us?</h2>
            </div>
            <div class="row">
                <div class="col-md-6 services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-stethoscope"></span>
                    </div>
                    <div class="text pl-3">
                        <h4>Care Advices</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
                <div class="col-md-6 services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="text pl-3">
                        <h4>Customer Supports</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
                <div class="col-md-6 services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-emergency-call"></span>
                    </div>
                    <div class="text pl-3">
                        <h4>Emergency Services</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
                <div class="col-md-6 services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-veterinarian"></span>
                    </div>
                    <div class="text pl-3">
                        <h4>Veterinary Help</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Professionals</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="20">0</strong>
              </div>
              <div class="text">
              	<span>Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Pets Hosted</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light ftco-faqs">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 order-md-last">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" 
                 style="background-image: url('{{ asset('assets/images/about.jpg') }}');">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="fa fa-play"></span>
                </a>
            </div>
            <div class="d-flex mt-3">
                <div class="img img-2 mr-md-2" style="background-image: url('{{ asset('assets/images/about-2.jpg') }}');"></div>
                <div class="img img-2 ml-md-2" style="background-image: url('{{ asset('assets/images/about-3.jpg') }}');"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="heading-section mb-5 mt-5 mt-lg-0">
                <h2 class="mb-3">Frequently Asked Questions</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                            <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" 
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                <p class="mb-0">How to train your pet dog?</p>
                                <i class="fa" aria-hidden="true"></i>
                            </button>
                        </h2>
                    </div>
                    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body py-3 px-0">
                            <ol>
                                <li>Far far away, behind the word mountains</li>
                                <li>Consonantia, there live the blind texts</li>
                                <li>When she reached the first hills of the Italic Mountains</li>
                                <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                <li>Separated they live in Bookmarksgrove right</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-0" id="headingTwo">
                        <h2 class="mb-0">
                            <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" 
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                <p class="mb-0">How to manage your pets?</p>
                                <i class="fa" aria-hidden="true"></i>
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body py-3 px-0">
                            <ol>
                                <li>Far far away, behind the word mountains</li>
                                <li>Consonantia, there live the blind texts</li>
                                <li>When she reached the first hills of the Italic Mountains</li>
                                <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                <li>Separated they live in Bookmarksgrove right</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-0" id="headingThree">
                        <h2 class="mb-0">
                            <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" 
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                <p class="mb-0">What is the best grooming for your pets?</p>
                                <i class="fa" aria-hidden="true"></i>
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body py-3 px-0">
                            <ol>
                                <li>Far far away, behind the word mountains</li>
                                <li>Consonantia, there live the blind texts</li>
                                <li>When she reached the first hills of the Italic Mountains</li>
                                <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                <li>Separated they live in Bookmarksgrove right</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-0" id="headingFour">
                        <h2 class="mb-0">
                            <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" 
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                <p class="mb-0">What are the requirements for sitting pets?</p>
                                <i class="fa" aria-hidden="true"></i>
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body py-3 px-0">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. 
                               Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
    </section>

    <section class="ftco-section testimony-section" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('assets/images/person_3.jpg') }}');"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="ftco-section bg-light">
    <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Affordable Packages</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ftco-animate">
            <div class="block-7">
                <div class="img" style="background-image: url('{{ asset('assets/images/pricing-1.jpg') }}');"></div>
                <div class="text-center p-4">
                    <span class="excerpt d-block">Personal</span>
                    <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>

                    <ul class="pricing-text mb-5">
                        <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
                        <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
                        <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
                        <li><span class="fa fa-check mr-2"></span>Free Supports</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="block-7">
                <div class="img" style="background-image: url('{{ asset('assets/images/pricing-2.jpg') }}');"></div>
                <div class="text-center p-4">
                    <span class="excerpt d-block">Business</span>
                    <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>

                    <ul class="pricing-text mb-5">
                        <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
                        <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
                        <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
                        <li><span class="fa fa-check mr-2"></span>Free Supports</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="block-7">
                <div class="img" style="background-image: url('{{ asset('assets/images/pricing-3.jpg') }}');"></div>
                <div class="text-center p-4">
                    <span class="excerpt d-block">Ultimate</span>
                    <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>

                    <ul class="pricing-text mb-5">
                        <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
                        <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
                        <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
                        <li><span class="fa fa-check mr-2"></span>Free Supports</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
		
		<section class="ftco-section">
        <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Pets Gallery</h2>
        </div>
    </div>
    <div class="row">
        @foreach ([
            ['image' => 'gallery-1.jpg', 'type' => 'Cat', 'name' => 'Persian Cat'],
            ['image' => 'gallery-2.jpg', 'type' => 'Dog', 'name' => 'Pomeranian'],
            ['image' => 'gallery-3.jpg', 'type' => 'Cat', 'name' => 'Sphynx Cat'],
            ['image' => 'gallery-4.jpg', 'type' => 'Cat', 'name' => 'British Shorthair'],
            ['image' => 'gallery-5.jpg', 'type' => 'Dog', 'name' => 'Beagle'],
            ['image' => 'gallery-6.jpg', 'type' => 'Dog', 'name' => 'Pug']
        ] as $pet)
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url('{{ asset('assets/images/' . $pet['image']) }}');">
                    <a href="{{ asset('assets/images/' . $pet['image']) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>{{ $pet['type'] }}</span>
                            <h2><a href="work-single.html">{{ $pet['name'] }}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
		</section>


        <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" 
         style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                <h2 class="mb-4">Free Consultation</h2>
                <form action="#" class="appointment">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select services</option>
                                            <option value="">Cat Sitting</option>
                                            <option value="">Dog Walk</option>
                                            <option value="">Pet Spa</option>
                                            <option value="">Pet Grooming</option>
                                            <option value="">Pet Daycare</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Vehicle number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>


  


    
  

    
 
</html>

@endsection