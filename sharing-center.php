<?php include './includes/sidebar.php' ?>
<link rel="stylesheet" href="./assets/css/passwords.css">
<?php include './includes/header.php' ?>

<main>
    <section class="passwords-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="passwords-top-left">
                        <div class="">
                            <h2 class="sec-sb-title m-0">Sharing Center</h2>
                        </div>
                        <div class="d-flex justify-content-start align-items-center gap-3">
                            <span class="sm-tag m-0 overflow-visible">1 Items selected</span>
                            <select class="form-select action-select" aria-label="Default select example">
                                <option selected>Action</option>
                                <option value="1">Action 1</option>
                                <option value="2">Action 2</option>
                                <option value="3">Action 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="passwords-top-right">
                        <div class="">
                            <button class="pass-view-type-btn" type="button">
                                <img class="img-fluid" src="./assets/images/gird-view-img.png" alt="">
                                <span>Grid view</span>
                            </button>
                        </div>
                        <div class="">
                            <button class="pass-view-type-btn" type="button">
                                <img class="img-fluid" src="./assets/images/list-view-img.png" alt="">
                                <span>List view</span>
                            </button>
                        </div>
                        <div class="">
                            <select class="form-select action-select w-180px" aria-label="Default select example">
                                <option selected>Sort by: Folder (a-z) 1</option>
                                <option value="1">Sort by: Folder (a-z) 2</option>
                                <option value="2">Sort by: Folder (a-z) 3</option>
                                <option value="3">Sort by: Folder (a-z) 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="passwords-boxes-main">
                        <ul class="sharing-center-tabs-list">
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Manage-Shared-Folders">
                                    Manage Shared Folders
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn active" type="button" data-view="Shared-with-Others">
                                    Shared with Others
                                </button>
                            </li>
                            <li class="sharing-center-tabs-list-item">
                                <button class="share-tab-btn" type="button" data-view="Shared-with-Me">
                                    Shared with Me
                                </button>
                            </li>
                        </ul>
                        <div class="sharing-center-main active" data-content="Shared-with-Others">
                            <div class="dropdown">
                                <button class="btn btn-secondary items-dropdown-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pending (2)
                                </button>
                                <ul class="dropdown-menu items-dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Item (1)</a></li>
                                    <li><a class="dropdown-item" href="#">Item (2)</a></li>
                                    <li><a class="dropdown-item" href="#">Item (3)</a></li>
                                </ul>
                            </div>
                            <div class="passwords-boxes-area">
                                <div class="passwords-box">
                                    <input type="checkbox" class="pass-checkbox d-none" name="passwords_checkbox" id="password-checkbox-1">
                                    <label for="password-checkbox-1" class="passwords-box-label">
                                        <div class="pass-box-top">
                                            <span class="pas-check-square">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </div>
                                        <div class="pass-box-center">
                                            <img class="img-fluid pass-box-img" src="./assets/images/pass-img-1.png" alt="">
                                            <h3 class="pass-name m-0">bitwarden.com</h3>
                                            <span class="pass-dum-email">jon.jones@gmail.com</span>
                                        </div>
                                        <div class="pass-box-bottom">
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Edit">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.0399 3.02001L8.15988 10.9C7.85988 11.2 7.55988 11.79 7.49988 12.22L7.06988 15.23C6.90988 16.32 7.67988 17.08 8.76988 16.93L11.7799 16.5C12.1999 16.44 12.7899 16.14 13.0999 15.84L20.9799 7.96001C22.3399 6.60001 22.9799 5.02001 20.9799 3.02001C18.9799 1.02001 17.3999 1.66001 16.0399 3.02001Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.9099 4.14999C15.5799 6.53999 17.4499 8.40999 19.8499 9.08999" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Share">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.9609 6.16992C18.9609 7.55992 20.3409 9.76992 20.6209 12.3199" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.48828 12.3697C3.74828 9.82973 5.10828 7.61973 7.08828 6.21973" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.19141 20.9404C9.35141 21.5304 10.6714 21.8604 12.0614 21.8604C13.4014 21.8604 14.6614 21.5604 15.7914 21.0104" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.0613 7.69965C13.5966 7.69965 14.8413 6.455 14.8413 4.91965C14.8413 3.3843 13.5966 2.13965 12.0613 2.13965C10.5259 2.13965 9.28125 3.3843 9.28125 4.91965C9.28125 6.455 10.5259 7.69965 12.0613 7.69965Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.83078 19.9204C6.36613 19.9204 7.61078 18.6757 7.61078 17.1404C7.61078 15.605 6.36613 14.3604 4.83078 14.3604C3.29543 14.3604 2.05078 15.605 2.05078 17.1404C2.05078 18.6757 3.29543 19.9204 4.83078 19.9204Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M19.1706 19.9204C20.706 19.9204 21.9506 18.6757 21.9506 17.1404C21.9506 15.605 20.706 14.3604 19.1706 14.3604C17.6353 14.3604 16.3906 15.605 16.3906 17.1404C16.3906 18.6757 17.6353 19.9204 19.1706 19.9204Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="SMS Tracking">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5H7" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 16.5H8" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 12.5H5" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Close">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16992 14.83L14.8299 9.17001" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.8299 14.83L9.16992 9.17001" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="passwords-box">
                                    <input type="checkbox" class="pass-checkbox d-none" name="passwords_checkbox" id="password-checkbox-2">
                                    <label for="password-checkbox-2" class="passwords-box-label">
                                        <div class="pass-box-top">
                                            <span class="pas-check-square">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </div>
                                        <div class="pass-box-center">
                                            <img class="img-fluid pass-box-img" src="./assets/images/pass-img-2.png" alt="">
                                            <h3 class="pass-name m-0">lastpass.com</h3>
                                            <span class="pass-dum-email">jon.jones@gmail.com</span>
                                        </div>
                                        <div class="pass-box-bottom">
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Edit">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.0399 3.02001L8.15988 10.9C7.85988 11.2 7.55988 11.79 7.49988 12.22L7.06988 15.23C6.90988 16.32 7.67988 17.08 8.76988 16.93L11.7799 16.5C12.1999 16.44 12.7899 16.14 13.0999 15.84L20.9799 7.96001C22.3399 6.60001 22.9799 5.02001 20.9799 3.02001C18.9799 1.02001 17.3999 1.66001 16.0399 3.02001Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.9099 4.14999C15.5799 6.53999 17.4499 8.40999 19.8499 9.08999" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Share">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.9609 6.16992C18.9609 7.55992 20.3409 9.76992 20.6209 12.3199" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.48828 12.3697C3.74828 9.82973 5.10828 7.61973 7.08828 6.21973" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.19141 20.9404C9.35141 21.5304 10.6714 21.8604 12.0614 21.8604C13.4014 21.8604 14.6614 21.5604 15.7914 21.0104" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.0613 7.69965C13.5966 7.69965 14.8413 6.455 14.8413 4.91965C14.8413 3.3843 13.5966 2.13965 12.0613 2.13965C10.5259 2.13965 9.28125 3.3843 9.28125 4.91965C9.28125 6.455 10.5259 7.69965 12.0613 7.69965Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.83078 19.9204C6.36613 19.9204 7.61078 18.6757 7.61078 17.1404C7.61078 15.605 6.36613 14.3604 4.83078 14.3604C3.29543 14.3604 2.05078 15.605 2.05078 17.1404C2.05078 18.6757 3.29543 19.9204 4.83078 19.9204Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M19.1706 19.9204C20.706 19.9204 21.9506 18.6757 21.9506 17.1404C21.9506 15.605 20.706 14.3604 19.1706 14.3604C17.6353 14.3604 16.3906 15.605 16.3906 17.1404C16.3906 18.6757 17.6353 19.9204 19.1706 19.9204Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="SMS Tracking">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5H7" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 16.5H8" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 12.5H5" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="">
                                                <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Close">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16992 14.83L14.8299 9.17001" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.8299 14.83L9.16992 9.17001" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="add-items-btn-area">
                                <div class="">
                                    <button class="item-btn" type="button">
                                        <span class="item-btn-icon">
                                            <img class="img-fluid" src="./assets/images/add-circle.png" alt="">
                                        </span>
                                        <span>Share Item</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>
<script src="./assets/js/sharing-center.js"></script>