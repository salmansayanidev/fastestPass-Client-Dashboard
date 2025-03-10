<?php include './includes/sidebar.php' ?>
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./assets/css/account-setting.css">
<link rel="stylesheet" href="./assets/css/payment-cards.css">

<main>
    <section class="account-setting-section position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="passwords-top-left">
                        <h2 class="sec-sb-title m-0">Upgrade Your Subscription</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="payment-options-main">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="account-setting-main">
                                        <div class="account-setting-top">
                                            <h3 class="account-setting-title m-0">Select Your Plan</h3>
                                        </div>
                                        <ul class="account-setting-list">
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">1 Year Subscription</h5>
                                                </div>
                                                <div class="account-setting-list-item-right">
                                                    <div class="acc-sett-right-inner">
                                                        <ul class="acc-sett-checkbox-list m-0">
                                                            <li class="acc-sett-checkbox-list-item">
                                                                <input type="radio" class="acc-sett-checkbox d-none" name="plan_radio" id="one-year-plan">
                                                                <label for="one-year-plan" class="acc-sett-checkbox-label">
                                                                    <span class="checkmark">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </span>
                                                                    <span class="">1 Year Plan</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">2 Years Subscription</h5>
                                                </div>
                                                <div class="account-setting-list-item-right">
                                                    <div class="acc-sett-right-inner">
                                                        <ul class="acc-sett-checkbox-list m-0">
                                                            <li class="acc-sett-checkbox-list-item">
                                                                <input type="radio" class="acc-sett-checkbox d-none" name="plan_radio" id="two-year-plan">
                                                                <label for="two-year-plan" class="acc-sett-checkbox-label">
                                                                    <span class="checkmark">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </span>
                                                                    <span class="">2 Years Plan</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="account-setting-main">
                                        <div class="account-setting-top">
                                            <h3 class="account-setting-title m-0">Add-Ons (Optional)</h3>
                                        </div>
                                        <ul class="account-setting-list">
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Currently You Have 10 Multi Logins</h5>
                                                </div>
                                                <div class="account-setting-list-item-right">
                                                    <div class="acc-sett-right-inner">
                                                        <ul class="acc-sett-checkbox-list m-0">
                                                            <li class="acc-sett-checkbox-list-item">
                                                                <input type="checkbox" class="acc-sett-checkbox d-none" name="multi_logins" id="multi-logins">
                                                                <label for="multi-logins" class="acc-sett-checkbox-label">
                                                                    <span class="checkmark">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </span>
                                                                    <span class="">Add more Multi Logins - $4 for an additional device (Optional)</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Dedicated IP</h5>
                                                </div>
                                                <div class="account-setting-list-item-right">
                                                    <div class="acc-sett-right-inner">
                                                        <ul class="acc-sett-checkbox-list m-0">
                                                            <li class="acc-sett-checkbox-list-item">
                                                                <input type="checkbox" class="acc-sett-checkbox d-none" name="dedicated_IP" id="dedicated-IP">
                                                                <label for="dedicated-IP" class="acc-sett-checkbox-label">
                                                                    <span class="checkmark">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </span>
                                                                    <span class="">Want to add a Port Forwarding for - $ 1.2/mo</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Add Port Forwarding</h5>
                                                </div>
                                                <div class="account-setting-list-item-right">
                                                    <div class="acc-sett-right-inner">
                                                        <ul class="acc-sett-checkbox-list m-0">
                                                            <li class="acc-sett-checkbox-list-item">
                                                                <input type="checkbox" class="acc-sett-checkbox d-none" name="add_port_forwarding" id="add-port-forwarding">
                                                                <label for="add-port-forwarding" class="acc-sett-checkbox-label">
                                                                    <span class="checkmark">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </span>
                                                                    <span class="">Want to add a Port Forwarding for - $ 1.2/mo</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="sec-sb-title mt-5 mb-3">Select Your Preferred Method of Payment:</h2>
                                    <div class="account-setting-main payment-accordion-main">
                                        <div class="account-setting-top payment-top">
                                            <div class="d-flex justify-content-start align-items-center gap-5">
                                                <h3 class="account-setting-title m-0">Pay With Paypal </h3>
                                                <img class="img-fluid" src="./assets/images/paypal-image.png" alt="">
                                            </div>
                                            <div class="">
                                                <i class="fa-solid fa-caret-down payment-acc-icon"></i>
                                            </div>
                                        </div>
                                        <div class="payment-inner-area">
                                            <h5 class="pay-sm-title">Review and Confirm Your</h5>
                                            <p class="payment-para m-0">Order Total: $ <strong>40</strong> Lifetime Plan ($40.00 prepaid lifetime) FastestPass Password Manager, 1 Year <strong>FREE</strong></p>
                                            <div class="coupon-code-area">
                                                <h5 class="pay-sm-title m-0">Have a Coupon Code?</h5>
                                                <div class="coupon-field-area">
                                                    <input class="coupon-field" placeholder="Enter Code" type="text" name="" id="">
                                                    <button class="secondary-btn border-0" type="button">Apply Coupon</button>
                                                </div>
                                            </div>
                                            <p class="payment-para m-0">You are agreeing with our <strong><a class="" href="#">Terms of Service </a>& <a href="#">Privacy Policy</a></strong> once you proceed to pay.</p>
                                            <button class="primary-btn mt-20px border-0" type="button">Pay With PayPal</button>
                                        </div>
                                    </div>
                                    <div class="account-setting-main payment-accordion-main">
                                        <div class="account-setting-top payment-top">
                                            <div class="d-flex justify-content-start align-items-center gap-5">
                                                <h3 class="account-setting-title m-0">Pay With Credit Card </h3>
                                                <img class="img-fluid" src="./assets/images/payment-img-1.png" alt="">
                                            </div>
                                            <div class="">
                                                <i class="fa-solid fa-caret-down payment-acc-icon"></i>
                                            </div>
                                        </div>
                                        <div class="payment-inner-area">
                                            <h5 class="pay-sm-title">Review and Confirm Your</h5>
                                            <p class="payment-para m-0">Order Total: $ <strong>40</strong> Lifetime Plan ($40.00 prepaid lifetime) FastestPass Password Manager, 1 Year <strong>FREE</strong></p>
                                            <div class="coupon-code-area">
                                                <h5 class="pay-sm-title m-0">Have a Coupon Code?</h5>
                                                <div class="coupon-field-area">
                                                    <input class="coupon-field" placeholder="Enter Code" type="text" name="" id="">
                                                    <button class="secondary-btn border-0" type="button">Apply Coupon</button>
                                                </div>
                                            </div>
                                            <p class="payment-para m-0">You are agreeing with our <strong><a class="" href="#">Terms of Service </a>& <a href="#">Privacy Policy</a></strong> once you proceed to pay.</p>
                                            <button class="primary-btn mt-20px border-0" type="button">Pay With Credit Card </button>
                                        </div>
                                    </div>
                                    <div class="account-setting-main payment-accordion-main ">
                                        <div class="account-setting-top payment-top">
                                            <div class="d-flex justify-content-start align-items-center gap-5">
                                                <h3 class="account-setting-title m-0">Pay With Crypto</h3>
                                                <img class="img-fluid" src="./assets/images/payment-img-3.png" alt="">
                                            </div>
                                            <div class="">
                                                <i class="fa-solid fa-caret-down payment-acc-icon"></i>
                                            </div>
                                        </div>
                                        <div class="payment-inner-area">
                                            <h5 class="pay-sm-title">Review and Confirm Your</h5>
                                            <p class="payment-para m-0">Order Total: $ <strong>40</strong> Lifetime Plan ($40.00 prepaid lifetime) FastestPass Password Manager, 1 Year <strong>FREE</strong></p>
                                            <div class="cripto-payment-options">
                                                <h5 class="pay-sm-title mb-3">Choose payment method</h5>
                                                <ul class="payment-option-list">
                                                    <li class="payment-option-list-item">
                                                        <input class="cripto-pay-radio d-none" type="radio" name="cripto_payment_radio" id="cripto-payment-radio-1">
                                                        <label class="payment-option-label" for="cripto-payment-radio-1">
                                                            <span class="crip-pay-img-area">
                                                                <img class="img-fluid" src="./assets/images/cripto-img-1.png" alt="">
                                                            </span>
                                                            <h6 class="cripto-payment-1 m-0">Bitcoin Cash</h6>
                                                        </label>
                                                    </li>
                                                    <li class="payment-option-list-item">
                                                        <input class="cripto-pay-radio d-none" type="radio" name="cripto_payment_radio" id="cripto-payment-radio-2">
                                                        <label class="payment-option-label" for="cripto-payment-radio-2">
                                                            <span class="crip-pay-img-area">
                                                                <img class="img-fluid" src="./assets/images/cripto-img-2.png" alt="">
                                                            </span>
                                                            <h6 class="cripto-payment-1 m-0">Litecoin</h6>
                                                        </label>
                                                    </li>
                                                    <li class="payment-option-list-item">
                                                        <input class="cripto-pay-radio d-none" type="radio" name="cripto_payment_radio" id="cripto-payment-radio-3">
                                                        <label class="payment-option-label" for="cripto-payment-radio-3">
                                                            <span class="crip-pay-img-area">
                                                                <img class="img-fluid" src="./assets/images/cripto-img-3.png" alt="">
                                                            </span>
                                                            <h6 class="cripto-payment-1 m-0">Ethereum</h6>
                                                        </label>
                                                    </li>
                                                    <li class="payment-option-list-item">
                                                        <input class="cripto-pay-radio d-none" type="radio" name="cripto_payment_radio" id="cripto-payment-radio-4">
                                                        <label class="payment-option-label" for="cripto-payment-radio-4">
                                                            <span class="crip-pay-img-area">
                                                                <img class="img-fluid" src="./assets/images/cripto-img-4.png" alt="">
                                                            </span>
                                                            <h6 class="cripto-payment-1 m-0">Bitcoin</h6>
                                                        </label>
                                                    </li>
                                                    <li class="payment-option-list-item">
                                                        <input class="cripto-pay-radio d-none" type="radio" name="cripto_payment_radio" id="cripto-payment-radio-5">
                                                        <label class="payment-option-label" for="cripto-payment-radio-5">
                                                            <span class="crip-pay-img-area">
                                                                <img class="img-fluid" src="./assets/images/cripto-img-5.png" alt="">
                                                            </span>
                                                            <h6 class="cripto-payment-1 m-0">Dash</h6>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="payment-para m-0">You are agreeing with our <strong><a class="" href="#">Terms of Service </a>& <a href="#">Privacy Policy</a></strong> once you proceed to pay.</p>
                                            <button class="primary-btn mt-20px border-0" type="button">Pay With NowPayments</button>
                                        </div>
                                    </div>
                                    <div class="account-setting-main payment-accordion-main">
                                        <div class="account-setting-top payment-top">
                                            <div class="d-flex justify-content-start align-items-center gap-5">
                                                <h3 class="account-setting-title m-0">Pay With Paypal or Credit Card </h3>
                                                <img class="img-fluid" src="./assets/images/payment-img-2.png" alt="">
                                            </div>
                                            <div class="">
                                                <i class="fa-solid fa-caret-down payment-acc-icon"></i>
                                            </div>
                                        </div>
                                        <div class="payment-inner-area">
                                            <h5 class="pay-sm-title">Review and Confirm Your</h5>
                                            <p class="payment-para m-0">Order Total: $ <strong>40</strong> Lifetime Plan ($40.00 prepaid lifetime) FastestPass Password Manager, 1 Year <strong>FREE</strong></p>
                                            <div class="coupon-code-area">
                                                <h5 class="pay-sm-title m-0">Have a Coupon Code?</h5>
                                                <div class="coupon-field-area">
                                                    <input class="coupon-field" placeholder="Enter Code" type="text" name="" id="">
                                                    <button class="secondary-btn border-0" type="button">Apply Coupon</button>
                                                </div>
                                            </div>
                                            <p class="payment-para m-0">You are agreeing with our <strong><a class="" href="#">Terms of Service </a>& <a href="#">Privacy Policy</a></strong> once you proceed to pay.</p>
                                            <button class="primary-btn mt-20px border-0" type="button">Pay With Paypal or Credit Card</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>
<script src="./assets/js/payment-cards.js"></script>