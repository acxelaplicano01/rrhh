<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Recursos Humanos </title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.5/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.3/datatables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- estilos del menu -->
    <style>
        /* Google Fonts Import Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow: hidden;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #1967b1;
            z-index: 100;
            transition: all 0.5s ease;
        }

        .sidebar.close {
            width: 78px;
        }

        .sidebar .logo-details {
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details i {
            font-size: 30px;
            color: #fff;
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
        }

        .sidebar .logo-details .logo_name {
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            transition: 0.3s ease;
            transition-delay: 0.1s;
        }

        .sidebar.close .logo-details .logo_name {
            transition-delay: 0s;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links {
            height: 100%;
            padding: 30px 0 150px 0;
            overflow: auto;
        }

        .sidebar.close .nav-links {
            overflow: visible;
        }

        .sidebar .nav-links::-webkit-scrollbar {
            display: none;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li:hover {
            background: #3483c5;
        }

        .sidebar .nav-links li .iocn-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar.close .nav-links li .iocn-link {
            display: block
        }

        .sidebar .nav-links li i {
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li.showMenu i.arrow {
            transform: rotate(-180deg);
        }

        .sidebar.close .nav-links i.arrow {
            display: none;
        }

        .sidebar .nav-links li a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sidebar .nav-links li a .link_name {
            font-size: 18px;
            font-weight: 400;
            color: #fff;
            transition: all 0.3s ease;
        }

        .sidebar.close .nav-links li a .link_name {
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li .sub-menu {
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #3483c5;
            display: none;
        }

        .sidebar .nav-links li.showMenu .sub-menu {
            display: block;
        }

        .sidebar .nav-links li .sub-menu a {
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.2s ease;
        }

        .sidebar .nav-links li .sub-menu a:hover {
            opacity: 1;
        }

        .sidebar.close .nav-links li .sub-menu {
            position: absolute;
            left: 100%;
            top: -10px;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;
        }

        .sidebar.close .nav-links li:hover .sub-menu {
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li .sub-menu .link_name {
            display: none;
        }

        .sidebar.close .nav-links li .sub-menu .link_name {
            font-size: 18px;
            opacity: 1;
            display: block;
        }

        .sidebar .nav-links li .sub-menu.blank {
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li:hover .sub-menu.blank {
            top: 50%;
            transform: translateY(-50%);
        }

        .sidebar .profile-details {
            position: fixed;
            bottom: 0;
            width: 260px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #1967b1;
            padding: 12px 0;
            transition: all 0.5s ease;
        }

        .sidebar.close .profile-details {
            background: none;
        }

        .sidebar.close .profile-details {
            width: 78px;
        }

        .sidebar .profile-details .profile-content {
            display: flex;
            align-items: center;
        }

        .sidebar .profile-details img {
            height: 52px;
            width: 52px;
            object-fit: cover;
            border-radius: 16px;
            margin: 0 14px 0 12px;
            background: #1967b1;
            transition: all 0.5s ease;
        }

        .sidebar.close .profile-details img {
            padding: 10px;
        }

        .sidebar .profile-details .profile_name,
        .sidebar .profile-details .job {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            white-space: nowrap;
        }

        .sidebar.close .profile-details i,
        .sidebar.close .profile-details .profile_name,
        .sidebar.close .profile-details .job {
            display: none;
        }

        .sidebar .profile-details .job {
            font-size: 12px;
        }

        .home-section {
            position: relative;
            background: #f8f8f8;
            height: 100vh;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
            overflow-y: auto;
        }

        .sidebar.close~.home-section {
            left: 78px;
            width: calc(100% - 78px);
        }

        .home-content {
            align-items: center;
            flex-wrap: wrap;
            padding: 35px;
        }

        .home-section nav .bx-menu,
        .home-section nav .text {
            color: #11101d;
            font-size: 35px;
        }

        .home-section nav .bx-menu {
            cursor: pointer;
            margin-right: 10px;
        }

        .home-section nav .text {
            font-size: 26px;
            font-weight: 600;
        }

        .pagina {
            display: none;
        }

        .pagina.active {
            display: block;
        }

        .home-section nav {
            display: flex;
            justify-content: space-between;
            height: 80px;
            background: #fff;
            align-items: center;
            width: 100%;
            left: 250px;
            z-index: 100;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }

        .sidebar.active~.home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }

        .home-section nav .sidebar-button {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 500;
        }

        nav .sidebar-button i {
            font-size: 35px;
            margin-right: 10px;
        }

        .home-section nav .search-box {
            position: relative;
            height: 50px;
            max-width: 550px;
            width: 100%;
            margin: 0 20px;
        }

        nav .search-box input {
            height: 100%;
            width: 100%;
            outline: none;
            background: #f8f8f8;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            font-size: 18px;
            padding: 0 15px;
        }

        nav .search-box .bx-search {
            position: absolute;
            height: 40px;
            width: 40px;
            background: #1967b1;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 4px;
            line-height: 40px;
            text-align: center;
            color: #fff;
            font-size: 22px;
            transition: all 0.4 ease;
        }

        .home-section nav .profile-details {
            display: flex;
            align-items: center;
            background: fff;
            border: 2px solid #fff;
            border-radius: 6px;
            height: 50px;
            min-width: 190px;
            padding: 0 15px 0 15px;
        }

       /* nav .profile-details img {
            height: 40px;
            width: 40px;
            border-radius: 6px;
            object-fit: cover;
        }

        nav .profile-details .admin_name {
            font-size: 15px;
            font-weight: 500;
            color: #000;
            margin: 0 10px;
            white-space: nowrap;
        }

        nav .profile-details i {
            font-size: 25px;
            color: #000;
        }
*/





        @media (max-width: 700px) {

            nav .sidebar-button .dashboard,
            nav .profile-details .admin_name,
            nav .profile-details i {
                display: none;
            }

            .home-section nav .profile-details {
                height: 50px;
                min-width: 50px;
            }

            .home-content .sales-boxes .sales-details {
                width: 560px;
            }
        }

        @media (max-width: 550px) {
            .overview-boxes .box {
                width: 100%;
                margin-bottom: 15px;
            }

            .sidebar.active~.home-section nav .profile-details {
                display: none;
            }
        }


        @media screen and (max-width: 400px) {
            .sidebar {
                width: 240px;
            }

            .sidebar.close {
                width: 78px;
            }

            .sidebar .profile-details {
                width: 240px;
            }

            .sidebar.close .profile-details {
                background: none;
            }

            .sidebar.close .profile-details {
                width: 78px;
            }

            .home-section {
                left: 240px;
                width: calc(100% - 240px);
            }

            .sidebar.close~.home-section {
                left: 78px;
                width: calc(100% - 78px);
            }
        }
    </style>

    <!-- estilos del menu -->
    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        .container {
            position: relative;
            min-height: 100vh;
            max-width: 600px;
            width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .container header {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .container .form {
            margin-top: 20px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .input-box label {
            color: #333;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .form .gender-box {
            margin-top: 20px;
        }

        .gender-box h3 {
            color: #333;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .form :where(.gender-option, .gender) {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form .gender {
            column-gap: 5px;
        }

        .gender input {
            accent-color: rgb(55, 27, 195);
        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .gender label {
            color: #707070;
        }

        .address :where(input, .select-box) {
            margin-top: 15px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #3d15dd;
        }

        .form button:hover {
            background: #3412bd;
        }

        /*Responsive*/
        @media screen and (max-width: 500px) {
            .form .column {
                flex-wrap: wrap;
            }

            .form :where(.gender-option, .gender) {
                row-gap: 15px;
            }
        }
    </style>

    <!-- estilos del menu -->
    <style>
        /* Import Google Font - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        ::selection {
            color: #fff;
            background: #618cf8;
        }

        .wrapper {
            display: grid;
            gap: 15px;
            grid-template-columns: repeat(auto-fill, 265px);
        }

        .wrapper li {
            height: 250px;
            list-style: none;
            border-radius: 5px;
            padding: 15px 20px 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .add-box,
        .icon,
        .bottom-content,
        .popup,
        .settings .menu li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header {
            align-items: center;
            justify-content: space-between;
        }

        .content header i {
            display: flex;
        }

        .add-box {
            cursor: pointer;
            flex-direction: column;
            justify-content: center;
        }

        .add-box:hover {
            background: #b0b0b083;
        }

        .add-box .icon {
            height: 78px;
            width: 78px;
            color: #000000;
            font-size: 40px;
            border-radius: 50%;
            justify-content: center;
            border: 2px dashed #000000;
        }

        .add-box p {
            color: #000000;
            font-weight: 500;
            margin-top: 20px;
        }

        .note {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .note .details {
            max-height: 165px;
            overflow-y: auto;
        }

        .note .details::-webkit-scrollbar,
        .popup textarea::-webkit-scrollbar {
            width: 0;
        }

        .note .details:hover::-webkit-scrollbar,
        .popup textarea:hover::-webkit-scrollbar {
            width: 5px;
        }

        .note .details:hover::-webkit-scrollbar-track,
        .popup textarea:hover::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 25px;
        }

        .note .details:hover::-webkit-scrollbar-thumb,
        .popup textarea:hover::-webkit-scrollbar-thumb {
            background: #e6e6e6;
            border-radius: 25px;
        }

        .note p {
            font-size: 22px;
            font-weight: 500;
        }

        .note span {
            display: block;
            color: #575757;
            font-size: 16px;
            margin-top: 5px;
        }

        .note .bottom-content {
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }

        .bottom-content span {
            color: #6D6D6D;
            font-size: 14px;
        }

        .bottom-content .settings {
            position: relative;
        }

        .bottom-content .settings i {
            color: #6D6D6D;
            cursor: pointer;
            font-size: 15px;
        }

        .settings .menu {
            z-index: 1;
            bottom: 0;
            right: -5px;
            padding: 5px 0;
            background: #fff;
            position: absolute;
            border-radius: 4px;
            transform: scale(0);
            transform-origin: bottom right;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s ease;
        }

        .settings.show .menu {
            transform: scale(1);
        }

        .settings .menu li {
            height: 25px;
            font-size: 16px;
            margin-bottom: 2px;
            padding: 17px 15px;
            cursor: pointer;
            box-shadow: none;
            border-radius: 0;
            justify-content: flex-start;
        }

        .menu li:last-child {
            margin-bottom: 0;
        }

        .menu li:hover {
            background: #f5f5f5;
        }

        .menu li i {
            padding-right: 8px;
        }

        .popup-box {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .popup-box .popup {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 3;
            width: 100%;
            max-width: 400px;
            justify-content: center;
            transform: translate(-50%, -50%) scale(0.95);
        }

        .popup-box,
        .popup {
            opacity: 0;
            pointer-events: none;
            transition: all 0.25s ease;
        }

        .popup-box.show,
        .popup-box.show .popup {
            opacity: 1;
            pointer-events: auto;
        }

        .popup-box.show .popup {
            transform: translate(-50%, -50%) scale(1);
        }

        .popup .content {
            border-radius: 5px;
            background: #fff;
            width: calc(100% - 15px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .content header {
            display: flex;
            padding: 15px 25px;
            border-bottom: 1px solid #ccc;
        }

        .content header p {
            font-size: 20px;
            font-weight: 500;
        }

        .content header i {
            color: #8b8989;
            cursor: pointer;
            font-size: 23px;
        }

        .content form {
            margin: 15px 25px 35px;
        }

        .content form .row {
            margin-bottom: 20px;
        }

        form .row label {
            font-size: 18px;
            display: block;
            margin-bottom: 6px;
        }

        form :where(input, textarea) {
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 17px;
            padding: 0 15px;
            border-radius: 4px;
            border: 1px solid #999;
        }

        form :where(input, textarea):focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.11);
        }

        form .row textarea {
            height: 150px;
            resize: none;
            padding: 8px 15px;
        }

        form button {
            width: 100%;
            height: 50px;
            color: #fff;
            outline: none;
            border: none;
            cursor: pointer;
            font-size: 17px;
            border-radius: 4px;
            background: #b0b0b0;
        }

        form button:hover {
            background: #8b8989;
        }

        @media (max-width: 660px) {
            .wrapper {
                margin: 15px;
                gap: 15px;
                grid-template-columns: repeat(auto-fill, 100%);
            }

            .popup-box .popup {
                max-width: calc(100% - 15px);
            }

            .bottom-content .settings i {
                font-size: 17px;
            }
        }
    </style>
    <style>
        .home-content .overview-boxes {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px;
            margin-bottom: 26px;
        }

        .overview-boxes .box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: calc(100% / 4 - 15px);
            background: #fff;
            padding: 15px 14px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .overview-boxes .box-topic {
            font-size: 20px;
            font-weight: 500;
        }

        .home-content .box .number {
            display: inline-block;
            font-size: 35px;
            margin-top: -6px;
            font-weight: 500;
        }

        .home-content .box .indicator {
            display: flex;
            align-items: center;
        }

        .home-content .box .indicator i {
            height: 20px;
            width: 20px;
            background: #8FDACB;
            line-height: 20px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            margin-right: 5px;
        }

        .box .indicator i.down {
            background: #e87d88;
        }

        .home-content .box .indicator .text {
            font-size: 12px;
        }

        .home-content .box .cart {
            display: inline-block;
            font-size: 32px;
            height: 50px;
            width: 50px;
            background: #cce5ff;
            line-height: 50px;
            text-align: center;
            color: #66b0ff;
            border-radius: 12px;
            margin: -15px 0 0 6px;
        }

        .home-content .box .cart.two {
            color: #2BD47D;
            background: #C0F2D8;
        }

        .home-content .box .cart.three {
            color: #ffc233;
            background: #ffe8b3;
        }

        .home-content .box .cart.four {
            color: #831272;
            background: #fbc1de;
        }

        .home-content .total-order {
            font-size: 20px;
            font-weight: 500;
        }

        .home-content .sales-boxes {
            display: flex;
            justify-content: space-between;
            /* padding: 0 20px; */
        }

        /* left box */
        .home-content .sales-boxes .recent-sales {
            width: 65%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .home-content .sales-boxes .sales-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sales-boxes .box .title {
            font-size: 24px;
            font-weight: 500;
            /* margin-bottom: 10px; */
        }

        .sales-boxes .sales-details li.topic {
            font-size: 20px;
            font-weight: 500;
        }

        .sales-boxes .sales-details ul {
            padding-left: 1rem
        }

        .sales-boxes .sales-details li {
            list-style: none;
            margin: 8px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            /* ajusta el ancho máximo según tu diseño */
        }

        .sales-boxes .sales-details li a {
            font-size: 18px;
            color: #333;
            font-size: 400;
            text-decoration: none;
        }

        .sales-boxes .box .button {
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .sales-boxes .box .button a {
            color: #fff;
            background: #0A2558;
            padding: 4px 12px;
            font-size: 15px;
            font-weight: 400;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sales-boxes .box .button a:hover {
            background: #0d3073;
        }

        /* Right box */
        .home-content .sales-boxes .top-sales {
            width: 35%;
            background: #ffffff;
            padding: 10px 20px;
            margin: 0 20px 0 0;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .sales-boxes .top-sales li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
        }

        .sales-boxes .top-sales li a img {
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 12px;
            margin-right: 25px;
            background: #ffffff;
        }

        .sales-boxes .top-sales li a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sales-boxes .top-sales li .product,
        .price {
            font-size: 17px;
            font-weight: 400;
            margin-right: 30px;
            color: #333;
        }

        @media (max-width: 1150px) {
            .home-content .sales-boxes {
                flex-direction: column;
            }

            .home-content .sales-boxes .box {
                width: 100%;
                overflow-x: scroll;
                margin-bottom: 30px;
            }

            .home-content .sales-boxes .top-sales {
                margin: 0;
            }
        }

        @media (max-width: 1000px) {
            .overview-boxes .box {
                width: calc(100% / 2 - 15px);
                margin-bottom: 15px;
            }
        }

        @media (max-width: 550px) {
            .overview-boxes .box {
                width: 100%;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 600px) {
            #filterable-cards {
                justify-content: center;
            }

            #filterable-cards .card {
                width: calc(100% / 2 - 10px);
            }
        }
    </style>
    <style>
        /* Google Font CDN Link */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        ::selection {
            background: #b0b0b0;
            color: #fff;
        }

        .contenedor2 {
            max-width: 1000px;
            width: 100%;
            padding: 40px 50px 40px 40px;
            background: #fff;

            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .contenedor2 .topic {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .contents {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .contents .list {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin-right: 50px;
            position: relative;
        }

        .contents .list label {
            height: 60px;
            font-size: 22px;
            font-weight: 500;
            line-height: 60px;
            cursor: pointer;
            padding-left: 25px;
            transition: all 0.5s ease;
            color: #333;
            z-index: 12;
        }

        #home:checked~.list label.home,
        #blog:checked~.list label.blog,
        #help:checked~.list label.help,
        #code:checked~.list label.code,
        #about:checked~.list label.about {
            color: #fff;
        }

        .contents .list label:hover {
            color: #b0b0b0;
        }

        .contents .slider {
            position: absolute;
            left: 0;
            top: 0;
            height: 60px;
            width: 100%;
            border-radius: 12px;
            background: #b0b0b0;
            transition: all 0.4s ease;
        }

        #home:checked~.list .slider {
            top: 0;
        }

        #blog:checked~.list .slider {
            top: 60px;
        }

        #help:checked~.list .slider {
            top: 120px;
        }

        #code:checked~.list .slider {
            top: 180px;
        }

        #about:checked~.list .slider {
            top: 240px;
        }

        .contents .text-content {
            width: 80%;
            height: 100%;
        }

        .contents .text {
            display: none;
        }

        .contents .text .title {
            font-size: 25px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .contents .text p {
            text-align: justify;
        }

        .contents .text-content .home {
            display: block;
        }

        #home:checked~.text-content .home,
        #blog:checked~.text-content .blog,
        #help:checked~.text-content .help,
        #code:checked~.text-content .code,
        #about:checked~.text-content .about {
            display: block;
        }

        #blog:checked~.text-content .home,
        #help:checked~.text-content .home,
        #code:checked~.text-content .home,
        #about:checked~.text-content .home {
            display: none;
        }

        .contents input {
            display: none;
        }
    </style>
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        .contenedor {
            position: relative;
            max-width: 900px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .contenedor header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .contenedor header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #b0b0b0;
        }

        .contenedor form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .contenedor form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .contenedor form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .contenedor form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .contenedor form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input :focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .contenedor form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #b0b0b0;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .contenedor form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #9b9999;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .contenedor form {
                overflow-y: scroll;
            }

            .contenedor form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-bar-chart'></i>
            <span class="logo_name">RRHH</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" id="btnHome" class="active" onclick="mostrarPagina('Home')">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#" id="btnPermisos">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Permisos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Permisos</a></li>
                    <li><a href="#">Compensatorios</a></li>
                    <li><a href="#">Personales</a></li>
                    <li><a href="#">Administrativos</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#" id="btnModulo">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Modulo</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Modulo</a></li>
                    <li><a href="#">A</a></li>
                    <li><a href="#">B</a></li>
                    <li><a href="#">C</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="btnEmpleados" onclick="mostrarPagina('Empleados')">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Empleados</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Empleados</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="btnNotas" onclick="mostrarPagina('Notas')">
                    <i class='bx bx-note'></i>
                    <span class="link_name">Notas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Notas</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#" id="btnActividades" onclick="mostrarPagina('Actividades')">
                        <i class='bx bx-plug'></i>
                        <span class="link_name">Actividades</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Actividades</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Procesos PAA</a></li>
                    <li><a href="#">Comisiones</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="btnInventario">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Inventario</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Inventario</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="btnConfiguracion">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Configuración</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configuración</a></li>
                </ul>
            </li>
            <li>
                <!-- PERFIL ABAJO DEL MENU
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/409/974/non_2x/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-line-style-user-icon-set-vector.jpg" alt="perfil">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"></div>
                        <div class="job"></div>
                    </div>
                    <a href="/"><i class='bx bx-log-out'></i></a>
                </div> -->
            </li>
        </ul>
    </div>
    <section class="home-section" style="scrollbar-width: none;">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="text">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
            

            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
<span class="sr-only">Open user menu</span>
<img class="w-8 h-8 rounded-full" src="https://static.vecteezy.com/system/resources/previews/007/409/974/non_2x/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-line-style-user-icon-set-vector.jpg" alt="user photo">
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div>Acxel Aplicano</div>
      <div class="font-medium truncate">acxel.aplicano@unah.hn</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
    </ul>
    <div class="py-2">
      <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>

            

            </div>
        </nav>

        <div class="home-content" style="scrollbar-width: none;">
            <div id="Registro" class="pagina">
                <div class="contenedor">
                    <header>Registration</header>

                    <form action="#">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Detalles de Persona</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter your name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Date of Birth</label>
                                        <input type="date" placeholder="Enter birth date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" placeholder="Enter your email" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mobile Number</label>
                                        <input type="number" placeholder="Enter mobile number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Gender</label>
                                        <select required>
                                            <option disabled selected>Select gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label>Occupation</label>
                                        <input type="text" placeholder="Enter your ccupation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title">Identity Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>ID Type</label>
                                        <input type="text" placeholder="Enter ID type" required>
                                    </div>

                                    <div class="input-field">
                                        <label>ID Number</label>
                                        <input type="number" placeholder="Enter ID number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Authority</label>
                                        <input type="text" placeholder="Enter issued authority" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued State</label>
                                        <input type="text" placeholder="Enter issued state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Date</label>
                                        <input type="date" placeholder="Enter your issued date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Expiry Date</label>
                                        <input type="date" placeholder="Enter expiry date" required>
                                    </div>
                                </div>

                                <button class="nextBtn">
                                    <span class="btnText">Next</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form second">
                            <div class="details address">
                                <span class="title">Address Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Address Type</label>
                                        <input type="text" placeholder="Permanent or Temporary" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Nationality</label>
                                        <input type="text" placeholder="Enter nationality" required>
                                    </div>

                                    <div class="input-field">
                                        <label>State</label>
                                        <input type="text" placeholder="Enter your state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>District</label>
                                        <input type="text" placeholder="Enter your district" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Block Number</label>
                                        <input type="number" placeholder="Enter block number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Ward Number</label>
                                        <input type="number" placeholder="Enter ward number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="details family">
                                <span class="title">Family Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Father Name</label>
                                        <input type="text" placeholder="Enter father name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother Name</label>
                                        <input type="text" placeholder="Enter mother name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Grandfather</label>
                                        <input type="text" placeholder="Enter grandfther name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Spouse Name</label>
                                        <input type="text" placeholder="Enter spouse name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Father in Law</label>
                                        <input type="text" placeholder="Father in law name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother in Law</label>
                                        <input type="text" placeholder="Mother in law name" required>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="backBtn">
                                        <i class="uil uil-navigator"></i>
                                        <span class="btnText">Back</span>
                                    </div>

                                    <button class="sumbit">
                                        <span class="btnText">Submit</span>
                                        <i class="uil uil-navigator"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <div id="Notas" class="pagina">
                <div class="popup-box">
                    <div class="popup">
                        <div class="content">
                            <header>
                                <p></p>
                                <i class="uil uil-times"></i>
                            </header>
                            <form action="#">
                                <div class="row title">
                                    <label>Título</label>
                                    <input type="text" spellcheck="false">
                                </div>
                                <div class="row description">
                                    <label>Descripción</label>
                                    <textarea spellcheck="false"></textarea>
                                </div>
                                <button></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <li class="add-box">
                        <div class="icon"><i class="uil uil-plus"></i></div>
                        <p>Nueva nota</p>
                    </li>
                </div>
            </div>

            <div id="Home" class="pagina active">
                <div class="overview-boxes">
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Empleados</div>
                            <div class="number">8</div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Empleados registrados</span>
                            </div>
                        </div>
                        <i class='bx bx-user cart'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Permisos Disp.</div>
                            <div class="number">8</div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Interacciones</span>
                            </div>
                        </div>
                        <i class='bx bx-chat cart two'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Permisos Otor.</div>
                            <div class="number">8</div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Imagenes recibidas</span>
                            </div>
                        </div>
                        <i class='bx bx-images cart three'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Archivos</div>
                            <div class="number">4</div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Archivos recibidos</span>
                            </div>
                        </div>
                        <i class='bx bx-file-blank down cart four'></i>
                    </div>
                </div>
                <div class="sales-boxes">
                    <div class="recent-sales box">
                        <div class="title">Otorgados Recientemente</div>
                        <div class="sales-details">
                            <ul class="details">
                                <li class="topic">Fecha</li>

                                <li><a href="#"> 20/2/2024 </a></li>

                            </ul>
                            <ul class="details">
                                <li class="topic">Empleado</li>

                                <li><a onclick="mostrarPagina('')" href="#">Acxel Fernando Aplicano</a></li>

                            </ul>
                            <ul class="details">
                                <li class="topic">Tipo</li>

                                <li><a href="#">Personal</a></li>

                            </ul>
                            <ul class="details">
                                <li class="topic">Nombre Archivo</li>

                                <li><a onclick="mostrarPagina('')" href="#">A</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="top-sales box">
                        <div class="title">Periodos</div>
                        <ul class="top-sales-details">
                            <li>
                                <a onclick="mostrarPagina('')" href="#">
                                    <img src="https://cdn-icons-png.flaticon.com/512/9815/9815472.png" alt="">
                                    <span class="product">II PAC</span>
                                </a>
                                <span class="price">Enero 2024</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div id="Actividades" class="pagina">
                <div class="contenedor2">
                    <div class="topic">Resumen de empleado</div>
                    <div class="contents">
                        <input type="radio" name="slider" checked id="home" />
                        <input type="radio" name="slider" id="blog" />
                        <input type="radio" name="slider" id="help" />
                        <input type="radio" name="slider" id="code" />
                        <input type="radio" name="slider" id="about" />
                        <div class="list">
                            <label for="home" class="home">
                                <i class="fas fa-home"></i>
                                <span class="title">Empleado</span>
                            </label>
                            <label for="blog" class="blog">
                                <span class="icon"><i class="fas fa-blog"></i></span>
                                <span class="title">Proyectos</span>
                            </label>
                            <label for="help" class="help">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <span class="title">Investigación</span>
                            </label>
                            <label for="code" class="code">
                                <span class="icon"><i class="fas fa-code"></i></span>
                                <span class="title">PAA</span>
                            </label>
                            <label for="about" class="about">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <span class="title">Permisos</span>
                            </label>
                            <div class="slider"></div>
                        </div>
                        <div class="text-content">
                            <div class="home text">
                                <div class="title">Empleado</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi ducimus
                                    sequi dignissimos
                                    expedita tempore omnis quos cum, possimus, aspernatur esse nihil commodi est maiores
                                    dolorum rem iusto
                                    atque, beatae voluptas sit eligendi architecto dolorem temporibus. Non magnam ipsam,
                                    voluptas quasi
                                    nam
                                    dicta ut. Ad corrupti aliquid obcaecati alias, nemo veritatis porro nisi eius
                                    sequi dignissimos ea repellendus quibusdam minima ipsum animi quae, libero quisquam
                                    a! Laudantium iste
                                    est
                                    sapiente, ullam itaque odio iure laborum voluptatem quaerat tempore doloremque quam
                                    modi, atque minima
                                    enim saepe! Dolorem rerum minima incidunt, officia!
                                </p>
                            </div>
                            <div class="blog text">
                                <div class="title">Proyectos</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tempora, unde
                                    reprehenderit incidunt
                                    excepturi blanditiis ullam dignissimos provident quam? Fugit, enim! Architecto ad
                                    officiis dignissimos
                                    ex
                                    quae iusto amet pariatur, ea eius aut velit, tempora magnam hic autem maiores unde
                                    corrupti tenetur
                                    delectus! Voluptatum praesentium labore consectetur ea qui illum illo
                                    distinctio, sunt, ipsam rerum optio quibusdam cum a? Aut facilis non fuga molestiae
                                    voluptatem omnis
                                    reprehenderit, dignissimos commodi repellat sapiente natus ipsam, ipsa distinctio.
                                    Ducimus repudiandae
                                    fuga aliquid, numquam.
                                </p>
                            </div>
                            <div class="help text">
                                <div class="title">Investigaciones</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores error neque,
                                    officia excepturi
                                    dolores
                                    quis dolor, architecto iusto deleniti a soluta nostrum. Fuga reiciendis beatae,
                                    dicta voluptatem,
                                    vitae
                                    eligendi maxime accusamus. Amet totam aut odio velit cumque autem neque sequi
                                    provident mollitia, nisi
                                    sunt maiores facilis debitis in officiis asperiores saepe quo soluta
                                    laudantium ad non quisquam! Repellendus culpa necessitatibus aliquam quod mollitia
                                    perspiciatis
                                    ducimus
                                    doloribus perferendis autem, omnis, impedit, veniam qui dolorem? Ipsam nihil
                                    assumenda, sit ratione
                                    blanditiis eius aliquam libero iusto, dolorum aut perferendis modi laboriosam sint
                                    dolor.
                                </p>
                            </div>
                            <div class="code text">
                                <div class="title">PAA</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore magnam vitae
                                    inventore blanditiis
                                    nam
                                    tenetur voluptates doloribus error atque reprehenderit, necessitatibus minima
                                    incidunt a eius corrupti
                                    placeat, quasi similique deserunt, harum? Quia ut impedit ab earum expedita soluta
                                    repellat
                                    perferendis
                                    hic tempora inventore, accusantium porro consequuntur quisquam et assumenda
                                    distinctio dignissimos doloremque enim nemo delectus deserunt! Ullam perspiciatis
                                    quae aliquid animi
                                    quam
                                    amet deleniti, at dolorum tenetur, tempore laborum.
                                </p>
                            </div>
                            <div class="about text">
                                <div class="title">Permisos</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus incidunt
                                    possimus quas ad,
                                    sit
                                    nam veniam illo ullam sapiente, aspernatur fugiat atque. Laboriosam libero
                                    voluptatum molestiae veniam
                                    earum quisquam, laudantium aperiam, eligendi dicta animi maxime sunt non nisi, ex,
                                    ipsa! Soluta ex,
                                    quibusdam voluptatem distinctio asperiores recusandae veritatis optio dolorem
                                    illo nesciunt quos ullam, dicta numquam ipsam cumque sed. Blanditiis omnis placeat,
                                    enim sit dicta
                                    eligendi voluptatibus laborum consectetur repudiandae tempora numquam molestiae
                                    rerum mollitia nemo.
                                    Velit
                                    perspiciatis, nesciunt, quo illo quas error debitis molestiae et sapiente neque
                                    tempore natus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Empleados" class="pagina" style="background-color: #ffffff; padding: 20px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);  overflow-x: auto;
           white-space: nowrap; ">
                <button id="btnAgregar" style="padding: 10px 20px;
                                       background-color: #bad1e8;
                                       color: white;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;"
                    onclick="mostrarPagina('RegistrarEmpleados')">Agregar</button>
                <button id="btnAgregar" style="padding: 10px 20px;
                                       background-color: #1254a1;
                                       color: white;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;"
                    onclick="mostrarPagina('RegistrarEmpleados')">Exportar</button>
                <button id="btnAgregar" style="padding: 10px 20px;
                                       background-color: #ffd973;
                                       color: white;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;"
                    onclick="mostrarPagina('RegistrarEmpleados')">Boton</button>
                <table id="example" class="table table-bordered table-hover table-striped table-light">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Nombre Empleado</th>
                            <th>DNI</th>
                            <th>Fecha Nacimiento</th>
                            <th>Correo Electrónico</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                            <th>Estado Civil</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>141585</td>
                            <td>Acxel Fernando Aplicano</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>4</td>
                            <td>141585</td>
                            <td>Acxel Fernando Aplicano</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>5</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>6</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>7</td>
                            <td>141585</td>
                            <td>Acxel Fernando Aplicano</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>8</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>9</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>10</td>
                            <td>141585</td>
                            <td>Acxel Fernando Aplicano</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>11</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>12</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>13</td>
                            <td>141585</td>
                            <td>Acxel Fernando Aplicano</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>14</td>
                            <td>141585</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                        <tr class="">
                            <td>15</td>
                            <td>202300</td>
                            <td>Carlos Alberto Mejia</td>
                            <td>0610-2002-00032</td>
                            <td>01/07/2002</td>
                            <td>acxel.aplicano@unah.hn</td>
                            <td>9637-8797</td>
                            <td>Masculino</td>
                            <td>Soltero</td>
                            <td>Choluteca</td>
                            <td>Activo</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Fecha Nacimiento</th>
                            <th>Correo Electrónico</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                            <th>Estado Civil</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                        </tr>
                </table>
            </div>

            <div id="RegistrarEmpleados" class="pagina">
                <div class="contenedor">
                    <header>Registration</header>

                    <form action="#">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Personal Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter your name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Date of Birth</label>
                                        <input type="date" placeholder="Enter birth date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" placeholder="Enter your email" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mobile Number</label>
                                        <input type="number" placeholder="Enter mobile number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Gender</label>
                                        <select required>
                                            <option disabled selected>Select gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label>Occupation</label>
                                        <input type="text" placeholder="Enter your ccupation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title">Identity Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>ID Type</label>
                                        <input type="text" placeholder="Enter ID type" required>
                                    </div>

                                    <div class="input-field">
                                        <label>ID Number</label>
                                        <input type="number" placeholder="Enter ID number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Authority</label>
                                        <input type="text" placeholder="Enter issued authority" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued State</label>
                                        <input type="text" placeholder="Enter issued state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Date</label>
                                        <input type="date" placeholder="Enter your issued date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Expiry Date</label>
                                        <input type="date" placeholder="Enter expiry date" required>
                                    </div>
                                </div>

                                <button class="nextBtn">
                                    <span class="btnText">Next</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form second">
                            <div class="details address">
                                <span class="title">Address Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Address Type</label>
                                        <input type="text" placeholder="Permanent or Temporary" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Nationality</label>
                                        <input type="text" placeholder="Enter nationality" required>
                                    </div>

                                    <div class="input-field">
                                        <label>State</label>
                                        <input type="text" placeholder="Enter your state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>District</label>
                                        <input type="text" placeholder="Enter your district" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Block Number</label>
                                        <input type="number" placeholder="Enter block number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Ward Number</label>
                                        <input type="number" placeholder="Enter ward number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="details family">
                                <span class="title">Family Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Father Name</label>
                                        <input type="text" placeholder="Enter father name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother Name</label>
                                        <input type="text" placeholder="Enter mother name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Grandfather</label>
                                        <input type="text" placeholder="Enter grandfther name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Spouse Name</label>
                                        <input type="text" placeholder="Enter spouse name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Father in Law</label>
                                        <input type="text" placeholder="Father in law name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother in Law</label>
                                        <input type="text" placeholder="Mother in law name" required>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <div class="backBtn">
                                        <i class="uil uil-navigator"></i>
                                        <span class="btnText">Back</span>
                                    </div>

                                    <button class="sumbit">
                                        <span class="btnText">Submit</span>
                                        <i class="uil uil-navigator"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <script src="menu.js"></script>
    <script src="Notas.js"></script>
    <script src="registro form.js"></script>

</body>
<script>
    function mostrarPagina(idPagina) {
        // Ocultar todas las páginas
        var paginas = document.querySelectorAll('.pagina');
        paginas.forEach(function (pagina) {
            pagina.classList.remove('active');
        });
        // Mostrar la página seleccionada
        var paginaSeleccionada = document.getElementById(idPagina);
        paginaSeleccionada.classList.add('active');
    }

    document.addEventListener("DOMContentLoaded", function () {
        var buttons = document.querySelectorAll('.sidebar .nav-links li a');

        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Remover la clase 'active' de todos los botones
                buttons.forEach(function (btn) {
                    btn.classList.remove('active');
                });

                // Agregar la clase 'active' al botón clickeado
                this.classList.add('active');
            });
        });
    });
</script>
<!-- cdn de los scripts de DataTable-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "infoFiltered": "(filtrado de _MAX_ entradas totales)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron registros coincidentes",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "dom": '<"top"lf>rt<"bottom"ip><"clear">',
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna en orden ascendente",
                    "sortDescending": ": Activar para ordenar la columna en orden descendente"
                }
            }
        });

    });

    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    const addBox = document.querySelector(".add-box"),
        popupBox = document.querySelector(".popup-box"),
        popupTitle = popupBox.querySelector("header p"),
        closeIcon = popupBox.querySelector("header i"),
        titleTag = popupBox.querySelector("input"),
        descTag = popupBox.querySelector("textarea"),
        addBtn = popupBox.querySelector("button");

    const months = ["January", "February", "March", "April", "May", "June", "July",
        "August", "September", "October", "November", "December"];
    const notes = JSON.parse(localStorage.getItem("notes") || "[]");
    let isUpdate = false, updateId;

    addBox.addEventListener("click", () => {
        popupTitle.innerText = "Crear nota nueva";
        addBtn.innerText = "Crear nota";
        popupBox.classList.add("show");
        document.querySelector("body").style.overflow = "hidden";
        if (window.innerWidth > 660) titleTag.focus();
    });

    closeIcon.addEventListener("click", () => {
        isUpdate = false;
        titleTag.value = descTag.value = "";
        popupBox.classList.remove("show");
        document.querySelector("body").style.overflow = "auto";
    });

    function showNotes() {
        if (!notes) return;
        document.querySelectorAll(".note").forEach(li => li.remove());
        notes.forEach((note, id) => {
            let filterDesc = note.description.replaceAll("\n", '<br/>');
            let liTag = `<li class="note">
                        <div class="details">
                            <p>${note.title}</p>
                            <span>${filterDesc}</span>
                        </div>
                        <div class="bottom-content">
                            <span>${note.date}</span>
                            <div class="settings">
                                <i onclick="showMenu(this)" class="uil uil-ellipsis-h"></i>
                                <ul class="menu">
                                    <li onclick="updateNote(${id}, '${note.title}', '${filterDesc}')"><i class="uil uil-pen"></i>Edit</li>
                                    <li onclick="deleteNote(${id})"><i class="uil uil-trash"></i>Delete</li>
                                </ul>
                            </div>
                        </div>
                    </li>`;
            addBox.insertAdjacentHTML("afterend", liTag);
        });
    }
    showNotes();

    function showMenu(elem) {
        elem.parentElement.classList.add("show");
        document.addEventListener("click", e => {
            if (e.target.tagName != "I" || e.target != elem) {
                elem.parentElement.classList.remove("show");
            }
        });
    }

    function deleteNote(noteId) {
        let confirmDel = confirm("Estas seguro que quieres eliminar esta nota?");
        if (!confirmDel) return;
        notes.splice(noteId, 1);
        localStorage.setItem("notes", JSON.stringify(notes));
        showNotes();
    }

    function updateNote(noteId, title, filterDesc) {
        let description = filterDesc.replaceAll('<br/>', '\r\n');
        updateId = noteId;
        isUpdate = true;
        addBox.click();
        titleTag.value = title;
        descTag.value = description;
        popupTitle.innerText = "Update a Note";
        addBtn.innerText = "Update Note";
    }

    addBtn.addEventListener("click", e => {
        e.preventDefault();
        let title = titleTag.value.trim(),
            description = descTag.value.trim();

        if (title || description) {
            let currentDate = new Date(),
                month = months[currentDate.getMonth()],
                day = currentDate.getDate(),
                year = currentDate.getFullYear();

            let noteInfo = { title, description, date: `${month} ${day}, ${year}` }
            if (!isUpdate) {
                notes.push(noteInfo);
            } else {
                isUpdate = false;
                notes[updateId] = noteInfo;
            }
            localStorage.setItem("notes", JSON.stringify(notes));
            showNotes();
            closeIcon.click();
        }
    });

    const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


    nextBtn.addEventListener("click", () => {
        allInput.forEach(input => {
            if (input.value != "") {
                form.classList.add('secActive');
            } else {
                form.classList.remove('secActive');
            }
        })
    })

    backBtn.addEventListener("click", () => form.classList.remove('secActive'));

</script>

</html>