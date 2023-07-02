@extends('home.layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>BMR calculator</h2>
                        <div class="bt-option">
                            <a href="{{route('index')}}">Home</a>
                            <a href="#">Pages</a>
                            <span>BMR calculator</span>
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
                        <h2>check your BMR :</h2>
                    </div>
                    <div class="chart-table">

                        <br>
                        <div class="section-title chart-title">
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>BMR</th>
                                    <th>Ruselt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Your BMR</td>
                                    <td><div id="resultContainer" style="color: rgb(243,97,0);font-size: 24px;font-family: sans-serif"></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMR</h2>
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
                                    <button type="button" id="calculateButton">Calculate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>



        </div>
    </section>
    <!-- BMI Calculator Section End -->
    <script>
        // Function to calculate BMR
        function calculateBMR() {
            // Get input values
            var height = parseFloat(document.getElementById('heightInput').value);
            var weight = parseFloat(document.getElementById('weightInput').value);
            var age = parseInt(document.getElementById('ageInput').value);
            var sex = document.getElementById('sexInput').value;

            // Perform BMR calculation based on sex
            var bmr;
            if (sex === 'male') {
                bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
            } else if (sex === 'female') {
                bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
            } else {
                // Handle invalid input
                alert('Please select a valid sex.');
                return;
            }

            // Display the result
            document.getElementById('resultContainer').textContent = bmr.toFixed(2);
        }

        // Add event listener to the Calculate button
        document.getElementById('calculateButton').addEventListener('click', calculateBMR);
    </script>


@endsection
