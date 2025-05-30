@extends('layouts.app')
@section('content')

<section class="homeloan section">
    <h1 class="homeloan_title d-flex justify-content-center mb-4">Home Loan</h1>
    <div class="container">
        <div class="image"></div>
    </div>
</section>

<div class="homeloan-content homeloan-progress mb-5">
    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-8 col-md-6 col-12">
                <!--  -->
                <div class="range1 mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>Loan Amount</h5>
                        <div class="input-amount-wrapper">
                            <input type="text" class="input-amount" placeholder="2000000" id="loanAmount">
                            <span class="rupee-icon">₹</span>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div id="employees"></div>
                    </div>
                </div>
                <div class="range2 mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>Rate of Interest</h5>
                        <div class="input-amount-wrapper">
                            <input type="text" class="input-amount" placeholder="9" id="interestRate">
                            <span class="rupee-icon">%</span>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div id="employees2"></div>
                    </div>
                </div>
                <div class="range3 mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>Tenure</h5>
                        <div class="input-amount-wrapper">
                            <input type="text" class="input-amount" placeholder="2" id="loanTenure">
                            <span class="rupee-icon">Yr</span>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div id="employees3"></div>
                    </div>
                </div>

                <div class="table-data">
                    <h2 class="text-dark py-4"><b>EMI Schedule</b></h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Year</th>
                                    <th scope="col">Opening Balance</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Princiapl</th>
                                    <th scope="col">Closing Balance</th>
                                </tr>
                            </thead>
                            <tbody id="loan-table-body">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <img src="{{url('public/assets/img/calculator.png')}}" alt="">
                        <span>Your EMI ₹ 9,13,695 9 % interest per anum</span>
                        <button class="btn">Apply Now</button>
                    </div>
                    <div class="card-footer pt-3">
                        <div class="row">
                            <div class="col-2">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <div class="col-4">
                                <h6>₹ 19,38,533</h6>
                                <p>Total Interest</p>
                            </div>
                            <div class="col-2">
                                <i class="bi bi-percent"></i>
                            </div>
                            <div class="col-4">
                                <h6>₹ 2,19,28,676</h6>
                                <p>Principal+ Interest</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="myfirstdonut"> </div>
                <div class="chart-content">
                    <span class="dark-blue"></span>&nbsp; Loan Amount - ₹ 2,00,00,000
                </div>
                <div class="chart-content">
                    <span class="light-blue"></span>&nbsp; Loan Amount - ₹ 2,00,00,000
                </div>
            </div>
        </div>

    </div>
</div>
<!--  -->

@endsection
@section('customJS')
<script>
$(document).ready(function() {
            var loanAmountSlider = $('#employees')[0];
            var interestRateSlider = $('#employees2')[0];
            var tenureSlider = $('#employees3')[0];

            var loanAmountInput = $('#loanAmount');
            var interestRateInput = $('#interestRate');
            var tenureInput = $('#loanTenure');

            var loanTableBody = $('#loan-table-body');

            var labels1 = {
                0: '1L',
                10: '1.25Cr',
                20: '2.50Cr',
                30: '3.75Cr',
                40: '5.00Cr',
                50: '6.25Cr',
                60: '7.50Cr',
                70: '8.75Cr',
                80: '10Cr'
            };

            var values1 = {
                0: 100000,
                10: 12500000,
                20: 25000000,
                30: 37500000,
                40: 50000000,
                50: 62500000,
                60: 75000000,
                70: 87500000,
                80: 100000000
            };

            var labels2 = {
                6: '6%',
                9: '9%',
                12: '12%',
                15: '15%'
            };

            var labels3 = {
                0: '0Yr',
                10: '5Yr',
                20: '10Yr',
                30: '15Yr',
                40: '20Yr',
                50: '25Yr',
                60: '30Yr'
            };

            noUiSlider.create(loanAmountSlider, {
                start: 0,
                connect: [true, false],
                tooltips: {
                    to: function(value) {
                        return labels1[Math.round(value / 10)] || '';
                    }
                },
                range: {
                    'min': 0,
                    'max': 80
                },
                pips: {
                    mode: 'values',
                    values: [0, 10, 20, 30, 40, 50, 60, 70, 80],
                    format: {
                        to: function(value) {
                            return labels1[value];
                        }
                    }
                }
            });

            noUiSlider.create(interestRateSlider, {
                start: 6,
                connect: [true, false],
                tooltips: {
                    to: function(value) {
                        return labels2[Math.round(value)] || '';
                    }
                },
                range: {
                    'min': 6,
                    'max': 15
                },
                pips: {
                    mode: 'values',
                    values: [6, 9, 12, 15],
                    format: {
                        to: function(value) {
                            return labels2[value];
                        }
                    }
                }
            });

            noUiSlider.create(tenureSlider, {
                start: 0,
                connect: [true, false],
                tooltips: {
                    to: function(value) {
                        return labels3[Math.round(value / 10)] || '';
                    }
                },
                range: {
                    'min': 0,
                    'max': 60
                },
                pips: {
                    mode: 'values',
                    values: [0, 10, 20, 30, 40, 50, 60],
                    format: {
                        to: function(value) {
                            return labels3[value];
                        }
                    }
                }
            });

            function getIntermediateValue(value, labels) {
                var keys = Object.keys(labels).map(Number);
                for (var i = 0; i < keys.length - 1; i++) {
                    if (value >= keys[i] && value <= keys[i + 1]) {
                        var range = keys[i + 1] - keys[i];
                        var relativeValue = (value - keys[i]) / range;
                        return labels[keys[i]] + (labels[keys[i + 1]] - labels[keys[i]]) * relativeValue;
                    }
                }
                return labels[keys[keys.length - 1]];
            }

            // Event listener for loan amount input
            loanAmountInput.on('input', function() {
                var value = parseFloat($(this).val().replace(/[^\d.]/g, '')); 
                if (!isNaN(value)) {
                    var sliderValue = value / 1250000 * 10; 
                    loanAmountSlider.noUiSlider.set(sliderValue);
                }
            });

            // Event listener for interest rate input
            interestRateInput.on('input', function() {
                var value = parseFloat($(this).val().replace(/[^\d.]/g, '')); 
                if (!isNaN(value)) {
                    interestRateSlider.noUiSlider.set(value);
                }
            });

            // Event listener for tenure input
            tenureInput.on('input', function() {
                var value = parseFloat($(this).val().replace(/[^\d.]/g, '')); 
                if (!isNaN(value)) {
                    tenureSlider.noUiSlider.set(value * 2); 
                }
            });

            loanAmountSlider.noUiSlider.on('update', function(values, handle) {
                var sliderValue = values[handle];
                var amount = sliderValue * 1250000; 
                loanAmountInput.val(amount.toFixed(0));
                calculateLoan();
            });

            interestRateSlider.noUiSlider.on('update', function(values, handle) {
                interestRateInput.val(values[handle]); 
                calculateLoan();
            });

            tenureSlider.noUiSlider.on('update', function(values, handle) {
                tenureInput.val(values[handle] / 2); 
                calculateLoan();
            });

            function calculateLoan() {
                var loanAmount = parseFloat(loanAmountInput.val()); 
                var interestRate = parseFloat(interestRateInput.val());
                var tenure = parseInt(tenureInput.val() * 12);

                var monthlyInterestRate = interestRate / 1200;

                var monthlyPayment = loanAmount * monthlyInterestRate / (1 - Math.pow(1 + monthlyInterestRate, -tenure));

                var tableContent = '';
                var balance = loanAmount;
                var interest, principal;

                for (var month = 1; month <= tenure; month++) {
                    interest = balance * monthlyInterestRate;
                    principal = monthlyPayment - interest;
                    balance -= principal;

                    tableContent += '<tr>' +
                        '<td>' + month + '</td>' +
                        '<td>' + balance.toFixed(2) + '</td>' +
                        '<td>' + interest.toFixed(2) + '</td>' +
                        '<td>' + principal.toFixed(2) + '</td>' +
                        '<td>' + monthlyPayment.toFixed(2) + '</td>' +
                        '</tr>';
                }

                loanTableBody.html(tableContent);
            }

            // Initial calculation
            calculateLoan();
        });
</script>
<script>
Morris.Donut({
    element: 'myfirstdonut',
    data: [{
            label: "Total Interest",
            value: 1928676
        },
        {
            label: "Loan Amount",
            value: 20000000
        }
    ]
});
</script>

@endsection