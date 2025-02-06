<?php include './includes/sidebar.php' ?>
<link rel="stylesheet" href="./assets/css/improve-your-security.css">
<?php include './includes/header.php' ?>

<main>
    <section class="import-password-section pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area mt-0 border-btm">
                        <a class="primary-btn" href="advance-options.php">
                            Back to advanced options
                        </a>
                        <a href="improve-your-security.php" class="secondary-btn">
                            Manage your vault
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="manage-vault-tabs-area">
                        <ul class="sharing-center-tabs-list">
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn active" type="button" data-view="Generate Secure Password">
                                    Generate Secure Password
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Manage One-Time Password">
                                    Manage One-Time Password
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Credit Monitoring">
                                    Credit Monitoring
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="improve-your-security-tabs-view active" data-content="Generate Secure Password">
                        <form action="">
                            <ul class="account-setting-list">
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">Password</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner w-100">
                                            <input type="text" class="accc-sett-field w-100" value="spokesman-luminous-proving-cranial-serpent-passive-suing-unknown-unharmed-unguarded" name="" id="">
                                        </div>
                                    </div>
                                </li>
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">What Would You Like to Generate?</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner">
                                            <input class="manage-vault-radio d-none" checked type="radio" name="what_would_you_like_to_generate" value="password" id="generate-password">
                                            <label for="generate-password" class="acc-sett-checkbox-label">
                                                <span class="radio-circle"></span>
                                                <span>Password</span>
                                            </label>
                                        </div>
                                        <div class="acc-sett-right-inner">
                                            <input class="manage-vault-radio d-none" type="radio" name="what_would_you_like_to_generate" value="username" id="generate-username">
                                            <label for="generate-username" class="acc-sett-checkbox-label">
                                                <span class="radio-circle"></span>
                                                <span>Username</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">Password type</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner">
                                            <input class="manage-vault-radio d-none" type="radio" name="password_type" value="password" id="type-password">
                                            <label for="type-password" class="acc-sett-checkbox-label">
                                                <span class="radio-circle"></span>
                                                <span>Password</span>
                                            </label>
                                        </div>
                                        <div class="acc-sett-right-inner">
                                            <input class="manage-vault-radio d-none" checked type="radio" name="password_type" value="passphrase" id="type-passphrase">
                                            <label for="type-passphrase" class="acc-sett-checkbox-label">
                                                <span class="radio-circle"></span>
                                                <span>passphrase</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">Number of words</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner">
                                            <input type="number" class="accc-sett-field w-80px" value="10" name="" id="">
                                        </div>
                                    </div>
                                </li>
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">Word separator</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner">
                                            <input type="text" class="accc-sett-field w-80px" value="-" name="" id="">
                                        </div>
                                    </div>
                                </li>
                                <li class="account-setting-list-item">
                                    <div class="account-setting-list-item-left">
                                        <h5 class="acc-sett-sm-title m-0">Options</h5>
                                    </div>
                                    <div class="account-setting-list-item-right d-flex justify-content-start gap-10px flex-wrap">
                                        <div class="acc-sett-right-inner">
                                            <ul class="acc-sett-checkbox-list">
                                                <li class="acc-sett-checkbox-list-item">
                                                    <input type="checkbox" class="acc-sett-checkbox d-none" value="Capitalize" name="option" id="Capitalize">
                                                    <label for="Capitalize" class="acc-sett-checkbox-label">
                                                        <span class="checkmark">
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                        <span class="">Capitalize</span>
                                                    </label>
                                                </li>
                                                <li class="acc-sett-checkbox-list-item">
                                                    <input type="checkbox" class="acc-sett-checkbox d-none" value="include-number" name="option" id="include-number">
                                                    <label for="include-number" class="acc-sett-checkbox-label">
                                                        <span class="checkmark">
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                        <span class="">Include number</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="account-setting-btns-area d-flex justify-content-end align-items-center gap-10px mt-4">
                                <button class="acc-sett-btn btn2" type="submit">
                                    Regenerate Password
                                </button>
                                <button class="acc-sett-btn show-advan-sett-btn" type="button">
                                    Copy Password
                                </button>
                                <button class="acc-sett-btn show-advan-sett-btn" type="button">
                                    Password History
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>
<script src="./assets/js/improve-your-security.js"></script>