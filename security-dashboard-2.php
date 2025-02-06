<?php include './includes/sidebar.php' ?>
<link rel="stylesheet" href="./assets/css/security-dashboard.css">
<?php include './includes/header.php' ?>

<main>
    <section class="security-dashboard-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-sb-title m-0">Security Dashboard</h2>
                </div>
                <div class="col-12">
                    <div class="security-dashboard-main">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="security-dashboard-left">
                                    <div class="security-score-area">
                                        <div class="sec-score-top">
                                            <h3 class="sec-dash-sb-title">Security score</h3>
                                            <p class="para m-0 fw-bold">We see room for improvement. Let’s boost that score! <a class="text-decoration-none fw-normal" href="#">Learn more</a></p>
                                        </div>
                                        <div class="sec-score-bottom">
                                            <div class="sec-score-bottom-left">
                                                <div class="progress position-relative">
                                                    <div class="barOverflow">
                                                        <div class="bar"></div>
                                                    </div>
                                                    <div class="progress-text-area">
                                                        <h3 class="bar-text security-score-percentage mb-2"><span class="bar-per">78</span>%</h3>
                                                        <span class="bar-text-result">Average safety</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sec-score-bottom-right">
                                                <table class="security-score-table">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex justify-content-start align-items-center gap-10px">
                                                                <span class="sec-score-tble-text">At-Risk Passwords</span>
                                                                <button class="exclaimation-circle-btn" type="button">
                                                                    <i class="fa-solid fa-exclamation"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-webkit-center">
                                                                <span class="sec-score-tble-count">1</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-end">
                                                                <a href="#" class="sec-score-tble-text">View passwords</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex justify-content-start align-items-center gap-10px">
                                                                <span class="sec-score-tble-text">Multifactor Authentication</span>
                                                                <button class="exclaimation-circle-btn" type="button">
                                                                    <i class="fa-solid fa-exclamation"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-webkit-center">
                                                                <span class="inactive-tag">Inactive</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-end">
                                                                <a href="#" class="sec-score-tble-text">Activate</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex justify-content-start align-items-center gap-10px">
                                                                <span class="sec-score-tble-text">Trusted Devices</span>
                                                                <button class="exclaimation-circle-btn" type="button">
                                                                    <i class="fa-solid fa-exclamation"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-webkit-center">
                                                                <span class="sec-score-tble-count">0</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-end">
                                                                <a href="#" class="sec-score-tble-text">Manage</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex justify-content-start align-items-center gap-10px">
                                                                <span class="sec-score-tble-text">Permitted Mobile Devices</span>
                                                                <button class="exclaimation-circle-btn" type="button">
                                                                    <i class="fa-solid fa-exclamation"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-webkit-center">
                                                                <span class="sec-score-tble-count">0</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-end">
                                                                <a href="#" class="sec-score-tble-text">Manage</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="security-score-area">
                                        <div class="sec-score-top">
                                            <h3 class="sec-dash-sb-title">Dark Web Monitoring</h3>
                                            <p class="para m-0">Cyber-crime is real. Don’t be a victim. With dark web monitoring, you’ll be proactively alerted if sites from your vault are breached. Monitor these addresses. All day, every day. <a class="text-decoration-none" href="#">Learn more</a></p>
                                        </div>
                                        <div class="dark-web-monitoring-bottom">
                                            <table class="security-score-table dark-web-monitoring-tble">
                                                <tr>
                                                    <td>
                                                        <span class="vault-email">jon.jones@outloock.net</span>
                                                    </td>
                                                    <td>
                                                        <div class="text-webkit-center">
                                                            <span class="sec-score-tble-count">Secure</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <a href="#" class="sec-score-tble-text stop-monitoring">Stop monitoring</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="vault-email">jon.jones@gmail.com</span>
                                                    </td>
                                                    <td>
                                                        <div class="text-webkit-center">
                                                            <span class="not-monitored-tag">Not monitored</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <a href="#" class="sec-score-tble-text start-monitoring">Start monitoring</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="security-dashboard-right">
                                    <div class="alert-icon-area">
                                        <img class="img-fluid" src="./assets/images/alert-icon.png" alt="">
                                    </div>
                                    <h3 class="sec-dash-sb-title">You have no alerts</h3>
                                    <p class="para m-0 fw-bold">Rest at ease. You’ll find out immediately if you’re compromised in an online data breach.</p>
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
<script src="./assets/js/security-dashboard.js"></script>