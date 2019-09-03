@extends('layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div id="app" class="result-amount">
        <h2>Для получения результата введите целые положительные числа</h2>
        <input type="text" name="a" placeholder="a" v-model="a">
        <input type="text" name="b" placeholder="b" v-model="b">
        <button v-if="a && b" v-on:click="getResult()">Определить сумму</button>
        <p v-if="result" class="result">Результат сложения: @{{result}}</p>
        <p v-if="error" class="error">@{{error}}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        App = new Vue({
            el: '#app',
            data: {
                a: '',
                b: '',
                error: '',
                result: '',
            },
            methods: {
                /**
                 * Получение результата вычислений с серверной части приложения
                 */
                getResult: function () {
                    this.error = '';
                    this.result = '';

                    let formData = new FormData();
                    formData.append('a', this.a);
                    formData.append('b', this.b);

                    axios.post('/extra_task', formData)
                        .then(function (response) {
                            App.error = response.data.error;
                            App.result = response.data.result;
                        });
                }
            }
        });
    </script>
@endsection
