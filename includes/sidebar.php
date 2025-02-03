<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/FastPass-fevicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Fastest Pass Dashboard</title>
</head>
<body>

    <div class="dashboard-main">
        <div class="side-bar">
            <div class="fastpass-logo-area text-center">
                <a class="text-decoration-none" href=".">
                    <img class="img-fluid" src="./assets/images/fastpass-logo.svg" alt="">
                </a>
            </div>
            <div class="fastPass-nav-area">
                <nav class="navigation">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="." class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.5 8.52V3.98C22.5 2.57 21.86 2 20.27 2H16.23C14.64 2 14 2.57 14 3.98V8.51C14 9.93 14.64 10.49 16.23 10.49H20.27C21.86 10.5 22.5 9.93 22.5 8.52Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.5 19.77V15.73C22.5 14.14 21.86 13.5 20.27 13.5H16.23C14.64 13.5 14 14.14 14 15.73V19.77C14 21.36 14.64 22 16.23 22H20.27C21.86 22 22.5 21.36 22.5 19.77Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 8.52V3.98C11 2.57 10.36 2 8.77 2H4.73C3.14 2 2.5 2.57 2.5 3.98V8.51C2.5 9.93 3.14 10.49 4.73 10.49H8.77C10.36 10.5 11 9.93 11 8.52Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 19.77V15.73C11 14.14 10.36 13.5 8.77 13.5H4.73C3.14 13.5 2.5 14.14 2.5 15.73V19.77C2.5 21.36 3.14 22 4.73 22H8.77C10.36 22 11 21.36 11 19.77Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                All Entries
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="passwords.php" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10V8C6.5 4.69 7.5 2 12.5 2C17.5 2 18.5 4.69 18.5 8V10" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 22H7.5C3.5 22 2.5 21 2.5 17V15C2.5 11 3.5 10 7.5 10H17.5C21.5 10 22.5 11 22.5 15V17C22.5 21 21.5 22 17.5 22Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.4965 16H16.5054" stroke="#404B69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.4955 16H12.5045" stroke="#404B69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.49451 16H8.50349" stroke="#404B69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Passwords
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="notes.php" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8701 8.88086H18.1201" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.87988 8.88086L7.62988 9.63086L9.87988 7.38086" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.8701 15.8809H18.1201" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.87988 15.8809L7.62988 16.6309L9.87988 14.3809" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.5 22H15.5C20.5 22 22.5 20 22.5 15V9C22.5 4 20.5 2 15.5 2H9.5C4.5 2 2.5 4 2.5 9V15C2.5 20 4.5 22 9.5 22Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Notes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.5001 7.16C18.4401 7.15 18.3701 7.15 18.3101 7.16C16.9301 7.11 15.8301 5.98 15.8301 4.58C15.8301 3.15 16.9801 2 18.4101 2C19.8401 2 20.9901 3.16 20.9901 4.58C20.9801 5.98 19.8801 7.11 18.5001 7.16Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.4704 14.4402C18.8404 14.6702 20.3504 14.4302 21.4104 13.7202C22.8204 12.7802 22.8204 11.2402 21.4104 10.3002C20.3404 9.59016 18.8104 9.35016 17.4404 9.59016" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.47047 7.16C6.53047 7.15 6.60047 7.15 6.66047 7.16C8.04047 7.11 9.14047 5.98 9.14047 4.58C9.14047 3.15 7.99047 2 6.56047 2C5.13047 2 3.98047 3.16 3.98047 4.58C3.99047 5.98 5.09047 7.11 6.47047 7.16Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.50043 14.4402C6.13043 14.6702 4.62043 14.4302 3.56043 13.7202C2.15043 12.7802 2.15043 11.2402 3.56043 10.3002C4.63043 9.59016 6.16043 9.35016 7.53043 9.59016" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5001 14.6307C12.4401 14.6207 12.3701 14.6207 12.3101 14.6307C10.9301 14.5807 9.83008 13.4507 9.83008 12.0507C9.83008 10.6207 10.9801 9.4707 12.4101 9.4707C13.8401 9.4707 14.9901 10.6307 14.9901 12.0507C14.9801 13.4507 13.8801 14.5907 12.5001 14.6307Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.58973 17.7813C8.17973 18.7213 8.17973 20.2613 9.58973 21.2013C11.1897 22.2713 13.8097 22.2713 15.4097 21.2013C16.8197 20.2613 16.8197 18.7213 15.4097 17.7813C13.8197 16.7213 11.1897 16.7213 9.58973 17.7813Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Addresses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 12.6094H19.5" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.5 10.2808V17.4308C19.47 20.2808 18.69 21.0008 15.72 21.0008H6.28003C3.26003 21.0008 2.5 20.2508 2.5 17.2708V10.2808C2.5 7.58078 3.13 6.71078 5.5 6.57078C5.74 6.56078 6.00003 6.55078 6.28003 6.55078H15.72C18.74 6.55078 19.5 7.30078 19.5 10.2808Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.5 6.73V13.72C22.5 16.42 21.87 17.29 19.5 17.43V10.28C19.5 7.3 18.74 6.55 15.72 6.55H6.28003C6.00003 6.55 5.74 6.56 5.5 6.57C5.53 3.72 6.31003 3 9.28003 3H18.72C21.74 3 22.5 3.75 22.5 6.73Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.75 17.8105H7.46997" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.61035 17.8105H13.0504" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Payment Cards
                            </a>
                        </li>
                        <li class="nav-item m-0">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.87 2.14984L21.87 5.74982C22.22 5.88982 22.5 6.30981 22.5 6.67981V9.99982C22.5 10.5498 22.05 10.9998 21.5 10.9998H3.5C2.95 10.9998 2.5 10.5498 2.5 9.99982V6.67981C2.5 6.30981 2.78 5.88982 3.13 5.74982L12.13 2.14984C12.33 2.06984 12.67 2.06984 12.87 2.14984Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.5 22H2.5V19C2.5 18.45 2.95 18 3.5 18H21.5C22.05 18 22.5 18.45 22.5 19V22Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.5 18V11" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.5 18V11" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 18V11" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5 18V11" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.5 18V11" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.5 22H23.5" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 8.5C13.3284 8.5 14 7.82843 14 7C14 6.17157 13.3284 5.5 12.5 5.5C11.6716 5.5 11 6.17157 11 7C11 7.82843 11.6716 8.5 12.5 8.5Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Bank Accounts
                            </a>
                        </li>
                        <hr class="nav-divider">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4099 11.1203C21.4099 16.0103 17.8599 20.5903 13.0099 21.9303C12.6799 22.0203 12.3198 22.0203 11.9898 21.9303C7.13984 20.5903 3.58984 16.0103 3.58984 11.1203V6.73028C3.58984 5.91028 4.20986 4.98028 4.97986 4.67028L10.5498 2.39031C11.7998 1.88031 13.2098 1.88031 14.4598 2.39031L20.0298 4.67028C20.7898 4.98028 21.4199 5.91028 21.4199 6.73028L21.4099 11.1203Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 12.5C13.6046 12.5 14.5 11.6046 14.5 10.5C14.5 9.39543 13.6046 8.5 12.5 8.5C11.3954 8.5 10.5 9.39543 10.5 10.5C10.5 11.6046 11.3954 12.5 12.5 12.5Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 12.5V15.5" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Security Dashboard
                            </a>
                        </li>
                        <li class="nav-item m-0">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 22H22.5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 6C7.53 6 3.5 10.03 3.5 15V22H21.5V15C21.5 10.03 17.47 6 12.5 6Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 2V3" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.5 4L5.5 5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.5 4L19.5 5" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Emergency Access 
                            </a>
                        </li>
                        <hr class="nav-divider">
                        <li class="nav-item">
                            <a href="account-setting.php" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 12C15.2614 12 17.5 9.76142 17.5 7C17.5 4.23858 15.2614 2 12.5 2C9.73858 2 7.5 4.23858 7.5 7C7.5 9.76142 9.73858 12 12.5 12Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.7101 15.741L16.17 19.281C16.03 19.421 15.9 19.681 15.87 19.871L15.68 21.221C15.61 21.711 15.95 22.051 16.44 21.981L17.79 21.791C17.98 21.761 18.25 21.631 18.38 21.491L21.92 17.951C22.53 17.341 22.82 16.631 21.92 15.731C21.03 14.841 20.3201 15.131 19.7101 15.741Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.2002 16.25C19.5002 17.33 20.3402 18.17 21.4202 18.47" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.91016 22C3.91016 18.13 7.76018 15 12.5002 15C13.5402 15 14.5402 15.15 15.4702 15.43" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Account Setting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 15C14.1569 15 15.5 13.6569 15.5 12C15.5 10.3431 14.1569 9 12.5 9C10.8431 9 9.5 10.3431 9.5 12C9.5 13.6569 10.8431 15 12.5 15Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.5 12.8794V11.1194C2.5 10.0794 3.35 9.21945 4.4 9.21945C6.21 9.21945 6.95 7.93945 6.04 6.36945C5.52 5.46945 5.83 4.29945 6.74 3.77945L8.47 2.78945C9.26 2.31945 10.28 2.59945 10.75 3.38945L10.86 3.57945C11.76 5.14945 13.24 5.14945 14.15 3.57945L14.26 3.38945C14.73 2.59945 15.75 2.31945 16.54 2.78945L18.27 3.77945C19.18 4.29945 19.49 5.46945 18.97 6.36945C18.06 7.93945 18.8 9.21945 20.61 9.21945C21.65 9.21945 22.51 10.0694 22.51 11.1194V12.8794C22.51 13.9194 21.66 14.7794 20.61 14.7794C18.8 14.7794 18.06 16.0594 18.97 17.6294C19.49 18.5394 19.18 19.6994 18.27 20.2194L16.54 21.2094C15.75 21.6794 14.73 21.3994 14.26 20.6094L14.15 20.4194C13.25 18.8494 11.77 18.8494 10.86 20.4194L10.75 20.6094C10.28 21.3994 9.26 21.6794 8.47 21.2094L6.74 20.2194C5.83 19.6994 5.52 18.5294 6.04 17.6294C6.95 16.0594 6.21 14.7794 4.4 14.7794C3.35 14.7794 2.5 13.9194 2.5 12.8794Z" stroke="#404B69" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Advanced Options
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.52 19.5H8C7.38 19.5 6.83 19.48 6.34 19.41C3.71 19.12 3 17.88 3 14.5V9.5C3 6.12 3.71 4.88 6.34 4.59C6.83 4.52 7.38 4.5 8 4.5H11.46" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.5195 4.5H16.9995C17.6195 4.5 18.1695 4.52 18.6595 4.59C21.2895 4.88 21.9995 6.12 21.9995 9.5V14.5C21.9995 17.88 21.2895 19.12 18.6595 19.41C18.1695 19.48 17.6195 19.5 16.9995 19.5H15.5195" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.5 2V22" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.5941 12H11.6031" stroke="#404B69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.59412 12H7.6031" stroke="#404B69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Generate Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sharing-center.php" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.46 6.16992C19.46 7.55992 20.84 9.76992 21.12 12.3199" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.99023 12.3707C4.25023 9.8307 5.61023 7.6207 7.59023 6.2207" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.69043 20.9395C9.85043 21.5295 11.1704 21.8595 12.5604 21.8595C13.9004 21.8595 15.1604 21.5595 16.2904 21.0095" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5603 7.70062C14.0956 7.70062 15.3403 6.45598 15.3403 4.92062C15.3403 3.38527 14.0956 2.14062 12.5603 2.14062C11.0249 2.14062 9.78027 3.38527 9.78027 4.92062C9.78027 6.45598 11.0249 7.70062 12.5603 7.70062Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.3298 19.9194C6.86516 19.9194 8.10981 18.6747 8.10981 17.1394C8.10981 15.604 6.86516 14.3594 5.3298 14.3594C3.79445 14.3594 2.5498 15.604 2.5498 17.1394C2.5498 18.6747 3.79445 19.9194 5.3298 19.9194Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.6696 19.9194C21.205 19.9194 22.4496 18.6747 22.4496 17.1394C22.4496 15.604 21.205 14.3594 19.6696 14.3594C18.1343 14.3594 16.8896 15.604 16.8896 17.1394C16.8896 18.6747 18.1343 19.9194 19.6696 19.9194Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                                Sharing Center
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 22C18 22 22.5 17.5 22.5 12C22.5 6.5 18 2 12.5 2C7 2 2.5 6.5 2.5 12C2.5 17.5 7 22 12.5 22Z" stroke="#404B69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.7119 6C13.6784 6 14.4814 6.25279 15.1208 6.75836C15.7602 7.26394 16.0799 7.99257 16.0799 8.94424C16.0799 9.61338 15.9461 10.1636 15.6784 10.5948C15.4108 11.026 15.0167 11.487 14.4963 11.9777C14.4219 12.052 14.1989 12.2677 13.8271 12.6245C13.4703 12.9665 13.2249 13.3309 13.0911 13.7175C12.9572 14.0892 12.8903 14.5353 12.8903 15.0558H11.4851C11.4851 13.9703 11.7379 13.0929 12.2435 12.4238C12.4368 12.1859 12.7639 11.8513 13.2249 11.4201C13.7305 10.9442 14.1022 10.5428 14.3401 10.2156C14.5929 9.87361 14.7193 9.48699 14.7193 9.05576C14.7193 8.46097 14.5335 8.02231 14.1617 7.73978C13.8048 7.44238 13.2918 7.29368 12.6227 7.29368C12.0725 7.29368 11.6041 7.35316 11.2175 7.47212C10.8457 7.57621 10.4219 7.73978 9.9461 7.96283L9.5 6.75836C10.0353 6.52045 10.5409 6.33457 11.0167 6.20074C11.5074 6.06691 12.0725 6 12.7119 6ZM12.1766 18C11.9089 18 11.7007 17.9182 11.552 17.7546C11.4033 17.6059 11.329 17.4052 11.329 17.1524C11.329 16.8996 11.4033 16.6989 11.552 16.5502C11.7007 16.3866 11.9089 16.3048 12.1766 16.3048C12.4442 16.3048 12.6524 16.3866 12.8011 16.5502C12.9498 16.6989 13.0242 16.8996 13.0242 17.1524C13.0242 17.4052 12.9498 17.6059 12.8011 17.7546C12.6524 17.9182 12.4442 18 12.1766 18Z" fill="#404B69"/>
                                </svg>                                    
                                Help
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-btm-area">
                <div class="premium-tag-area d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="./assets/images/premium-icon.png" alt="">
                    <span class="premium-tag">Go Premium for $3/month</span>
                </div>
                <div class="upgrade-btn-area">
                    <span class="days-count">28 Days left in trial</span>
                    <button class="upgrade-btn" type="button">
                        Upgrade
                    </button>
                </div>
                <div class="copy-right-area d-flex justify-content-center align-items-center">
                    <img src="./assets/images/copyright.png" alt="">
                    <p class="copyright-para m-0">2024 FastestPass. All rights reserved.</p>
                </div>
            </div>
        </div>