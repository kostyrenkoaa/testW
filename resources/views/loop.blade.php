@extends('layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="main-section">

        <div class="item">
            <div class="field">
                <div class="img-section">
                    <img src="/img/device.svg" alt="">
                </div>
                <div class="name-section">
                    <h2>
                        Mobile
                    </h2>
                </div>
                <div class="info-section">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, quasi.
                    </p>
                </div>
                <div class="price-section">
                    <div class="currency">$</div>
                    <div class="price">
                        <span>10</span>/month
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="field">
                <div class="img-section">
                    <img src="/img/laptop.svg" alt="">
                </div>
                <div class="name-section">
                    <h2>
                        desktop
                    </h2>
                </div>
                <div class="info-section">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eum excepturi, exercitationem facilis laboriosam libero!
                    </p>
                </div>
                <div class="price-section">
                    <div class="currency">$</div>
                    <div class="price">
                        <span>15</span>/month
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="field">
                <div class="img-section">
                    <img src="/img/monitor.svg" alt="">
                </div>
                <div class="name-section">
                    <h2>
                        tv
                    </h2>
                </div>
                <div class="info-section">
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="price-section">
                    <div class="currency">$</div>
                    <div class="price">
                        <span>20</span>/month
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
