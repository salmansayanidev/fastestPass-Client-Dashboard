<?php include './includes/sidebar.php' ?>
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./assets/css/account-setting.css">

<main>
    <section class="account-setting-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="passwords-top-left">
                        <h2 class="sec-sb-title m-0">Account Setting</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="passwords-boxes-main">
                        <ul class="sharing-center-tabs-list">
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn active" type="button" data-view="General">
                                    General
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Passwordless Options">
                                    Passwordless Options
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Multifactor Options">
                                    Multifactor Options
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Trusted Devices">
                                    Trusted Devices
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Mobile Devices">
                                    Mobile Devices
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Never URLs">
                                    Never URLs
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Equivalent Domains">
                                    Equivalent Domains
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="URL Rules">
                                    URL Rules
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="account-sett-form-area active" data-content="General">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-20px d-flex justify-content-start align-items-center gap-10px">
                                    <p class="para m-0">Manage your FastestPass account information, privacy, email subscriptions, and security settings.</p>
                                    <button type="button" class="exclaimation-circle-btn">
                                        <i class="fa-solid fa-exclamation"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-12">
                                <form action="">

                                    <div class="account-setting-main">
                                        <div class="account-setting-top">
                                            <h3 class="account-setting-title">Login Credentials</h3>
                                        </div>
                                        <ul class="account-setting-list">
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Account Email</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-right-inner">
                                                        <input type="email" class="accc-sett-field" value="jon.jones@gmail.com" name="" id="">
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Master Password</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px">
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Change Master Password
                                                        </a>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Revert Master Password Change
                                                        </a>
                                                    </div>
                                                    <div class="acc-sett-text-area">
                                                        <p class="acc-sett-text m-0">You last changed your FastestPass master password on October 25, 2023 at 6:51 PM.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Master Password Reminder</h5>
                                                </div>
                                                <div class="account-setting-list-item-right justify-content-start gap-10px">
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            View
                                                        </a>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="account-setting-main">
                                        <div class="account-setting-top">
                                            <h3 class="account-setting-title">Account Information</h3>
                                        </div>
                                        <ul class="account-setting-list">
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Type</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-text-area">
                                                        <p class="acc-sett-text m-0">LastPass Free User</p>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Upgrade to Premium
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Active Device Type</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-text-area">
                                                        <p class="acc-sett-text m-0">Computer - 3 device switches left. <a class="" href="#" target="_blank">Learn more</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Links</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            My Account
                                                        </a>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Payment History
                                                        </a>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Email Subscriptions
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Language</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-right-inner">
                                                        <select class="form-select acc-sett-select w-85px" aria-label="Default select example">
                                                            <option value="1" selected>English</option>
                                                            <option value="2">Chinese</option>
                                                            <option value="3">Arabic</option>
                                                            <option value="4">Spanish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Time Zone</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-right-inner">
                                                        <select class="form-select acc-sett-select w-320px" aria-label="Default select example">
                                                            <option value="1" selected>(+05:00) Islamabad, Karachi, Tashkent, Ekaterinburg</option>
                                                            <option value="2">(+05:00) Islamabad, Karachi, Tashkent, Ekaterinburg 1</option>
                                                            <option value="3">(+05:00) Islamabad, Karachi, Tashkent, Ekaterinburg 2</option>
                                                            <option value="4">(+05:00) Islamabad, Karachi, Tashkent, Ekaterinburg 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="account-setting-main">
                                        <div class="account-setting-top">
                                            <h3 class="account-setting-title">SMS Account Recovery</h3>
                                        </div>
                                        <ul class="account-setting-list">
                                            <li class="account-setting-list-item">
                                                <div class="account-setting-list-item-left">
                                                    <h5 class="acc-sett-sm-title m-0">Recovery Phone</h5>
                                                </div>
                                                <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                    <div class="acc-sett-text-area">
                                                        <p class="acc-sett-text m-0">Not set</p>
                                                    </div>
                                                    <div class="acc-sett-right-inner">
                                                        <a class="acc-sett-link" href="#">
                                                            Update Phone Number
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="advance-setting-area">

                                        <div class="account-setting-main">
                                            <div class="account-setting-top">
                                                <h3 class="account-setting-title">Alerts</h3>
                                            </div>
                                            <ul class="account-setting-list">
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Password Alerts</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <a class="acc-sett-link" href="#">
                                                                Disable Password Alerts
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Re-prompt for Master Password</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right">
                                                        <div class="acc-sett-right-inner">
                                                            <div class="d-flex justify-content-start align-items-center gap-10px">
                                                                <h3 class="acc-sett-md-title m-0">Re-prompt for your FastestPass master password:</h3>
                                                                <button type="button" class="exclaimation-circle-btn">
                                                                    <i class="fa-solid fa-exclamation"></i>
                                                                </button>
                                                            </div>
                                                            <ul class="acc-sett-checkbox-list">
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox1">
                                                                    <label for="Re_prompt_checkbox1" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Access an Identity</span>
                                                                    </label>
                                                                </li>
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox2">
                                                                    <label for="Re_prompt_checkbox2" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Access a Site's password</span>
                                                                    </label>
                                                                </li>
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox3">
                                                                    <label for="Re_prompt_checkbox3" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Access a Site</span>
                                                                    </label>
                                                                </li>
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox4">
                                                                    <label for="Re_prompt_checkbox4" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Access a Secure Note</span>
                                                                    </label>
                                                                </li>
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox5">
                                                                    <label for="Re_prompt_checkbox5" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Access a Form Fill</span>
                                                                    </label>
                                                                </li>
                                                                <li class="acc-sett-checkbox-list-item">
                                                                    <input type="checkbox" class="acc-sett-checkbox d-none" name="Re_prompt_checkbox" id="Re_prompt_checkbox6">
                                                                    <label for="Re_prompt_checkbox6" class="acc-sett-checkbox-label">
                                                                        <span class="checkmark">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </span>
                                                                        <span class="">Log in to a site</span>
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
                                                <h3 class="account-setting-title">Bookmarklet Auto-Logoff</h3>
                                            </div>
                                            <ul class="account-setting-list">
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Security Email</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="email" class="accc-sett-field" value="" name="" id="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Country Restriction</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" name="Country_Restriction" id="Country-Restriction">
                                                            <label for="Country-Restriction" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Only allow login from selected countries:</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Tor Networks</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" checked name="Tor_Networks" id="Tor-Networks">
                                                            <label for="Tor-Networks" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Prohibit logins from Tor networks.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Revert Master Password</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" checked name="Revert_Master_Password" id="Revert-Master-Password">
                                                            <label for="Revert-Master-Password" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Allow master password changes to be reverted</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Disable Email Verification</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" name="Disable_Email_Verification" id="Disable-Email-Verification">
                                                            <label for="Disable-Email-Verification" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Don't require email verification from unknown devices and locations.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Disable Multifactor Trust Expiration</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" name="Disable_Multifactor" id="Disable-Multifactor">
                                                            <label for="Disable-Multifactor" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Don't end trust period after 30 days.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Auto-Logoff Other Devices</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" name="Auto-Logoff_Other_Devices" id="Auto-Logoff-Other-Devices">
                                                            <label for="Auto-Logoff-Other-Devices" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Log out of other devices upon login from a different device.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Password Iterations</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" name="Password_Iterations" id="Password-Iterations">
                                                            <label for="Password-Iterations" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Log out of other devices upon login from a different device.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Security Email</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="email" class="accc-sett-field" value="600000" name="" id="">
                                                        </div>
                                                        <div class="acc-sett-right-inner">
                                                            <button type="button" class="exclaimation-circle-btn">
                                                                <i class="fa-solid fa-exclamation"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Website Auto-Logoff</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <select class="form-select acc-sett-select w-250px" aria-label="Default select example">
                                                                <option value="1" selected>2 Weeks</option>
                                                                <option value="2">4 Weeks</option>
                                                                <option value="3">6 Weeks</option>
                                                                <option value="4">8 Weeks</option>
                                                            </select>
                                                        </div>
                                                        <div class="acc-sett-right-inner">
                                                            <button type="button" class="exclaimation-circle-btn">
                                                                <i class="fa-solid fa-exclamation"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Bookmarklet Auto-Logoff</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <select class="form-select acc-sett-select w-250px" aria-label="Default select example">
                                                                <option value="1" selected>2 Weeks</option>
                                                                <option value="2">4 Weeks</option>
                                                                <option value="3">6 Weeks</option>
                                                                <option value="4">8 Weeks</option>
                                                            </select>
                                                        </div>
                                                        <div class="acc-sett-right-inner">
                                                            <button type="button" class="exclaimation-circle-btn">
                                                                <i class="fa-solid fa-exclamation"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="account-setting-main">
                                            <div class="account-setting-top">
                                                <h3 class="account-setting-title">Privacy</h3>
                                            </div>
                                            <ul class="account-setting-list">
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Track History</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" checked name="Track_History" id="Track-History">
                                                            <label for="Track-History" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Keep track of login and form fill history.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Help Improve Lockmypass</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" checked name="Help-Improve_Lockmypass" id="Help-Improve-Lockmypass">
                                                            <label for="Help-Improve-Lockmypass" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Send anonymous error reporting and interaction data to improve Lockmypass.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Enable App Attribution</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <input type="checkbox" class="acc-sett-checkbox d-none" checked name="Enable_App_Attribution" id="Enable-App-Attribution">
                                                            <label for="Enable-App-Attribution" class="acc-sett-checkbox-label">
                                                                <span class="checkmark">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </span>
                                                                <span class="">Send anonymous data about your Lockmypass journey to help us improve your experience.</span>
                                                            </label>
                                                        </div>
                                                        <button type="button" class="exclaimation-circle-btn">
                                                            <i class="fa-solid fa-exclamation"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="account-setting-main">
                                            <div class="account-setting-top">
                                                <h3 class="account-setting-title">Tools</h3>
                                            </div>
                                            <ul class="account-setting-list">
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Destroy Sessions</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <a class="acc-sett-link" href="#">
                                                                Destroy Sessions
                                                            </a>
                                                        </div>
                                                        <div class="acc-sett-right-inner">
                                                            <button type="button" class="exclaimation-circle-btn">
                                                                <i class="fa-solid fa-exclamation"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="account-setting-list-item">
                                                    <div class="account-setting-list-item-left">
                                                        <h5 class="acc-sett-sm-title m-0">Remove Duplicates</h5>
                                                    </div>
                                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                                        <div class="acc-sett-right-inner">
                                                            <a class="acc-sett-link" href="#">
                                                                Remove Duplicates
                                                            </a>
                                                        </div>
                                                        <div class="acc-sett-right-inner">
                                                            <button type="button" class="exclaimation-circle-btn">
                                                                <i class="fa-solid fa-exclamation"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="account-setting-btns-area d-flex justify-content-end align-items-center gap-10px">
                                        <button class="acc-sett-btn show-advan-sett-btn" type="button">
                                            Show Advanced Settings 
                                        </button>
                                        <button class="acc-sett-btn btn2" type="button">
                                            Save
                                        </button>
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
<script src="./assets/js/account-setting.js"></script>