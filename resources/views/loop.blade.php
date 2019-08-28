@extends('layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div id="app">
        <div class="fon" v-if="showData" @click.self="deleteShowData()" >
            <div class="window main-section">
                <div class="item">
                    <div class="close">
                        <img src="/img/cross.svg" alt="" v-on:click="deleteShowData()">
                    </div>
                    <div class="confirm">Confirmation</div>
                    <div class="img-section">
                        <img alt="" :src="'/img/' + showData.img">
                    </div>
                    <div class="name-section">
                        <h2>@{{ showData.title }}</h2>
                    </div>
                    <div class="info-section">
                        <p>@{{ showData.info }}</p>
                    </div>
                    <div class="price-section">
                        <div class="currency">$</div>
                        <div class="price">
                            <span>@{{ showData.price }}</span>/month
                        </div>
                    </div>
                    <button>Confirm and pay</button>
                </div>
            </div>
        </div>

        <div class="main-section">
            <div class="item" v-for="(item, index) in data">
                <div class="field" v-on:click="getData(index)">
                    <div class="img-section">
                        <img alt="" :src="'/img/' + item.img">
                    </div>
                    <div class="name-section">
                        <h2>@{{ item.title }}</h2>
                    </div>
                    <div class="info-section">
                        <p>@{{ item.info }}</p>
                    </div>
                    <div class="price-section">
                        <div class="currency">$</div>
                        <div class="price">
                            <span>@{{ item.price }}</span>/month
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        var data = JSON.parse('{!!$data!!}');
        App = new Vue({
            el: '#app',
            data: {
                data: data,
                showData: '',
            },
            methods: {
                getData: function (id) {
                    axios.post('/getData/' + id)
                        .then(function (response) {
                            App.showData = response.data;
                        });
                },
                deleteShowData: function () {
                    App.showData = '';
                }
            }
        });
    </script>
@endsection
