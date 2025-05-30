@extends('layouts.app')
@section('content')

<section class="contact-us section">
    <h1 class="contact_title d-flex justify-content-center mb-4">Contact Us</h1>
    <div class="container">
        <div class="image"></div>
    </div>
</section>

<div class="contact-part">
    <div class="container">
        <div class="row bg-FAFAFA ">
            <div class="col-xl-5 col-md-6 col-12 bg-ECF1F2 d-flex justify-content-center align-items-center">
                <img src="{{url('public/assets/img/contact.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-7 col-md-6 col-12 p-0">
                <form action="javascript:void(0)" class="php-email-form" id="contactForm" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <label for="service" class="form-label">Product/Service Looking for</label>
                            <input type="text" name="service" id="service" class="form-control bg-F1F5F6"
                                placeholder="Product/Service Looking for">
                        </div>

                        <div class="col-md-6">
                            <label for="service" class="form-label">Your Name</label>
                            <input type="text" class="form-control bg-F1F5F6" name="name" id="name"
                                placeholder="Your Name">

                        </div>

                        <div class="col-md-6">
                            <label for="service" class="form-label">Email</label>
                            <input type="email" class="form-control bg-F1F5F6" name="email" id="email"
                                placeholder="Email">

                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">Select Country</label>
                            <select name="country" class="form-select" id="country">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label">Select State</label>
                            <select name="state" class="form-select" id="state">
                                <option value="">Select State</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">Select City</label>
                            <select name="city" class="form-select" id="city">
                                <option value="">Select City</option>
                            </select>

                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <label for="" class="form-label">Phone Number</label>
                                <div class="col-2 pe-0">
                                    <input type="text" class="form-control bg-F1F5F6 code" placeholder="+91" name=""
                                        id="subject-field" readonly>
                                </div>
                                <div class="col-10">
                                    <!-- <label for="" class="form-label"></label> -->
                                    <input type="text" class="form-control bg-F1F5F6" name="phone" id="phone"
                                        placeholder="Phone / Mobile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="">Enquiry Details</label>
                            <textarea class="form-control contact" name="message" placeholder="Leave A Message For Us"
                                rows="5" id="message"></textarea>
                        </div>

                        <div class="col-md-12">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> -->

                            <button type="submit">Submit</button>
                            <button type="submit">Cancel</button>
                        </div>

                    </div>
                </form>
            </div>
            <div id="loader-wrapper" style="display: none;">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customJS')
<script>
$(document).ready(function() {
    $('#country').change(function() {
        var country_id = $(this).val();
        $("#state").find("option").not(":first").remove();
        $("#city").find("option").not(":first").remove();
        if (country_id) {
            $.ajax({
                url: '{{ route("getStates") }}',
                type: 'GET',
                data: {
                    country_id: country_id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        $.each(response.states, function(key, item) {
                            $("#state").append(
                                `<option value='${item.id}'>${item.name}</option>`
                            );
                        });
                    }
                },
                error: function(jqXHR, exception) {
                    console.log("Something went wrong");
                }
            });
        }
    });

    $('#state').change(function() {
        var state_id = $(this).val();
        $("#city").find("option").not(":first").remove();
        if (state_id) {
            $.ajax({
                url: '{{ route("getCities") }}',
                type: 'GET',
                data: {
                    state_id: state_id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        $.each(response.cities, function(key, item) {
                            $("#city").append(
                                `<option value='${item.id}'>${item.name}</option>`
                            );
                        });
                    }
                },
                error: function(jqXHR, exception) {
                    console.log("Something went wrong");
                }
            });
        }
    });
});

$(document).ready(function() {
    $("#contactForm").validate({
        rules: {
            service: {
                required: true
            },
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            phone: {
                required: true,
                number: true,
                maxlength: 10,
                minlength: 10
            }
        },
        messages: {
            service: {
                required: "Please enter service"
            },
            name: {
                required: "Please provide your name"
            },
            email: {
                required: "Please provide your email",
                email: "Please enter a valid email address"
            },
            country: {
                required: "Please first select country"
            },
            state: {
                required: "Please select state"
            },
            city: {
                required: "Please select city"
            },
            phone: {
                required: "Please provide mobile number",
                number: "Please enter valid phone number",
                maxlength: "Maximum digit should be 10",
                minlength: "Minimum digit should be 10",
            }
        },
        errorElement: "p",
        errorPlacement: function(error, element) {
            if (element.prop("tagName").toLowerCase() === "select") {
                error.insertAfter(element);
            } else {
                error.insertAfter(element);
            }
            error.addClass('text-danger');
        },
        submitHandler: function(form) {
            $(".submitButton").prop("disabled", true);
            $("#loader-wrapper").show();
            var formData = new FormData(form);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route("contact.sendMail") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#loader-wrapper").hide(); // Hide loader
                    $(".submitButton").prop("disabled", false);
                    if (response.status) {
                        toastr.success(response.message, 'Success', {
                            timeOut: 1000
                        });
                    } else {
                        toastr.error(response.message, 'Error', {
                            timeOut: 500
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#loader-wrapper").hide(); // Hide loader
                    $(".submitButton").prop("disabled", false);
                    toastr.error('An error occurred. Please try again later.',
                    'Error', {
                        timeOut: 500
                    });
                    console.error(xhr.responseText);
                }
            });
        }
    })
})
</script>

@endsection