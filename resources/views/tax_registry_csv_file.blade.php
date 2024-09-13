@include('layout.header_script')
@include('layout.header')
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
                                </div>
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('public/assets/thanks_page.jpg') }}"
                                                class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <div class="card-body " style="text-align: center ; margin-top: 35px;">
                                                @if(session('status') == "success")
                                                <h5 class="card-title pb-3" style="color: green; font-size: 35px;">
                                                    {{ session('msg') }}
                                                </h5>
                                            @endif

                                            @if(session('status') == "error")
                                                <h5 class="card-title pb-3" style="color: rgb(240, 33, 33); font-size: 35px;">
                                                    {{ session('msg') }}
                                                </h5>
                                            @endif-->
                                                <p class="card-text pb-3" style="font-size:20px">If you provided your
                                                    contact information, a
                                                    tax resolution specialist from our office will contact you soon.</p> 
                                                    <div class="col-12">
                                                        <form action="#" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">Example file input</label>
                                                                <input type="file" name="csv_file" class="form-control-file" id="exampleFormControlFile1" required>
                                                            </div>
                                                            @error('csv_file')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                            <div class="row pb-3" style="justify-content: end;">
                                                                <button class="btn btn-outline-success" type="submit">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script>
    // setTimeout(function() {
    //     window.location.href = '{{ route('tr.home') }}';
    // }, 3000);


    // link to
    var currentUrl = window.location.href;

    if (currentUrl.includes(currentUrl)) {
        document.getElementById("menu-item-0").classList.add("home_link_css");
        document.getElementById("menu-item-1").classList.add("home_link_css");
    }

    
</script>
