<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>QuickCap</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?>  

    <header class="header__wrapper position-relative d-flex align-items-center justify-content-center" >  
        <div class="container-fluid px-0">
            <div class=" position-relative overflow-hidden"> 
                <img 
                    src="assets/images/home/home-hero.webp" 
                    srcset="
                        assets/images/home/home-hero-500.webp 500w,
                        assets/images/home/home-hero-800.webp 1000w,
                        assets/images/home/home-hero.webp 1200w 
                    "
                    alt="Banner Image"
    
                    class="img-fluid w-100 object-cover thumbnail" 
                />  
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-75 bg-dark"></div>
            </div>
        </div>
        <div class="container position-absolute z-1">
            <h1 class="display-4 fw-bold text-center text-white text-uppercase">Getting Business <br> loans QuickCap</h1>
            <div class="text-center"> 
                <button class="btn btn-white lead-sm  height px-5 py-3 rounded-pill text-uppercase mt-4 mt-lg-5" type="button" data-bs-toggle="modal" data-bs-target="#modalApply">
                    Apply Now
                </button>
            </div>
        </div>
    </header>

    <!-- 02. BLOCK QUOTE WRAPPER START -->
    <div class="py-3 py-sm-4" style="background-color: var(--bg-color);">
        <div class="container-fluid px-0"> 
            <div class="marquee">
                <p class="marquee__wrapper mb-0" id="marquee">
                    <span>Hassle-free loans up to 30 lakhs</span> 
                    <span>Hassle-free loans up to 30 lakhs</span> 
                    <span>Hassle-free loans up to 30 lakhs</span> 
                    <span>Hassle-free loans up to 30 lakhs</span> 
                    <span>Hassle-free loans up to 30 lakhs</span> 
                </p>  
            </div>
        </div>
    </div>
    
    <!-- 02. BLOCK QUOTE WRAPPER END -->

    <!-- Apply now in 3 easy steps Start -->
    <section class="py-5 text-center">
        <div class="container py-lg-5">
            <h2 class="display-4 text-dark fw-bold text-center mb-4 mb-xl-5">Apply now in 3 easy steps</h2>
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="setp__card w-100 p-4 position-relative">
                        <figure class="icon d-flex justify-content-center align-items-center rounded-pill mx-auto"> 
                            <img src="assets/images/icons/resume.png" width="64" alt="">
                        </figure>
                        <span class="title display-1 fw-bold d-block position-absolute top-0 start-0 opacity-25 text-start w-100"> 01</span>
                        <p class="lead fw-medium"> Enter your personal, and bank details to get business approved for loans.</p> 
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="setp__card w-100 p-4 position-relative">
                        <figure class="icon d-flex justify-content-center align-items-center rounded-pill mx-auto"> 
                            <img src="assets/images/icons/accept.svg" width="64" height="64" alt="accept">
                        </figure>
                        <span class="title display-1 fw-bold d-block position-absolute top-0 start-0 opacity-25 text-start w-100"> 02</span>
                        <p class="lead fw-medium">Accept your the loan offer & complete your documentation and kyc.</p> 
                    </div>
                </div><!--//.col-->
                
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="setp__card w-100 p-4 position-relative">
                        <figure class="icon d-flex justify-content-center align-items-center rounded-pill mx-auto"> 
                            <img src="assets/images/icons/receive-payment.svg" width="64" height="64" alt="receive-payment">
                        </figure>
                        <span class="title display-1 fw-bold d-block position-absolute top-0 start-0 opacity-25 text-start w-100"> 03</span>
                        <p class="lead fw-medium">Select from flexible repayment options & start receiving funds.</p> 
                    </div>
                </div><!--//.col--> 
            </div><!--//.row--> 
        </div><!--//.container-->
    </section>
    <!-- Apply now in 3 easy steps End -->

    <!-- Why QuickCap? section Start -->
    <section class="py-5" style="background-color: #41bfaa0e;">
        <div class="container my-lg-4">
            <div class="col-lg-10 mx-auto">
                <h2 class="fs-1 fw-bold text-center text-dark text-uppercase mb-4 mb-lg-5">Why QuickCap?</h2>
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="62" height="62" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg> 
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">Apply in few minutes</p>
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-3 mt-lg-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="62" height="62" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">Tenure up to 60 month</p>
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-3 mt-lg-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M1 3h22v18H1zm2 2v14h18V5h-2v6.5l-3-2.25l-3 2.25V5zm12 0v2.5l1-.75l1 .75V5zM5 11h6v2H5zm0 4h14v2H5z"/></svg>
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">RBI certified company</p>
                        </div>
                    </div><!--//.col--> 
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="62" height="62" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">No branch visit</p>
                        </div> 
                        <div class="d-flex align-items-center gap-4 mt-3 mt-lg-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="62" height="62" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z"/></svg>
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">Fast Approval</p>
                        </div> 
                        <div class="d-flex align-items-center gap-4 mt-3 mt-lg-4">
                            <div class="icon__box d-flex align-items-center justify-content-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="62" height="62" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>
                            </div>
                            <p class="lead-lg fw-semibold text-dark mb-0">Fast Approval</p>
                        </div> 
                    </div><!--//.col-->  
                </div><!--//.row--> 
            </div>
        </div><!--//.container-->
    </section>
    <!-- Why QuickCap? section End -->

    <!-- FAQ Section Start -->
    <section class="py-5">
        <div class="container py-lg-4"> 
            <div class="col-lg-11 mx-auto">
                <h2 class="display-4 fw-bold text-dark py-3 py-lg-4 text-center">FAQ's</h2> 
                <div class="accordion col-lg-8 mx-auto" id="faqFlexible">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="contact">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactUs" aria-expanded="true" aria-controls="contactUs"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                            </button> 
                        </h3>
                        <div id="contactUs" class="accordion-collapse collapse" aria-labelledby="contact" data-bs-parent="#faqFlexible">
                            <div class="accordion-body">
                                <p>
                                    Ozclean's mattress cleaning service starts with a close inspection of your mattress. Our approach reflects our understanding that every mattress has specific requirements. The foundation of our cleaning procedure is our initial assessment, which enables us to provide the best outcomes.  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="appointmentAc">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#easy" aria-expanded="false" aria-controls="easy"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                            </button> 
                        </h3>
                        <div id="easy" class="accordion-collapse collapse" aria-labelledby="appointmentAc" data-bs-parent="#faqFlexible">
                            <div class="accordion-body">
                                <p>
                                    In order to effectively remove dust, filth, and stains that may have seeped into the inside layers of your mattress, deep cleaning necessitates a multi-step procedure, as recognised by Ozclean. A powerful Hoover cleaner with specialised attachments is used to start the procedure by our highly qualified specialists. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="flexiBle">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="flexiBle" data-bs-parent="#faqFlexible">
                            <div class="accordion-body">
                                <p>
                                    An important decontamination stage is included in our mattress cleaning process because maintaining a hygienic sleeping environment is essential as well. We're committed to getting rid of any lingering viruses and microorganisms that might live inside your mattress. 
                                </p>
                            </div>
                        </div>
                    </div> 
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="flexiBley">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="flexiBley" data-bs-parent="#faqFlexible">
                            <div class="accordion-body">
                                <p>
                                    In order to maintain the integrity of your mattress and stop the growth of germs and fungi, proper drying is an essential aspect of our process at Ozclean. After a thorough cleaning, we take further care to properly dry your mattress utilising cutting-edge tools and methods. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="flexiBleye">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="flexiBleye" data-bs-parent="#faqFlexible">
                            <div class="accordion-body">
                                <p>
                                    In order to maintain the integrity of your mattress and stop the growth of germs and fungi, proper drying is an essential aspect of our process at Ozclean. After a thorough cleaning, we take further care to properly dry your mattress utilising cutting-edge tools and methods. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>  
    </section> 
    <!-- FAQ Section End -->
   
   
    <!-- Contact Wrapper STart -->
    <div class="py-5 text-center" style="background-color: #5885ec;">
        <div class="container py-md-5">
            <h2 class="display-5 fw-bold text-white mb-3">Click here and get ready for success</h2>
            <p class="fs-4 text-white fw-medium mb-4 md-md-5">Apply now for simple, fast, and accessible loans for business from Quick Cap</p>
             
            <button class="btn btn-white px-5 py-3 fs-4 rounded-pill text-uppercase mt-4 mt-lg-5" type="button" data-bs-toggle="modal" data-bs-target="#modalApply">
                Apply Now
            </button>
        </div>
    </div>
    <!-- Contact Wrapper ENd -->
 
     
   
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html> 