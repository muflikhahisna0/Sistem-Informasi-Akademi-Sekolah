@extends('layout')

@section('content')

<!-- content -->
<!-- total -->
<div class="row mb-4">
    <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/c1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/c2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/c3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col mr-4">
        <div class="top-card border-primary mb-3 text-primary" style="max-width: 540px;border-style: solid;  background-color: #e4eff9">
            <div class="row no-gutters">
                <div class="col-md-4 align-self-center border-right text-center">
                    <h2 class="fa fa-university fa-lg p-4" style="font-size: xx-large;"></h2>
                </div>
                <div class="col">
                    <div class="card-body" style="border-left-width: 10px;">
                        <p class="card-text font-weight-bold">Acreditation</p>
                        <h4 class="card-title font-weight-bold">A</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mr-4">
        <div class="top-card border-primary mb-3 text-primary" style="max-width: 540px;border-style: solid;  background-color: #e4eff9">
            <div class="row no-gutters">
                <div class="col-md-4 align-self-center border-right text-center">
                    <h2 class="fa fa-slideshare fa-lg p-4 " style="font-size: xx-large;"></h2>
                </div>
                <div class="col">
                    <div class="card-body" style="border-left-width: 10px;">
                        <p class="card-text font-weight-bold">Total Students</p>
                        <h4 class="card-title font-weight-bold">7</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mr-4">
        <div class="top-card border-primary mb-3 text-primary" style="max-width: 540px;border-style: solid;  background-color: #e4eff9" : #e4eff9">
            <div class="row no-gutters">
                <div class="col-md-4 align-self-center border-right text-center">
                    <h2 class="fa fa-users fa-lg p-4 " style="font-size: xx-large;"></h2>
                </div>
                <div class="col">
                    <div class="card-body" style="border-left-width: 10px;">
                        <p class="card-text font-weight-bold">Total Teachers</p>
                        <h4 class="card-title font-weight-bold">8</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mr-4">
        <div class="top-card border-primary mb-3 text-primary" style="max-width: 540px;border-style: solid;  background-color: #e4eff9">
            <div class="row no-gutters">
                <div class="col-md-4 align-self-center border-right text-center">
                    <h2 class="fa fa-user fa-lg p-4" style="font-size: xx-large;"></h2>
                </div>
                <div class="col">
                    <div class="card-body" style="border-left-width: 10px;">
                        <p class="card-text font-weight-bold">Total Staffs</p>
                        <h4 class="card-title font-weight-bold">4</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4 justify-content-between">
    <!-- students rate -->
    <div class="col-8">
        <div class="card p-3">
            <h5 class="font-weight-bold  mb-4">Top Students Scorer</h5>
            <div class="row">
                <div class="col">
                    <div class="card purple text-white border-0" style="width: 13rem;">
                        <img class="card-img-top align-self-center mt-4" src="/img/a.png" style="width: 70px;" alt="Card image cap">
                        <div class="card-body text-center">
                            <b>Clevi Aprilia</b>
                            <p class="card-text">01.01.01</p>
                            <b></b>
                            <h5 class="card-title">100</h5>
                            <button class="btn text-white" style="width: -webkit-fill-available; background-color: #ffffff61; "><b>1<sup>st</sup></b></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card soundcloud text-white border-0" style="width: 13rem;">
                        <img class="card-img-top align-self-center mt-4" src="/img/b.png" style="width: 70px;" alt="Card image cap">
                        <div class="card-body text-center">
                            <b>Angela Campina</b>
                            <p class="card-text">02.02.02</p>
                            <b></b>
                            <h5 class="card-title">99</h5>
                            <button class="btn text-white" style="width: -webkit-fill-available; background-color: #ffffff61;"><b>2<sup>nd</sup></b></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card youtube text-white border-0" style="width: 13rem;">
                        <img class="card-img-top align-self-center mt-4" src="/img/c.png" style="width: 70px;" alt="Card image cap">
                        <div class="card-body text-center">
                            <b>Faela Kusuma</b>
                            <p class="card-text">03.03.03</p>
                            <b></b>
                            <h5 class="card-title">98</h5>
                            <button class="btn text-white" style="width: -webkit-fill-available; background-color: #ffffff61;"><b>3<sup>rd</sup></b></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card ">
            <img src="/img/nora.png" class="p-4  card-img-top" alt="...">
            <div class="card-body bg-blue text-center text-white rounded-lg mt-1">
                <h3>
                    Homeroom Teacher
                </h3>
            </div>
        </div>

    </div>
</div>
@endsection