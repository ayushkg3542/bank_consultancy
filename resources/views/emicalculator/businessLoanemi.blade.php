@extends('layouts.app')
@section('content')

<section class="businessLoan section">
    <h1 class="businessLoan_title d-flex justify-content-center mb-4">Business Loan Consultancy Service</h1>
    <div class="container">
        <div class="image"></div>
    </div>
</section>


<div class="businessLoan-content businessLoan-progress mb-5">
    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-8 col-md-6 col-12">
                <div class="range1 mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>Loan Amount</h5>
                        <div class="input-amount-wrapper">
                            <input type="text" class="input-amount" placeholder="2000000" id="">
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
                            <input type="text" class="input-amount" placeholder="9" id="">
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
                            <input type="text" class="input-amount" placeholder="2" id="">
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
                        <table class="table table-striped ">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Year</th>
                                    <th scope="col">Opening Balance</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Princiapl</th>
                                    <th scope="col">Closing Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">2024</th>
                                    <td><i class="bi bi-currency-rupee"></i> 1,13,55,995</td>
                                    <td><i class="bi bi-currency-rupee"></i> 5,27,033</td>
                                    <td><i class="bi bi-currency-rupee"></i> 31,04,537</td>
                                    <td><i class="bi bi-currency-rupee"></i> 82,51459</td>
                                </tr>
                                <tr>
                                    <th scope="row">2025</th>
                                    <td><i class="bi bi-currency-rupee"></i> 1,13,55,995</td>
                                    <td><i class="bi bi-currency-rupee"></i> 5,27,033</td>
                                    <td><i class="bi bi-currency-rupee"></i> 31,04,537</td>
                                    <td><i class="bi bi-currency-rupee"></i> 82,51459</td>
                                </tr>
                                <tr>
                                    <th scope="row">2026</th>
                                    <td><i class="bi bi-currency-rupee"></i> 1,13,55,995</td>
                                    <td><i class="bi bi-currency-rupee"></i> 5,27,033</td>
                                    <td><i class="bi bi-currency-rupee"></i> 31,04,537</td>
                                    <td><i class="bi bi-currency-rupee"></i> 82,51459</td>
                                </tr>
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
    var employees = $('#employees')[0];
    var labels = {
        0: '1L',
        10: '1.25Cr',
        20: '2.50Cr',
        30: '3.75Cr',
        40: '5.00Cr',
        50: '6.25Cr',
        60: '7.50Cr',
        70: '8.75Cr',
        80: '10Cr',
    };

    noUiSlider.create(employees, {
        start: 0,
        connect: [true, false],
        tooltips: {
            to: function(value) {
                return labels[Math.round(value * 0.8)] || '';
            }
        },
        range: {
            'min': 0,
            'max': 100
        },
        pips: {
            mode: 'values',
            values: [0, 12.5, 25, 37.5, 50, 62.5, 75, 87.5, 100],
            format: {
                to: function(value) {
                    return labels[Math.round(value * 0.8)];
                }
            }
        }
    });
});


$(document).ready(function() {
    var employees = $('#employees2')[0];
    var labels = {
        0: '0%',
        25: '6%',
        50: '9%',
        75: '12%',
        100: '15%',
    };

    noUiSlider.create(employees, {
        start: 0,
        connect: [true, false],
        tooltips: {
            to: function(value) {
                return labels[Math.round(value)] || '';
            }
        },
        range: {
            'min': 0,
            '25%': 25,
            '50%': 50,
            '75%': 75,
            'max': 100
        },
        pips: {
            mode: 'values',
            values: [0, 25, 50, 75, 100],
            format: {
                to: function(value) {
                    return labels[value];
                }
            }
        }
    });
});


$(document).ready(function() {
    var employees = $('#employees3')[0];
    var labels = {
        0: '0Yr',
        10: '5Yr',
        20: '10Yr',
        30: '15Yr',
        40: '20Yr',
        50: '25Yr',
        60: '30Yr'
    };

    noUiSlider.create(employees, {
        start: 0,
        connect: [true, false],
        tooltips: {
            to: function(value) {
                return labels[Math.round(value * 0.6)] || '';
            }
        },
        range: {
            'min': 0,
            'max': 100
        },
        pips: {
            mode: 'values',
            values: [0, 16.67, 33.33, 50, 66.67, 83.33, 100],
            format: {
                to: function(value) {
                    return labels[Math.round(value * 0.6)];
                }
            }
        }
    });
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