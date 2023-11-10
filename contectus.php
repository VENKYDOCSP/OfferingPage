<?php include "header.php"  ?>
<div class="bg-img" data-aos="zoom-out-right"> <img class="img-fluid" width="100%" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687347130/atmosco/image_40_yyejaw.svg" alt="">
</div>
<div class="container mt-5" id="contectform">
    <div class="my-5">
        <div class="container">
            <div class="col-12 d-flex justify-content-end ">
                </div>
            <div class="row">
                <div class="col-12 col-md-6 p-1 p-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.2757224496277!2d81.37924663599999!3d21.22091234045848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2922f7a470d00b%3A0xa894d6efd92a948!2sAtmastco%20Limited!5e0!3m2!1sen!2sin!4v1693573584727!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                </div>
                    <div class="col-12 col-md-6 p-1" >
                    <form method="post" action="conn.php">
                        <p class="fs-1 vr-bldin-shp pb-1 pt-5">Contact Us</p>
                        <p> <?php if (isset($_GET['success']) && $_GET['success'] === 'true') { ?>
                        <div class="alert alert-success " role="alert" id="success-message">
                            Submitted ✅!
                        </div>
                    <?php } ?>
                    <p>Fill the application below to reach our
Customer Support. </p>
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 my-2 "><input class="inp-bgc" type="text" placeholder="Name" name="Name" required></div>
                        <div class="col-12 col-md-6 my-2  "><input class="inp-bgc" type="email" placeholder="Your Mail Address" name="Email" required></div>
                    </div>
                    <div class="row d-flex my-2 my-md-3">
                        <div class="col-12 col-md-6 my-2 "><input class="inp-bgc" type="number" placeholder="Phone Number" name="Phone_Number" required></div>
                        <div class="col-12 col-md-6 my-2  "><input class="inp-bgc" type="text" placeholder="Country" name="Country" required></div>
                    </div>
                    <textarea class="inp-txtc" style="width: 100%;" name="Text_Message" id="" cols="30" rows="10" placeholder="E.G: We are from xxx company for XXX product"></textarea>
                    <div class=" d-flex justify-content-end justify-content-end mt-2">
                        <button class="ctus   mt-2 mt-md-4 ">Submit <i class="mt-1 ms-2"><svg width="35" height="35" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_489_3127)">
                                        <path d="M9.16797 22H34.8346" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M27.5 29.3333L34.8333 22" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M27.5 14.668L34.8333 22.0013" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_489_3127">
                                            <rect width="44" height="44" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></i> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container  ">
    <div>
        <p class="fs-1 px-2 my-0 my-md-5 py-" style="color: #2D80C3; font-weight: 500;">
            Quick Support
        </p>
    </div>
    <div class="row d-flex justify-content-center gap-5 ">
        <div class="col-sm-4 col-12  d-flex flex-column justify-content-around" style="width:389px; height: 269px;">
            <div class="border rounded-5" style="width: 50px; height: 50px; background: #C2D9EB;">
                <i><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="#C2D9EB" />
                        <path d="M14.6706 13.3398H20.0039L22.6706 20.0065L19.3372 22.0065C20.7652 24.9019 23.1085 27.2452 26.0039 28.6732L28.0039 25.3398L34.6706 28.0065V33.3398C34.6706 34.0471 34.3896 34.7254 33.8895 35.2255C33.3894 35.7256 32.7111 36.0065 32.0039 36.0065C26.8029 35.6904 21.8974 33.4818 18.213 29.7974C14.5286 26.113 12.32 21.2075 12.0039 16.0065C12.0039 15.2993 12.2849 14.621 12.785 14.1209C13.2851 13.6208 13.9633 13.3398 14.6706 13.3398Z" fill="#2D80C3" />
                    </svg>
                </i>
            </div>
            <div>
                <span class="fs-4" style="  font-weight: 500">Call Us</span>
            </div>
            <div>
                <a class="fs-6 num-clr" href="tel:7882358071" style="  font-weight: 600;">+91788 235 8071</a>
            </div>
            <div>
                <p class="fs-6">ATMASTCO offers steel-related assistance through open communication and exceptional customer service. Contact us for satisfaction and collaboration.</p>
            </div>
        </div>
        <div class="col-sm-4 col-12 d-flex flex-column justify-content-around" style="width:389px; height: 269px;">
            <div class="border rounded-5" style="width: 50px; height: 50px; background: #C2D9EB;">
                <i><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="#C2D9EB" />
                        <g clip-path="url(#clip0_489_3530)">
                            <g clip-path="url(#clip1_489_3530)">
                                <path d="M30.7868 29.5873L25.6952 34.6789C25.2452 35.1284 24.6351 35.381 23.999 35.381C23.3629 35.381 22.7529 35.1284 22.3028 34.6789L17.21 29.5873C15.8675 28.2447 14.9532 26.5341 14.5829 24.6719C14.2125 22.8097 14.4026 20.8795 15.1292 19.1253C15.8559 17.3712 17.0863 15.8719 18.665 14.8171C20.2437 13.7622 22.0998 13.1992 23.9984 13.1992C25.8971 13.1992 27.7532 13.7622 29.3319 14.8171C30.9106 15.8719 32.141 17.3712 32.8676 19.1253C33.5943 20.8795 33.7844 22.8097 33.414 24.6719C33.0436 26.5341 32.1294 28.2447 30.7868 29.5873Z" fill="#2D80C3" />
                                <circle cx="23.9977" cy="22.7984" r="2.4" fill="#D9D9D9" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_489_3530">
                                <rect width="32" height="32" fill="white" transform="translate(8 8)" />
                            </clipPath>
                            <clipPath id="clip1_489_3530">
                                <rect width="28.8" height="28.8" fill="white" transform="translate(9.59766 9.59766)" />
                            </clipPath>
                        </defs>
                    </svg>
                </i>
            </div>
            <div>
                <span class="fs-4" style="  font-weight: 500">Visit Us</span>
            </div>
            <div>
                <a class="fs-6 num-clr" href="#" style="  font-weight: 600;">+91 9856555254</a>
            </div>
            <div>
                <p class="fs-6">  To discuss more about your company's needs and discover customized solutions. Our knowledgeable team will pay close attention, handle any issues, and offer suggestions.</p>
            </div>
        </div>
        <div class="col-sm-4 col-12 d-flex flex-column justify-content-around" style="width:389px; height: 269px;">
            <div class="border rounded-5" style="width: 50px; height: 50px; background: #C2D9EB;">
                <i><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="#C2D9EB" />
                        <g clip-path="url(#clip0_512_5742)">
                            <path d="M16 22V32" stroke="#2D80C3" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 16V16.0174" stroke="#2D80C3" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24 32V22" stroke="#2D80C3" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M32 32V26C32 24.9391 31.5786 23.9217 30.8284 23.1716C30.0783 22.4214 29.0609 22 28 22C26.9391 22 25.9217 22.4214 25.1716 23.1716C24.4214 23.9217 24 24.9391 24 26" stroke="#2D80C3" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_512_5742">
                                <rect width="48" height="48" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </i>
            </div>
            <div>
                <span style="font-size: 24px; font-weight: 500">LinkedIn </span>
            </div>
            <div>
                <a href="#" class="num-clr fs-6" style="font-size: 16px; font-weight: 600;">+91 9856555254</a>
            </div>
            <div>
                <p style="font-size: 16px;">Stay tuned with the latest updates, industry insights, and exciting news from us by following  our LinkedIn page. Join our professional network to access valuable content and careers. </p>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "footer.php"  ?>