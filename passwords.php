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
                            <h2 class="sec-sb-title m-0">All Entries</h2>
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
                <div class="accordion passwordAccord" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item passwords-boxes-main pt-0">
                        <div class="col-12">
                            <div class="accordion-header">
                                <div class="dropdown">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Item (3)
                                    </button>
                                </div>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div class="passwords-boxes-area position-relative">
                                            <div class="loaderMain d-none">
                                                <h1>
                                                    <img src="https://fastestpass.com/themes/images/fastest-pass-logo.svg" />
                                                </h1>
                                                <div class="loading-wrapper">
                                                    <div class="loader"></div>
                                                </div>
                                            </div>
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Launch">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 17.2197V21.9997" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 13H22" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.5 22H16.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Setting">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 12.8804V11.1204C2 10.0804 2.85 9.22043 3.9 9.22043C5.71 9.22043 6.45 7.94042 5.54 6.37042C5.02 5.47042 5.33 4.30042 6.24 3.78042L7.97 2.79042C8.76 2.32042 9.78 2.60042 10.25 3.39042L10.36 3.58042C11.26 5.15042 12.74 5.15042 13.65 3.58042L13.76 3.39042C14.23 2.60042 15.25 2.32042 16.04 2.79042L17.77 3.78042C18.68 4.30042 18.99 5.47042 18.47 6.37042C17.56 7.94042 18.3 9.22043 20.11 9.22043C21.15 9.22043 22.01 10.0704 22.01 11.1204V12.8804C22.01 13.9204 21.16 14.7804 20.11 14.7804C18.3 14.7804 17.56 16.0604 18.47 17.6304C18.99 18.5404 18.68 19.7004 17.77 20.2204L16.04 21.2104C15.25 21.6804 14.23 21.4004 13.76 20.6104L13.65 20.4204C12.75 18.8504 11.27 18.8504 10.36 20.4204L10.25 20.6104C9.78 21.4004 8.76 21.6804 7.97 21.2104L6.24 20.2204C5.33 19.7004 5.02 18.5304 5.54 17.6304C6.45 16.0604 5.71 14.7804 3.9 14.7804C2.85 14.7804 2 13.9204 2 12.8804Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Trash">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 5.98047C17.67 5.65047 14.32 5.48047 10.98 5.48047C9 5.48047 7.02 5.58047 5.04 5.78047L3 5.98047" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M18.8484 9.13965L18.1984 19.2096C18.0884 20.7796 17.9984 21.9996 15.2084 21.9996H8.78844C5.99844 21.9996 5.90844 20.7796 5.79844 19.2096L5.14844 9.13965" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M10.3281 16.5H13.6581" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M9.5 12.5H14.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Launch">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 17.2197V21.9997" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 13H22" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.5 22H16.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Setting">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 12.8804V11.1204C2 10.0804 2.85 9.22043 3.9 9.22043C5.71 9.22043 6.45 7.94042 5.54 6.37042C5.02 5.47042 5.33 4.30042 6.24 3.78042L7.97 2.79042C8.76 2.32042 9.78 2.60042 10.25 3.39042L10.36 3.58042C11.26 5.15042 12.74 5.15042 13.65 3.58042L13.76 3.39042C14.23 2.60042 15.25 2.32042 16.04 2.79042L17.77 3.78042C18.68 4.30042 18.99 5.47042 18.47 6.37042C17.56 7.94042 18.3 9.22043 20.11 9.22043C21.15 9.22043 22.01 10.0704 22.01 11.1204V12.8804C22.01 13.9204 21.16 14.7804 20.11 14.7804C18.3 14.7804 17.56 16.0604 18.47 17.6304C18.99 18.5404 18.68 19.7004 17.77 20.2204L16.04 21.2104C15.25 21.6804 14.23 21.4004 13.76 20.6104L13.65 20.4204C12.75 18.8504 11.27 18.8504 10.36 20.4204L10.25 20.6104C9.78 21.4004 8.76 21.6804 7.97 21.2104L6.24 20.2204C5.33 19.7004 5.02 18.5304 5.54 17.6304C6.45 16.0604 5.71 14.7804 3.9 14.7804C2.85 14.7804 2 13.9204 2 12.8804Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Trash">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 5.98047C17.67 5.65047 14.32 5.48047 10.98 5.48047C9 5.48047 7.02 5.58047 5.04 5.78047L3 5.98047" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M18.8484 9.13965L18.1984 19.2096C18.0884 20.7796 17.9984 21.9996 15.2084 21.9996H8.78844C5.99844 21.9996 5.90844 20.7796 5.79844 19.2096L5.14844 9.13965" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M10.3281 16.5H13.6581" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M9.5 12.5H14.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="passwords-box">
                                                <input type="checkbox" class="pass-checkbox d-none" name="passwords_checkbox" id="password-checkbox-3">
                                                <label for="password-checkbox-3" class="passwords-box-label">
                                                    <div class="pass-box-top">
                                                        <span class="pas-check-square">
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="pass-box-center">
                                                        <img class="img-fluid pass-box-img" src="./assets/images/pass-img-3.png" alt="">
                                                        <h3 class="pass-name m-0">My Note</h3>
                                                    </div>
                                                    <div class="pass-box-bottom">
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Launch">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 17.2197V21.9997" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 13H22" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.5 22H16.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Setting">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 12.8804V11.1204C2 10.0804 2.85 9.22043 3.9 9.22043C5.71 9.22043 6.45 7.94042 5.54 6.37042C5.02 5.47042 5.33 4.30042 6.24 3.78042L7.97 2.79042C8.76 2.32042 9.78 2.60042 10.25 3.39042L10.36 3.58042C11.26 5.15042 12.74 5.15042 13.65 3.58042L13.76 3.39042C14.23 2.60042 15.25 2.32042 16.04 2.79042L17.77 3.78042C18.68 4.30042 18.99 5.47042 18.47 6.37042C17.56 7.94042 18.3 9.22043 20.11 9.22043C21.15 9.22043 22.01 10.0704 22.01 11.1204V12.8804C22.01 13.9204 21.16 14.7804 20.11 14.7804C18.3 14.7804 17.56 16.0604 18.47 17.6304C18.99 18.5404 18.68 19.7004 17.77 20.2204L16.04 21.2104C15.25 21.6804 14.23 21.4004 13.76 20.6104L13.65 20.4204C12.75 18.8504 11.27 18.8504 10.36 20.4204L10.25 20.6104C9.78 21.4004 8.76 21.6804 7.97 21.2104L6.24 20.2204C5.33 19.7004 5.02 18.5304 5.54 17.6304C6.45 16.0604 5.71 14.7804 3.9 14.7804C2.85 14.7804 2 13.9204 2 12.8804Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Trash">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 5.98047C17.67 5.65047 14.32 5.48047 10.98 5.48047C9 5.48047 7.02 5.58047 5.04 5.78047L3 5.98047" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M18.8484 9.13965L18.1984 19.2096C18.0884 20.7796 17.9984 21.9996 15.2084 21.9996H8.78844C5.99844 21.9996 5.90844 20.7796 5.79844 19.2096L5.14844 9.13965" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M10.3281 16.5H13.6581" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M9.5 12.5H14.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item passwords-boxes-main pt-0">
                        <div class="col-12">
                            <div class="accordion-header">
                                <div class="dropdown">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Folder (1)
                                    </button>
                                </div>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="passwords-boxes-area">
                                            <div class="passwords-box">
                                                <input type="checkbox" class="pass-checkbox d-none" name="folder_passwords_checkbox" id="folder-passwords-checkbox-1">
                                                <label for="folder-passwords-checkbox-1" class="passwords-box-label">
                                                    <div class="pass-box-top">
                                                        <span class="pas-check-square">
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="pass-box-center">
                                                        <img class="img-fluid pass-box-img" src="./assets/images/nordpass-logo.png" alt="">
                                                        <h3 class="pass-name m-0">bitwarden.com</h3>
                                                        <span class="pass-dum-email">jon.jones@gmail.com</span>
                                                    </div>
                                                    <div class="pass-box-bottom">
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Launch">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 17.2197V21.9997" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 13H22" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.5 22H16.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="">
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Setting">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 12.8804V11.1204C2 10.0804 2.85 9.22043 3.9 9.22043C5.71 9.22043 6.45 7.94042 5.54 6.37042C5.02 5.47042 5.33 4.30042 6.24 3.78042L7.97 2.79042C8.76 2.32042 9.78 2.60042 10.25 3.39042L10.36 3.58042C11.26 5.15042 12.74 5.15042 13.65 3.58042L13.76 3.39042C14.23 2.60042 15.25 2.32042 16.04 2.79042L17.77 3.78042C18.68 4.30042 18.99 5.47042 18.47 6.37042C17.56 7.94042 18.3 9.22043 20.11 9.22043C21.15 9.22043 22.01 10.0704 22.01 11.1204V12.8804C22.01 13.9204 21.16 14.7804 20.11 14.7804C18.3 14.7804 17.56 16.0604 18.47 17.6304C18.99 18.5404 18.68 19.7004 17.77 20.2204L16.04 21.2104C15.25 21.6804 14.23 21.4004 13.76 20.6104L13.65 20.4204C12.75 18.8504 11.27 18.8504 10.36 20.4204L10.25 20.6104C9.78 21.4004 8.76 21.6804 7.97 21.2104L6.24 20.2204C5.33 19.7004 5.02 18.5304 5.54 17.6304C6.45 16.0604 5.71 14.7804 3.9 14.7804C2.85 14.7804 2 13.9204 2 12.8804Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                                                            <a href="#" class="pass-pox-cta" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Trash">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 5.98047C17.67 5.65047 14.32 5.48047 10.98 5.48047C9 5.48047 7.02 5.58047 5.04 5.78047L3 5.98047" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M18.8484 9.13965L18.1984 19.2096C18.0884 20.7796 17.9984 21.9996 15.2084 21.9996H8.78844C5.99844 21.9996 5.90844 20.7796 5.79844 19.2096L5.14844 9.13965" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M10.3281 16.5H13.6581" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M9.5 12.5H14.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="add-items-btn-area">
                        <div class="">
                            <button class="item-btn" type="button">
                                <span class="item-btn-icon">
                                    <img class="img-fluid" src="./assets/images/folder-add.png" alt="">
                                </span>
                                <span>Add Folder</span>
                            </button>
                        </div>
                        <div class="">
                            <button class="item-btn" type="button">
                                <span class="item-btn-icon">
                                    <img class="img-fluid" src="./assets/images/add-circle.png" alt="">
                                </span>
                                <span>Add Item</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>