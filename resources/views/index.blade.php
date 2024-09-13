@extends('layout.main_layout')

@section('main-content')
    <main class="content">
        <section class="mt-0 mt-md-2x">
            <div class="container-fluid top_art_img">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        <div class="grid-hero--horizontal">
                            <div class="grid-hero__featured">
                                <article class="grid-hero-teaser"><a href="#" title=""
                                        class="grid-hero-teaser__link">
                                        <picture><img loading="lazy" src="{{ asset('public/assets/hom-page.jpg') }}"
                                                class="grid-hero-teaser__img">
                                        </picture>
                                    </a>

                                </article>
                            </div>
                            <!-- bottom articles -->
                            <div class="grid-hero__bottom">
                                <div class="multi-search">
                                    <div class="grid-hero-list--columns">
                                        <article
                                            class="card card-do card-do--hero-article  border-light-gray pb-3">
                                            {{-- <div class="card-content">
                                                <div class="card-meta mb-1 text-uppercase"><span
                                                        class="card-meta__category"><a href="#"
                                                            class="primary">Blog 01</div>
                                                <div class="card-header mb-2">
                                                    <h3 class="card__title sans-serif"><a href="#" title=""
                                                            class="text-reset animation-underline">Title 01...
                                                        </a></h3>
                                                </div>

                                                <div class="card-meta text-uppercase "><span
                                                        class="card-contribs authors text-reset comma-separated"><span>Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
                                                            fugit, veritatis nam vero rerum possimus recusandae nemo
                                                            incidunt optio sequi magni consectetur, provident tenetur
                                                            expedita sit saepe reiciendis sunt! Quia.</span>
                                                        <ul class="list-inline comma-separated d-inline"
                                                            title="list of authors"></ul>
                                                    </span></div>
                                            </div> --}}
                                        </article>
                                        <article
                                            class="card card-do card-do--hero-article  border-light-gray pb-3">
                                            {{-- <div class="card-content">
                                                <div class="card-meta mb-1 text-uppercase"><span
                                                        class="card-meta__category"><a href="#"
                                                            class="primary">Blog 02</div>
                                                <div class="card-header mb-2">
                                                    <h3 class="card__title sans-serif"><a href="#" title=""
                                                            class="text-reset animation-underline">Title 02...
                                                        </a></h3>
                                                </div>

                                                <div class="card-meta text-uppercase "><span
                                                        class="card-contribs authors text-reset comma-separated"><span>Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
                                                            fugit, veritatis nam vero rerum possimus recusandae nemo
                                                            incidunt optio sequi magni consectetur, provident tenetur
                                                            expedita sit saepe reiciendis sunt! Quia.</span>
                                                        <ul class="list-inline comma-separated d-inline"
                                                            title="list of authors"></ul>
                                                    </span></div>
                                            </div> --}}
                                        </article>
                                        <article
                                            class="card card-do card-do--hero-article  border-light-gray pb-3">
                                            {{-- <div class="card-content">
                                                <div class="card-meta mb-1 text-uppercase"><span
                                                        class="card-meta__category"><a href="#"
                                                            class="primary">Blog 03</div>
                                                <div class="card-header mb-2">
                                                    <h3 class="card__title sans-serif"><a href="#" title=""
                                                            class="text-reset animation-underline">Title 03...
                                                        </a></h3>
                                                </div>

                                                <div class="card-meta text-uppercase "><span
                                                        class="card-contribs authors text-reset comma-separated"><span>Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
                                                            fugit, veritatis nam vero rerum possimus recusandae nemo
                                                            incidunt optio sequi magni consectetur, provident tenetur
                                                            expedita sit saepe reiciendis sunt! Quia.</span>
                                                        <ul class="list-inline comma-separated d-inline"
                                                            title="list of authors"></ul>
                                                    </span></div>
                                            </div> --}}
                                        </article>
                                        <article
                                            class="card card-do card-do--hero-article  border-light-gray pb-3">
                                            {{-- <div class="card-content">
                                                <div class="card-meta mb-1 text-uppercase"><span
                                                        class="card-meta__category"><a href="#"
                                                            class="primary">Blog 04</div>
                                                <div class="card-header mb-2">
                                                    <h3 class="card__title sans-serif"><a href="#" title=""
                                                            class="text-reset animation-underline">Title 04...
                                                        </a></h3>
                                                </div>

                                                <div class="card-meta text-uppercase "><span
                                                        class="card-contribs authors text-reset comma-separated"><span>Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
                                                            fugit, veritatis nam vero rerum possimus recusandae nemo
                                                            incidunt optio sequi magni consectetur, provident tenetur
                                                            expedita sit saepe reiciendis sunt! Quia.</span>
                                                        <ul class="list-inline comma-separated d-inline"
                                                            title="list of authors"></ul>
                                                    </span></div>
                                            </div> --}}
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb_view col-md-4 col-lg-4 col-xl-4">
                        <div class="grid-hero__latest">
                            <div class="multi-search">
                                <div>
                                    <article class="card-do card-do--latest-news">
                                        <!-- <strong>Corporate Affiliations:</strong><br><br> -->
                                        <h3 class="h6 title--decorated  align-items-center mb-3">
                                            Your Tax Lien Status
                                        </h3>
                                        <div class="card shadow p-3  bg-white rounded">
                                            <div class="hmpg-36">
                                                <p><strong>Enter Your PIN:</strong></p>
                                                {{-- {{ $alert }} --}}
                                                @if (session('alert'))
                                                    <div class="alert alert-{{ session('alert') }}">
                                                        {{ session('msg') }}
                                                    </div>
                                                @endif
                                                {{-- msg --}}
                                                <div class="col-12">
                                                    <form action="{{ route('tr.show') }}" method="post">
                                                        @csrf
                                                        <div>
                                                        </div>
                                                        <div class="row pb-3" style="justify-content: center;">
                                                            <input class="form-control me-2" id="pin_code" name="pin_code"
                                                                type="text" placeholder="exp:12345-123-12345"
                                                                aria-label="text" required="" maxlength="17"
                                                                pattern="\d{5}-\d{3}-\d{5}"
                                                                title="Enter a pin code in the format 12345-123-12345"
                                                                required>
                                                        </div>
                                                        @error('pin_code')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror

                                                        <div class="row pb-3" style="justify-content: end;">
                                                            <button class="btn btn-outline-success" onclick="goBack()"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </section> -->
        </section>
    </main>
    </div>
    </div>
    </div>
    <script type="text/javascript">
        // function preventBack() {
        //     window.history.forward();
        // }
        // setTimeout("preventBack()", 0);
        // window.onunload = function() {
        //     null
        // };
    </script>
    <script>
        //   redirec page script
        function redirectToHome() {
            window.location.href = "{{ route('tr.home') }}";
        }

        function preventBack() {
            history.pushState(null, null, location.href);
        }
        preventBack();
        window.onpopstate = function() {
            redirectToHome();
        };
        window.onload = function() {
            preventBack();
        };
        window.onunload = function() {
            null;
        };
    </script>
@endsection
