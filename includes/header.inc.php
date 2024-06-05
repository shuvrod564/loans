     
    <!-- navigation start -->  
    <nav class="navbar navbar-expand-lg smart-scrol py-3" id="mainNav">
        <div class="container position-relative align-items-center">   
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="Quick Cap">
                <img src="<?php echo $base_url;?>assets/images/main-logo.svg" width="128" height="70" class="img-fluid" alt="Quick Cap">
            </a>
            <div class="d-inline-flex gap-3">
                <a href="" class="btn btn-whatsapp d-inline-flex align-items-center justify-content-center rounded-circle p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                </a>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalApply" class="btn btn-primary fw-semibold gap-3 py-2 px-4 rounded-pill text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="#fff" d="M248 0h16c13.3 0 24 10.7 24 24V34.7C368.4 48.1 431.9 111.6 445.3 192H448c17.7 0 32 14.3 32 32s-14.3 32-32 32H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h2.7C80.1 111.6 143.6 48.1 224 34.7V24c0-13.3 10.7-24 24-24zM64 288h64V416h40V288h64V416h48V288h64V416h40V288h64V420.3c.6 .3 1.2 .7 1.7 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V288z"/></svg>
                    <span>Apply Now</span>
                </button>
            </div>
        </div>
    </nav> 
    <!-- navigation end --> 

    
    <div
        class="modal fade"
        id="modalApply"
        tabindex="-1"  
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
            role="document" style="max-width:600px;"
        >
            <div class="modal-content">
                <div class="modal-header border-0 ps-4 ps-md-5 position-relative">
                    <p class="fs-4 fw-semibold mb-0 pt-3 pt-sm-4" id="modalTitleId">
                        Select a option
                    </p>
                    <button
                        type="button"
                        class="btn-close position-absolute rounded-circle p-3" style="top:1rem;right:1rem;"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body p-4 p-md-5">
                    <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                        <div>
                            <a href="start-up-loan.php" class="border shadow p-4 rounded-3 d-block text-center">
                                <span class="d-block fs-4 fw-semibold">Start up Loan</span>
                                <span>GST Not Required</span>
                            </a>
                        </div>
                        <div>
                            <a href="start-up-loan.php" class="border shadow p-4 rounded-3 d-block text-center">
                                <span class="d-block fs-4 fw-semibold">Business Loan</span>
                                <span>GST Compolsary</span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
    