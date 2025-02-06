<?php include './includes/sidebar.php' ?>
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./assets/css/popup.css">

<main>
    <section class="home-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="banner-content-area">
                        <h1 class="banner-title">Welcome to FastestPass, <br> <span class="bnner-user-name">jon.jones</span></h1>
                        <p class="para">Everything you need for life online – passwords, payment cards, bank accounts, <br> IDs, and more – stored in one place. Let’s start organizing your vault.</p>
                        <div class="cta-area">
                            <a class="primary-btn" href="import-passwords.php">
                                Import many passwords at once to FastestPass
                            </a>
                            <a href="add-items.php" class="secondary-btn">
                                Add items one-by-one
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="banner-img-area text-end">
                        <img class="img-fluid" src="./assets/images/Banner-Image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="achieve-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p class="achieve-sec-tag">Achieve 10 of these items to earn <a class="text-decoration-none" href="#">10% off paid plan!</a></p>
                </div>
                <div class="col-12">
                    <div class="achieve-list-area  position-relative">
                        <ul class="achieve-list">
                            <li class="achieve-list-item">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.77097 18.8965C13.0626 14.6257 19.2085 13.3132 24.6043 15.0007L34.4168 5.20899C35.1251 4.47982 36.521 4.04232 37.521 4.18815L42.0626 4.81315C43.5626 5.02148 44.9585 6.43815 45.1876 7.93815L45.8126 12.4798C45.9585 13.4798 45.4793 14.8757 44.7918 15.584L35.0001 25.3757C36.6668 30.7923 35.3751 36.9382 31.0835 41.209C24.9376 47.3548 14.9585 47.3548 8.7918 41.209C2.62514 35.0632 2.62513 25.0423 8.77097 18.8965Z" stroke="#404B69" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M35.6455 13.5625L30.8538 8.77083" stroke="#404B69" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19.792 27.084C18.0661 27.084 16.667 28.4831 16.667 30.209C16.667 31.9349 18.0661 33.334 19.792 33.334C21.5179 33.334 22.917 31.9349 22.917 30.209C22.917 28.4831 21.5179 27.084 19.792 27.084Z" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="item-title">Add Your First <br> Password</h3>
                                <p class="item-desc m-0">Let fastestpass remember it for you.</p>
                                <button class="plus-btn add-pass-open-btn" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </li>
                            <li class="achieve-list-item">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.958 40.625H15.6247C14.333 40.625 13.1872 40.5833 12.1663 40.4375C6.68717 39.8333 5.20801 37.25 5.20801 30.2083V19.7917C5.20801 12.75 6.68717 10.1667 12.1663 9.5625C13.1872 9.41667 14.333 9.375 15.6247 9.375H22.833" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M31.292 9.375H34.3753C35.667 9.375 36.8128 9.41667 37.8337 9.5625C43.3128 10.1667 44.792 12.75 44.792 19.7917V30.2083C44.792 37.25 43.3128 39.8333 37.8337 40.4375C36.8128 40.5833 35.667 40.625 34.3753 40.625H31.292" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M31.25 4.16602V45.8327" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M23.1132 25.0007H23.1319" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.7802 25.0007H14.7989" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="item-title">Try Autofill</h3>
                                <p class="item-desc m-0">Skip the hassle of typing password & info.</p>
                                <button class="plus-btn" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </li>
                            <li class="achieve-list-item">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.7503 45.8327H31.2503C41.667 45.8327 45.8337 41.666 45.8337 31.2493V18.7493C45.8337 8.33268 41.667 4.16602 31.2503 4.16602H18.7503C8.33366 4.16602 4.16699 8.33268 4.16699 18.7493V31.2493C4.16699 41.666 8.33366 45.8327 18.7503 45.8327Z" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.667 39.5827H33.3337C37.5003 39.5827 39.5837 37.4993 39.5837 33.3327V16.666C39.5837 12.4993 37.5003 10.416 33.3337 10.416H16.667C12.5003 10.416 10.417 12.4993 10.417 16.666V33.3327C10.417 37.4993 12.5003 39.5827 16.667 39.5827Z" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.417 19.791H15.5837C18.4587 19.791 20.792 22.1243 20.792 24.9993C20.792 27.8743 18.4587 30.2077 15.5837 30.2077H10.417" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M39.583 20.8125H33.333" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M39.583 29.166H33.333" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 25H15.2083" stroke="#404B69" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="item-title">Tour Your <br> FastestPass Vault</h3>
                                <p class="item-desc m-0">Explore your safe place.</p>
                                <button class="plus-btn" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </li>
                            <li class="achieve-list-item">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8327 35.3132H12.9368C5.91602 35.3132 4.16602 33.5632 4.16602 26.5423V14.0423C4.16602 7.02148 5.91602 5.27148 12.9368 5.27148H34.8743C41.8952 5.27148 43.6452 7.02148 43.6452 14.0423" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.834 44.7292V35.3125" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16602 26.9785H20.8327" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.041 44.7285H20.8327" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M45.8327 26.6667V38.5625C45.8327 43.5 44.6035 44.7292 39.666 44.7292H32.2702C27.3327 44.7292 26.1035 43.5 26.1035 38.5625V26.6667C26.1035 21.7292 27.3327 20.5 32.2702 20.5H39.666C44.6035 20.5 45.8327 21.7292 45.8327 26.6667Z" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M35.9267 38.0202H35.9454" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="item-title">Stay Connected Anywhere</h3>
                                <p class="item-desc m-0">Download the fastestpass mobile app.</p>
                                <button class="plus-btn" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </li>
                            <li class="achieve-list-item">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1256 4.16602H34.8548C36.209 4.16602 37.4173 4.20774 38.5006 4.35357C44.2715 4.9994 45.834 7.7077 45.834 15.1244V28.2911C45.834 35.7077 44.2715 38.416 38.5006 39.0618C37.4173 39.2077 36.2298 39.2494 34.8548 39.2494H15.1256C13.7715 39.2494 12.5631 39.2077 11.4798 39.0618C5.70896 38.416 4.14648 35.7077 4.14648 28.2911V15.1244C4.14648 7.7077 5.70896 4.9994 11.4798 4.35357C12.5631 4.20774 13.7715 4.16602 15.1256 4.16602Z" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M28.293 17.332H35.9596" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.043 29.3945H14.0846H35.9805" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.584 45.834H35.4173" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.9892 17.2917H15.0079" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.8642 17.2917H21.8829" stroke="#404B69" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="item-title">Add 3+ Websites</h3>
                                <p class="item-desc m-0">Let fastestpass remember it for you.</p>
                                <button class="plus-btn" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </li>
                        </ul>
                        <button class="arrow-right next-arrow" type="button">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include "./includes/popups/add-back-account.php"; ?>

<?php include './includes/footer.php' ?>
<script src="./assets/js/index.js"></script>

<script>
    $('.advance-setting-btn').click(function() {
        $('.advance-setting-area').toggleClass('active');
        $('.advance-setting-list').slideToggle();
    });

    $(".add-pass-open-btn").click(function() {
        $(".popup-wrapper").addClass("active");
    });

    $(".popup-cls-btn , .popup-cancel-btn").click(function() {
        $(".popup-wrapper").removeClass("active");
    });

    $(document).ready(function() {
        $(".popup-wrapper").click(function() {
            $(this).removeClass("active");
        });

        $(".popup-inner").click(function(event) {
            event.stopPropagation(); 
        });
    });
</script>