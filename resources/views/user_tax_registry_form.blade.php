@include('layout.header_script')
@include('layout.header')
<?php
$address = $data->mailing;

$addresses = explode('/', $address);

$address_one = isset($addresses[0]) ? trim($addresses[0]) : '';
$address_two = isset($addresses[1]) ? trim($addresses[1]) : '';
?>
<main class="content pt-3">
    <div class="js--global-header-target"></div>
    <div class="container-fluid px-3 px-sm-1x px-lg-2x px-xl-1x">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div>
                            <div class="col-12" style="background-color:#f5f5f5; padding:30px">
                                <p target="_blank">
                                <h1 class="h1 mr-3" style="color:#002b56">Your Tax Lien Status</h1>
                                </p>
                                <div
                                    class="journal-slide-item__title main-title--decorated d-flex align-items-md-center pt-2">
                                    <p target="_blank">
                                    <h5 class="h5 mr-3" style="color:#f09103">Please make sure the information below is
                                        correct.</h5>
                                    </p>
                                </div>
                                <form action="{{ route('tr.store') }}" method="post">
                                    @csrf
                                    <input hidden type="text" value="{{ $data->url_pin }}" name="url_pin">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">First Name</label>
                                            <input value="{{ $data->first }}" name="first_name" type="text"
                                                class="form-control" id="inputEmail4"
                                                placeholder="Enter your first name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Middle Name</label>
                                            <input value="{{ $data->mi }}" name="middle_name" type="text"
                                                class="form-control" id="inputPassword4"
                                                placeholder="Enter your middle name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Last Name</label>
                                            <input value="{{ $data->last }}" name="last_name" type="text"
                                                class="form-control" id="inputPassword4"
                                                placeholder="Enter your last name">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="inputAddress">Address 01</label>
                                        <input name="address_one" value="{{ $data->mailing }}" type="text"
                                            class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 02</label>
                                        <input name="addrsss_two" value="" type="text" class="form-control"
                                            id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="inputAddress">Address 01</label>
                                        <input name="address_one" value="{{ $address_one }}" type="text"
                                            class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 02</label>
                                        <input name="address_two" value="{{ $address_two }}" type="text"
                                            class="form-control" id="inputAddress2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input value="{{ $data->city }}" type="text" name="city"
                                                class="form-control" id="inputCity" placeholder="Enter your city">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputCity">State</label>
                                            <input value="{{ $data->state }}" type="text" name="state"
                                                class="form-control" id="inputCity" placeholder="Enter your state">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputZip">Postal Code / ZIP Code</label>
                                            <input value="{{ $data->zip }}" type="text" name="post_code"
                                                class="form-control" id="inputZip" placeholder="Enter your ZIP code">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input value="" name="email" type="email" class="form-control"
                                                id="inputEmail4" title="Please enter a valid email"
                                                placeholder="exp:xyz@gmai.com" required>
                                            <div id="email-error-message" class="text-danger"></div>
                                        </div>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        {{-- <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input class="form-control md-6" id="pin_code" name="pin_code"
                                                type="text" value="" placeholder="exp:123-123-1234"
                                                aria-label="text"  maxlength="17"
                                                pattern="\d{+1} \d{3}-\d{3}-\d{4}"
                                                title="Enter a pin code in the format 123-123-1234" required>
                                            <div id="error-message" class="text-danger"></div>
                                        </div> --}}
                                        <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input class="form-control md-6" id="phone_number" name="phone_number"
                                                type="text" value="" placeholder="exp:123-123-1234"
                                                aria-label="text" maxlength="17" pattern="\+1 \d{3}-\d{3}-\d{4}"
                                                title="Enter a phone number in the format +1 123-123-1234">
                                            <div id="error-message" class="text-danger"></div>
                                        </div>
                                    </div>
                                    @error('phone_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            name="options[]" value="any">
                                        <label class="form-check-label" for="inlineCheckbox1">Any</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            name="options[]" value="postal_mail">
                                        <label class="form-check-label" for="inlineCheckbox2">Postal Mail</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            name="options[]" value="email">
                                        <label class="form-check-label" for="inlineCheckbox3">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                            name="options[]" value="phone">
                                        <label class="form-check-label" for="inlineCheckbox4">Phone</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                            name="options[]" value="none" checked>
                                        <label class="form-check-label" for="inlineCheckbox5">None of the above
                                            (stated in comment)</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Comments :</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your comments"
                                            name="comments"></textarea>
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">Continue</button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<link rel="stylesheet" onclick="history.back()" href="">
@include('layout.footer')
@include('layout.footer_script')
{{-- email validation start  --}}
<script>
    document.getElementById('phone_number').addEventListener('input', function(e) {
        let value = e.target.value;


        let digitsOnly = value.replace(/\D/g, '').slice(1);

        let formattedValue = '+1 ';


        if (digitsOnly.length > 0) {
            formattedValue += digitsOnly.slice(0, 3);
        }
        if (digitsOnly.length > 3) {
            formattedValue += '-' + digitsOnly.slice(3, 6);
        }
        if (digitsOnly.length > 6) {
            formattedValue += '-' + digitsOnly.slice(6, 10);
        }

        e.target.value = formattedValue;

        const regexPattern = /^\+1 \d{3}-\d{3}-\d{4}$/;
        const errorMessage = document.getElementById('error-message');
        if (!regexPattern.test(formattedValue)) {} else {
            errorMessage.textContent = '';
        }
    });

    window.addEventListener('DOMContentLoaded', (event) => {
        let pinCodeInput = document.getElementById('phone_number');
        if (!pinCodeInput.value.startsWith('+1 ')) {
            pinCodeInput.value = '+1 ';
        }
    });

    //navbar butto link button disabled on form URL
    var currentUrl = window.location.href;
    // alert(currentUrl);
    if (currentUrl.includes(currentUrl)) {
        document.getElementById("menu-item-0").classList.add("home_link_css");
        document.getElementById("menu-item-1").classList.add("home_link_css");
    }
</script>
<script>
    function redirectToHome() {
        window.location.href = "{{ route('tr.home') }}";
    }

    function preventBack() {
        window.history.pushState(null, null, window.location.href);
    }

    function handleBackNavigation(event) {
        preventBack();
        event.preventDefault();
        redirectToHome();
    }

    window.onpopstate = handleBackNavigation;

    window.onload = function() {
        preventBack();
        window.history.forward();
    };

    window.onbeforeunload = function() {
        preventBack();
    };
    window.onunload = function() {};
</script>
