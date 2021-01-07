<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <div id="sidebar" class="col-2 bg-blue text-white p-0 p-0">
                <h1 class="p-4">CEKULA</h1>
                <div id="menu" class="d-flex flex-column font-weight-bold bd-highlight mb-3 p-0 p-0">
                    <div class="nav-item p-2">
                        <a href="/" class="text-white">
                            <div class="p-2 bd-highlight">
                                <i class="fa fa-tachometer pr-3" aria-hidden="true"></i>
                                Dashboard</div>
                        </a>
                    </div>
                    <div class="nav-item p-2">
                        <a href="/teacher" class="text-white">
                            <div class="p-2 bd-highlight">
                                <i class="fa fa-users pr-3" aria-hidden="true"></i>
                                Teachers</div>
                        </a>
                    </div>
                    <div class="nav-item p-2">
                        <a href="/student" class="text-white">
                            <div class="p-2 bd-highlight"><i class="fa fa-slideshare pr-3" aria-hidden="true"></i>
                                Students</div>
                        </a>
                    </div>
                    <div class="nav-item p-2">
                        <a href="/exams" class="text-white">
                            <div class="p-2 bd-highlight">
                                <i class="fa fa-paperclip pr-3" aria-hidden="true"></i>
                                Exams
                            </div>
                        </a>
                    </div>
                    <div class="nav-item p-2">
                        <a href="/Staff" class="text-white">
                            <div class="p-2 bd-highlight">
                                <i class="fa fa-user pr-3" aria-hidden="true"></i>
                                Staff</div>
                        </a>
                    </div>
                    <div class="nav-item p-2">
                        <a href="/library" class="text-white">
                            <div class="p-2 bd-highlight">
                                <i class="fa fa-book pr-3" aria-hidden="true"></i>
                                Library</div>
                        </a>
                    </div>
                </div>


            </div>

            <!-- content -->
            <div id="content" class="col-10">
                <!-- top-bar -->
                <div class="row bg-white p-4 mb-4">
                    <div class="col-8">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-blue text-white my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-4">
                        <span class="d-flex justify-content-between">
                            <span class="d-flex  pl-4">
                                <div style="border-left:1px solid #f6f7f8;height:40px" class="mr-3 ml-3"></div>
                                <button class="btn  bg-blue text-white my-2 my-sm-0 rounded-circle" style="width: 40px; height: 40px;" type="submit"><i class="fa fa-envelope"></i></button>
                                <div style="border-left:1px solid #f6f7f8;height:40px" class="mr-3 ml-3"></div>
                                <button class="btn  bg-blue text-white my-2 my-sm-0 rounded-circle" style="width: 40px; height: 40px;" type="submit"><i class="fa fa-bell-o"></i></button>
                            </span>
                            <span>
                                <div class="p-2 bg-white rounded-circle shadow-sm border border-primary">
                                    <img src="/img/np.png" alt="" style="width: 30px; height: 30px;">
                                </div>
                            </span>
                        </span>
                    </div>
                </div>
                @yield('content')
                <div id="footer" class="justify-content-center text-center p-4 text-primary ">

                    <div class="row justify-content-center text-primary container-fluid">
                        <div class="rounded-lg m-2 soundcloud p-2 fit-content" style="width: 40px; height: 40px;">
                            <b class="fa text-white fa-facebook"></b>
                        </div>
                        <div class="rounded-lg m-2 soundcloud p-2 fit-content" style="width: 40px; height: 40px;">
                            <b class="fa text-white fa-twitter"></b>
                        </div>
                        <div class="rounded-lg m-2 soundcloud p-2 fit-content" style="width: 40px; height: 40px;">
                            <b class="fa text-white fa-linkedin"></b>
                        </div>
                        <div class="rounded-lg m-2 soundcloud p-2 fit-content" style="width: 40px; height: 40px;">
                            <b class="fa text-white fa-github"></b>
                        </div>
                    </div>
                    <p class="pt-2 text-primary">
                        © Copyright 2020 &nbsp; &nbsp;Muflikhah Isna &nbsp; &nbsp; Yogyakarta.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>