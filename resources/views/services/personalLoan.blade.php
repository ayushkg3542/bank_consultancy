@extends('layouts.app')
@section('content')

<section class="personalLoan section">
    <h1 class="personalLoan_title d-flex justify-content-center mb-4">Personal Loan Consultancy Service</h1>
    <div class="container">
        <div class="image"></div>
    </div>
</section>


<div class="personalLoan-content">
    <div class="container">
        <p class="h2 my-4">Personal Loan Consultancy Service</p>
        <p class="text">Our Personal Loan Consultancy Service is your trusted financial ally, guiding you through the
            journey of securing personal loans tailored to your unique needs. Our expert team simplifies the application
            process, assesses your financial situation, and connects you with the most suitable lenders. With a deep
            understanding of the lending market, we ensure you get the best interest rates and terms available. Count on
            us for personalized advice, a seamless application process, and quick loan approvals, making your financial
            aspirations a reality. Choose our consultancy service for reliable and efficient personal loan solutions.
        </p>
        <div class="query-button d-flex justify-content-center my-5">
            <a href="" class="btn btn-outline-primary"><i class="bi bi-telephone-fill"></i> &nbsp;&nbsp; Request to
                Call</a>
            <a href="" class="btn btn-primary ms-3"><i class="bi bi-envelope-fill"></i> &nbsp;&nbsp; Send Enquiry</a>
        </div>
    </div>
</div>

<div class="personalLoan-progress mb-5">
    <div class="container">
        <div class="row">
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
                        <h5>Loan Amount</h5>
                        <div class="input-amount-wrapper">
                            <input type="text" class="input-amount" placeholder="9" id="">
                            <span class="rupee-icon">%</span>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div id="employees2"></div>
                    </div>
                </div>
                <div class="range3">
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


<div class="enquiry-form py-5">
    <div class="container">
        <h2 class="title text-dark text-center">Looking for "Personal Loan Consultancy Service" ?</h2>
        <form action="" class="pt-4">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-3 text-end">
                            <label for="Name" class="text-dark">Name</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="col-xl-1">

                </div>
                <div class="col-xl-5 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-3 text-end">
                            <label for="Name" class="text-dark">Email</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-3 text-end">
                            <label for="Name" class="text-dark">Mobile No.</label>
                        </div>
                        <div class="col-9 input-container">
                            <input type="text" class="input-flag" name="" id="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-1">

                </div>
                <div class="col-xl-5 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-3 text-center">
                            <label for="Name" class="text-dark">Requirements Details</label>
                        </div>
                        <div class="col-9">
                            <textarea name="" class="form-control" id=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button text-center">
                <button class="btn send-query-button">Send Enquiry</button>
            </div>
        </form>
    </div>

</div>



@endsection
@section('customJS')
<script>
$(document).ready(function() {
    var employees = $('#employees')[0];
    var labels = {
        0: '0L',
        10: '1Cr',
        20: '2Cr',
        30: '3Cr',
        40: '4Cr',
        50: '5Cr',
        60: '6Cr',
        70: '7Cr',
        80: '8Cr',
        90: '9Cr',
        100: '10Cr',
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
            '10%': 10,
            '20%': 20,
            '30%': 30,
            '40%': 40,
            '50%': 50,
            '60%': 60,
            '70%': 70,
            '80%': 80,
            '90%': 90,
            'max': 100
        },
        pips: {
            mode: 'values',
            values: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
            format: {
                to: function(value) {
                    return labels[value];
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
        15: '5Yr',
        30: '10Yr',
        45: '15Yr',
        60: '20Yr',
        75: '25Yr',
        90: '30Yr',
        100: '35Yr'
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
            '15%': 15,
            '30%': 30,
            '45%': 45,
            '60%': 60,
            '75%': 75,
            '90%': 90,
            'max': 100
        },
        pips: {
            mode: 'values',
            values: [0, 15, 30, 45, 60, 75, 90, 100],
            format: {
                to: function(value) {
                    return labels[value];
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