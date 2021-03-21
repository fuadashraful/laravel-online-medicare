@extends('base')



@push('css')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush

@section('content')
<section class="hero-unit">

<div class="row">
    <div class="large-12 columns">
    <!-- <hgroup>
        <h1>Code. Design. Education.</h1>
        <h3>Just keep learning. Make new opportunities.</h3>
    </hgroup> -->


    <ul class="small-block-grid-2 medium-block-grid-3 flip-cards">

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">Book Doctor</a>
            <i class="fa fa-user-md card-icon "></i>
        </div>
        <div class="panel card-back">
            <i class="fa fa-code card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Find coding gists, cheatsheets, plugins, themes, resources, and tutorials.</p>
            </div>
            <small class="clear">Updated TTH.</small>
        </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">Book Test</a>
            <i class="fa fa-syringe card-icon"></i>
        </div>

        <div class="panel card-back">
            <i class="fa fa-pencil-square-o card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Take a look at my graphic design portfolio and contact me for design work.</p>
            </div>
            <small class="clear">Updated Saturdays.</small>
        </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">Visit Hospital</a>
            <i class="fa fa-hospital-user card-icon"></i>
        </div>

        <div class="panel card-back">
            <i class="fa fa-paper-plane-o card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Join classes about Computers, Technology, Coding, Design, and Language Learning.</p>
            </div>
            <small class="clear">Updated Mondays.</small>
        </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">Buy Medicine</a>
            <i class="fa fa-capsules card-icon"></i>
        </div>

        <div class="panel card-back">
            <i class="fa fa-map-o card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Find resources about business, family, exercise, and other various topics.</p>
            </div>
            <small class="clear">Updated monthly.</small>
        </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">Hire Ambulance</a>
            <i class="fa fa-ambulance card-icon"></i>
        </div>

        <div class="panel card-back">
            <i class="fa fa-language card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Take your Korean from "foreign" to fluent with vocab lists and grammar guides.</p>
            </div>
            <small class="clear">Updated MWF.</small>
        </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
            <a href="">About Us</a>
            <i class="fa fa-address-card card-icon"></i>
        </div>

        <div class="panel card-back">
            <i class="fa fa-users card-icon"></i>
            <div class="hub-info">
            <a href="">mehmetmedicare.com</a>
            <p>Listen to sermon podcasts or download church graphic design resources.</p>
            </div>
            <small class="clear">Updated the 4th Sunday.</small>
        </div>
        </li>

    </ul>
    </div>

    <div class="large-12 columns">
    <div class="small-12 small-centered medium-6 medium-centered large-3 large-centered columns clients">
        <a href="#">
        <h6 class="text-center">Clients Click Here</h6>
        <p class="text-center">
            <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-angle-right fa-inverse fa-stack-1x"></i>
                    </span>
        </p>
        </a>
    </div>
    <!-- end .clients -->
    </div>

</div>
</section>  
@endsection