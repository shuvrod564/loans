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
 
    <header class="header__wrapper subpage position-relative pt-5 pb-5 mb-md-5" >  
        <div class=" position-absolute top-0 start-0 w-100 h-auto"> 
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
      
        <div class="container position-relative z-1">
            <div class="row g-4 gx-lg-5">
                <div class="col-lg-6 text-center text-lg-start"> 
                    <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="Quick Cap">
                        <img src="<?php echo $base_url;?>assets/images/main-logo.svg" width="128" height="70" class="img-fluid" alt="Quick Cap">
                    </a>
                    
                    <h1 class="display-4 fw-bold text-white text-uppercase mt-5 pt-lg-5">
                        Check your <br> loan eligibility
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white rounded-3 p-4 p-md-5 shadow">
                        <form action="#" class="d-flex flex-column gap-4">
                            <div>
                                <label for="pan_no" class="label">PAN No. <span>*</span></label>
                                <input 
                                    type="text" name="pan_no" 
                                    class="form-control" 
                                    placeholder=""
                                >
                            </div>
                            <div>
                                <label for="pan_no" class="label">Name as per PAN Card <span>*</span></label>
                                <input 
                                    type="text" name="pan_no" 
                                    class="form-control" 
                                    placeholder=""
                                >
                            </div>
                            <div>
                                <label for="pan_no" class="label">Date of Birth <span>(optional)</span></label>
                                <input 
                                    type="date" name="pan_no" 
                                    class="form-control" 
                                    placeholder=""
                                >
                            </div>
                            <div>
                                <label for="number" class="label">Mobile Number <span>*</span></label>
                                <input 
                                    type="text" name="number" 
                                    class="form-control" 
                                    placeholder=""
                                >
                            </div>
                            <div>
                                <label for="email" class="label">Email Address <span>*</span></label>
                                <input 
                                    type="text" name="email" 
                                    class="form-control" 
                                    placeholder=""
                                >
                            </div>
                            <div>
                                <label for="doc" class="label">Select Doc <span>*</span></label>
                                <select name="doc" id="doc" class="form-select">
                                    <option value="GST Number">GST Number</option>
                                    <option value="Govt Establishment">Govt Establishment</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="PAN Card">PAN Card</option>
                                    <option value="Aadar Card">Aadar Card</option>
                                </select>
                            </div>
                            <div>
                                <label for="doc" class="label">Average monthly turnover <span>*</span></label>
                                <div class="form-check mb-1">
                                    <input 
                                        type="radio"
                                        name="monthly_turnover"
                                        class="form-check-input"
                                        id="check1"
                                    >
                                    <label for="check1" class="form-check-label">1 Lakh - 5 Lakh</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input 
                                        type="radio"
                                        name="monthly_turnover"
                                        class="form-check-input"
                                        id="check2"
                                    >
                                    <label for="check2" class="form-check-label">5 Lakh - 10 Lakh</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input 
                                        type="radio"
                                        name="monthly_turnover"
                                        class="form-check-input"
                                        id="check3"
                                    >
                                    <label for="check3" class="form-check-label">10 Lakh - 50 Lakh</label>
                                </div>
                                <div class="form-check mb-1">
                                    <input 
                                        type="radio"
                                        name="monthly_turnover"
                                        class="form-check-input"
                                        id="check4"
                                    >
                                    <label for="check4" class="form-check-label">50 Lakh & above</label>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4">
                                    SUBMIT
                                </button>
                            </div>

                             
                        </form>
                    </div>
                </div>
            </div>
             
        </div>
    </header>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html> 