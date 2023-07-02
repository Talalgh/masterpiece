@extends('home.layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>BMI calculator</h2>
                        <div class="bt-option">
                            <a href="{{route('index')}}">Home</a>
                            <a href="#">Pages</a>
                            <span>BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <div class="chart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Bmi</th>
                                        <th>Ruselt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="point">Normal</td>
                                        <td>18.5 - 24.9</td>
                                    </tr>
                                    <tr>
                                        <td class="point">Overweight</td>
                                        <td>25 - 29.9</td>
                                    </tr>
                                    <tr>
                                        <td class="point">Obese</td>
                                        <td>30 - 39.9</td>
                                    </tr>
                                    <tr>
                                        <td class="point">Morbidly Obese</td>
                                        <td>40 - and more</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="section-title chart-title">
                            <span>check your BMI :</span>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>Ruselt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Your BMI</td>
                                    <td><div id="resultContainer" style="color: rgb(243,97,0);font-size: 24px;font-family: sans-serif"></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <form action="#" id="bmiCalculatorForm">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Height / cm" id="heightInput">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Weight / kg" id="weightInput">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Age" id="ageInput">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Sex" id="sexInput">
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" onclick="calculateBMI()">Calculate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <script>
                    function calculateBMI() {
    var height = document.getElementById('heightInput').value;
    var weight = document.getElementById('weightInput').value;
    var bmi = weight / Math.pow(height / 100, 2); // Convert height from cm to meters

    var resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML =  bmi.toFixed(2);
}

                </script>

        </div>
    </section>
    <!-- BMI Calculator Section End -->

@endsection
