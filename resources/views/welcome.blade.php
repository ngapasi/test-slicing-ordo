<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('/images/logo.ico') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test ORDO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="css/style.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>

<body>
    <nav class="
        d-md-none d-lg-none d-xl-none
        navbar navbar-mobile navbar-light
        sticky-top
        flex-md-nowrap
        p-0
      ">
        <div class="container-fluid pb-3">
            <div class="position-relative w-100">
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">
                    <img src="{{ asset('/images/logo.svg') }}" alt="Gas Kita" class="img-fluid logo" />
                    <p class="welcome">Halo, Selamat datang <span>Admin</span></p>
                </a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                    data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Vendor LPG</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Daftar Vendor LPG
                </li>
            </ol>
            <ul class="list-inline px-3 mb-0">
                <li class="list-inline-item text-nowrap">
                    <a class="nav-link p-0" href="#">
                        <span class="notif"></span>
                    </a>
                </li>
                <li class="list-inline-item text-nowrap">
                    <a class="nav-link p-0" href="#"><img src="{{ asset('/images/bruce-mars') }}.svg" alt="User"
                            class="img-fluid user" /></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-20 d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <a class="nav-link d-none d-sm-none d-md-block d-lg-block" href="#">
                            <img src="{{ asset('/images/logo.svg') }}" alt="Gas Kita" class="
                    img-fluid
                    logo
                    d-none d-sm-none d-md-none d-lg-inline-block
                  " />
                            <p class="welcome">Halo, Selamat datang <span>Admin</span></p>
                        </a>
                        <div class="divider"></div>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon pelanggan"></span>
                                Pelanggan
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link active" href="#">
                                <span class="icon vendor"></span>
                                Vendor LPG
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon service"></span>
                                Vendor Service Kompor
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon financial"></span>
                                Finansial
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon bukti"></span>
                                Bukti Transfer
                            </a>
                        </li>
                        <div class="divider"></div>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon profile_setting"></span>
                                Profil
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span class="icon logout"></span>
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="menu-right col-md-9 ml-sm-auto col-lg-80 px-md-4">
                <div class="
              navbar
              d-none d-sm-none d-md-flex d-lg-flex
              sticky-top
              flex-md-nowrap
              p-0
              my-3
            ">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Vendor LPG</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Daftar Vendor LPG
                        </li>
                    </ol>
                    <ul class="list-inline px-3 mb-0">
                        <li class="list-inline-item text-nowrap">
                            <a class="nav-link" href="#">
                                <span class="notif"></span>
                            </a>
                        </li>
                        <li class="list-inline-item text-nowrap">
                            <a class="nav-link" href="#"><img src="{{ asset('/images/bruce-mars') }}.svg" alt="User"
                                    class="img-fluid user" /></a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h2 class="title-card">Daftar Vendor LPG</h2>
                    <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="waiting-tab" data-toggle="tab" href="#waiting" role="tab"
                                aria-controls="waiting" aria-selected="true">Menunggu</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="reject-tab" data-toggle="tab" href="#reject" role="tab"
                                aria-controls="reject" aria-selected="false">Ditolak</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="verif-tab" data-toggle="tab" href="#verif" role="tab"
                                aria-controls="verif" aria-selected="false">Terverifikasi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="waiting" role="tabpanel" aria-labelledby="waiting-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Toko</th>
                                            <th scope="col" class="text-center">No.HP</th>
                                            <th scope="col" class="text-center">
                                                Tanggal Bergabung
                                            </th>
                                            <th scope="col" class="text-center">Saldo(Rp)</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Michael John
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user2.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Alexa Liras
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/12/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user3.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Laure Perrier
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">13/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user4.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Miriam Eric
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">03/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Richard Gran
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/03/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reject" role="tabpanel" aria-labelledby="reject-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Toko</th>
                                            <th scope="col" class="text-center">No.HP</th>
                                            <th scope="col" class="text-center">
                                                Tanggal Bergabung
                                            </th>
                                            <th scope="col" class="text-center">Saldo(Rp)</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Michael John
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user2.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Alexa Liras
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/12/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user3.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Laure Perrier
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">13/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user4.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Miriam Eric
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">03/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Richard Gran
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/03/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="verif" role="tabpanel" aria-labelledby="verif-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Toko</th>
                                            <th scope="col" class="text-center">No.HP</th>
                                            <th scope="col" class="text-center">
                                                Tanggal Bergabung
                                            </th>
                                            <th scope="col" class="text-center">Saldo(Rp)</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Michael John
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user2.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Alexa Liras
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/12/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user3.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Laure Perrier
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">13/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user4.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Miriam Eric
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">03/04/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/images/user1.jpg') }}" alt="Nama Toko"
                                                    class="img-fluid nama_toko" />
                                                Richard Gran
                                            </td>
                                            <td class="text-center">+62 822-9991-2313</td>
                                            <td class="text-center">23/03/2020</td>
                                            <td class="text-center">2.000.000</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="btn btn_aksi dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="0, 10">
                                                        Dropdown
                                                        <span class="arrow_down"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --profil_toko"></span>
                                                            Profil Toko</a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="icon --saldo"></span>
                                                            Saldo
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('script')
</body>

</html>
