@include('layout.header_script')
@include('layout.header')
@php
    $barcode_str = $data->barcode;
    $barcode = str_replace('/', '', $barcode_str);

    $amount_str = $data->amount;
    $amount = number_format($amount_str);
@endphp
<main class="content pt-3">
    <div class="js--global-header-target"></div>
    <div class="container-fluid px-3 px-sm-1x px-lg-2x px-xl-1x">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div>
                            <div class="col-12" style="background-color:#f5f5f5; padding:30px">
                                <div
                                    class="journal-slide-item__title main-title--decorated d-flex align-items-md-center pt-2">
                                    <p target="_blank">
                                    <h2 class="h4 mr-3" style="color:#002b56">Your Tax Lien Status</h2>
                                    </p>
                                </div>
                                <div
                                    class="row justify-content-center journal-slide-item__body__wrapper no-gutters mx-3">
                                    <div class="col-12">
                                        <div class="journal-slide-item__body d-flex flex-column flex-md-row align-items-center align-items-md-start px-1x px-md-2x pl-lg-3 pr-lg-0 mb-md-2 mb-lg-3"
                                            style="margin-top: 16px;">
                                            <div class="journal-slide-item__cover" style="margin:0px">
                                                <div class="cover-image justify-content-center flex-column">
                                                    <div data-is-viewable="true" class="cover-image__image">
                                                        <img src="{{ asset('public/assets/view_page.jpg') }}"
                                                            alt="The Open Biotechnology Journal" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mb-3 mb-sm-12   card--journal-issue fade">
                                                <div class="card-content">
                                                    <div class="card-header text-darker-gray">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <div class="container">
                                                                <ul style="padding-bottom: 7px;" role="list"
                                                                    class="list-inline main-title__info  d-flex flex-wrap">
                                                                    <h5><span class="sub_h"
                                                                            style="padding-right: 15px;">Call us now for
                                                                            help with resolving this debt at <a
                                                                                style="color:#1608d5"
                                                                                href="tel:+1 8777911829">+1-877-791-1829
                                                                            </a></span>
                                                                </ul>
                                                                <h5 class="sub_h" style="padding-bottom: 7px;">Or press
                                                                    the "Continue" button below to receive more
                                                                    information.</h5>
                                                                <p>
                                                                <div class="col-lg-12">
                                                                    <div class="card mb-4">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">
                                                                                        Filing Date:</p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        {{ $data->file_date }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">
                                                                                        Amount Owed:</p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        ${{ $amount }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">
                                                                                        Filing Number / Barcode:</p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        {{ $barcode }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">Send
                                                                                        Date:</p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        {{ $data->upload_date }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">Due:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        Within 2 weeks from
                                                                                        [{{ $data->upload_date }}]</p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <p class="mb-0 paragrah_record">
                                                                                        Creditor:</p>
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <p
                                                                                        class="text-muted mb-0 paragrah_record">
                                                                                        {{ $data->creditor }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form action="{{ route('tr.record') }}" method="post">
                                                                    <input hidden value="{{ $data->url_pin }}"
                                                                        type="text" name="url_pin_code">
                                                                    {{-- <input hidden value="{{$data->}}" type="text" name="url_pin">
                                                                    <input hidden value="{{$data->}}" type="text" name="first_name">
                                                                    <input hidden value="{{$data->}}" type="text" name="last_name">
                                                                    <input hidden value="{{$data->}}" type="text" name="address1">
                                                                    <input hidden value="{{$data->}}" type="text" name="address2">
                                                                    <input hidden value="{{$data->}}" type="text" name="city">
                                                                    <input hidden value="{{$data->}}" type="text" name="state">
                                                                    <input hidden value="{{$data->}}" type="text" name="psotal_code"> --}}
                                                                    </p>
                                                                    <div id="demo1"
                                                                        style="margin-top: 6px; text-align: justify;"
                                                                        class="collapse" data-original-height="0px">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('tr.record') }}" method="post">
                                                    @csrf
                                                    <input hidden value="{{ $data->url_pin }}" type="text"
                                                        name="url_pin_code">

                                                    <div class=" text-uppercase text-primary btn--more__wrapper mt-sm-n3"
                                                        style="text-align: end; padding-right: 17px;"> <button
                                                            class="btn btn-outline-success"
                                                            type="submit">Continue</button>
                                                    </div>
                                                </form>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div> <!--sidebar-->
                    {{-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                         </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
<link rel="stylesheet" onclick="history.back()" href="">
@include('layout.footer')


<script>
    var currentUrl = window.location.href;
    // alert(currentUrl);

    if (currentUrl.includes(currentUrl)) {
        document.getElementById("menu-item-0").classList.add("home_link_css");
        document.getElementById("menu-item-1").classList.add("home_link_css");
    }
</script>
<script>
    // function redirectToHome() {
    //     window.location.href = "{{ route('tr.home') }}";
    // }

    // function preventBack() {
    //     window.history.pushState(null, null, window.location.href);
    // }

    // function handleBackNavigation(event) {
    //     preventBack();
    //     event.preventDefault
    // }
    // window.onpopstate = handleBackNavigation;
    // window.onload = function() {
    //     preventBack();
    //     window.history.forward();
    // };
    // window.onbeforeunload = function() {
    //     preventBack();
    // };
    // window.onunload = function() {};
</script>
