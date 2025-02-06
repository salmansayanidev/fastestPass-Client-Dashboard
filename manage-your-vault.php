<?php include './includes/sidebar.php' ?>
<link rel="stylesheet" href="./assets/css/manage-your-vault.css">
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
                            Improve your security
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="manage-vault-tabs-area">
                        <ul class="sharing-center-tabs-list">
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn active" type="button" data-view="Import">
                                    Import
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Export">
                                    Export
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Add Identities">
                                    Add Identities
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Open Your Favorites Sites">
                                    Open Your Favorites Sites
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="View Account History">
                                    View Account History
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="View Deleted Items">
                                    View Deleted Items
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="manage-tabs-view-area active" data-content="Import">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <h2 class="sec-sb-title m-1">Import your passwords to FastestPass</h2>
                                    <h4 class="sm-title">Step 1/3. Where are your passwords now?</h4>
                                    <span class="sm-tag">Choose your source</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="sm-tag mb-2">In one of these web browsers:</span>
                                <ul class="source-list">
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-1.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Chrome
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-2.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Firefox
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-3.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Edge
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-4.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Explorer
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-5.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Opera
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-6.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Safari
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <span class="sm-tag mb-2">In one of these password managers:</span>
                                <ul class="source-list">
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-7.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            NordPass
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-8.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            LastPass
                                        </h6>
                                    </li>
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-9.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Bitwarden
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <span class="sm-tag mb-2">Somewhere else, such as handwritten notes, a spreadsheet, or some other browser or password manager:</span>
                                <ul class="source-list">
                                    <li class="source-list-item">
                                        <span class="source-list-item-img">
                                            <img src="./assets/images/source-icon-10.png" alt="google-chrome">
                                        </span>
                                        <h6 class="source-list-item-title premium-tag m-0">
                                            Others
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>
<script src="./assets/js/manage-your-vault.js"></script>