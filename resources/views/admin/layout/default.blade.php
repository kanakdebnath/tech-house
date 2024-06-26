<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="@yield('page_description', $page_description ?? '')" />
    <meta name="format-detection" content="telephone=no">

    <title>{{ config('Site.title') ? config('Site.title') : config('dz.name') }} | @yield('title', $page_title ?? '')</title>
    <!-- Favicon icon -->
    @if (config('Site.favicon'))
        <link rel="icon" type="image/png"
            href="{{ asset('storage/configuration-images/' . config('Site.favicon')) }}">
    @else
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    @endif
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css" />

    @php
        $action = DzHelper::controller() . '_' . DzHelper::action();
    @endphp
    @if (isset($action) && !empty(config('dz.public.pagelevel.css.' . $action)))
        @foreach (config('dz.public.pagelevel.css.' . $action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css" />
        @endforeach
    @endif

    {{-- Global Theme Styles (used by all pages) --}}
    @if (!empty(config('dz.public.global.css')))
        @foreach (config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css" />
        @endforeach
    @endif

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css
" rel="stylesheet">
    @stack('css')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! url('/admin') !!}" class="brand-logo">
                @if (!empty(config('Site.icon_logo')) && !empty(config('Site.text_logo')))
                    <img class="logo-abbr"
                        src="{{ asset('storage/configuration-images/' . config('Site.icon_logo')) }}">
                    <img class="brand-title"
                        src="{{ asset('storage/configuration-images/' . config('Site.text_logo')) }}">
                @else
                    <img class="logo-abbr" src="{{ asset('images/logo.png') }}">
                    <img class="brand-title" src="{{ asset('images/logo-text.png') }}">
                @endif
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        @include('admin.elements.header')


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start kri
        ***********************************-->
        <div class="content-body">
            @include('admin.elements.alert_message')
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        @include('admin.elements.footer')

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Role, User Permissions Model Start
    ***********************************-->
    <div class="modal fade" id="AssignRevokePermissionsModal">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Permissions</h5>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="AssignRevokePermissionsModalBody">
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Role, User Permissions Model End
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script>
        'use strict';
        var baseUrl = "{!! url('/') !!}";
        var enableCkeditor = '{!! config('Writing.editable') !!}';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>


    @stack('inline-scripts')

    @if (!empty(config('dz.public.global.js.top')))
        @foreach (config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if (!empty(config('dz.public.pagelevel.js.' . $action)))
        @foreach (config('dz.public.pagelevel.js.' . $action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if (!empty(config('dz.public.global.js.bottom')))
        @foreach (config('dz.public.global.js.bottom') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif


    @yield('scripts')
    @if (Session::has('msg'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "<?php echo session::get('cls'); ?>",
                title: "<?php echo session::get('msg'); ?>",
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
        </script>
    @endif

    <script>
        $('.delete-btn').on('click', function() {
            let id = $(this).attr('data-id')

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete_form_' + id).submit()
                }
            });
        })
    </script>
</body>

</html>
