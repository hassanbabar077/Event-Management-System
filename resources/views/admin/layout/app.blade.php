<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/boxicons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/core.css"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('admin') }}/assets/vendor/js/helpers.js"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('admin') }}/assets/js/config.js"></script>
<link rel="stylesheet" href="{{ asset('admin/assets/dropify/css/dropify.min.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .dropify-wrapper .dropify-message p {
        font-size: 20px
    }
</style>

</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        @include('admin.layout.components.sidebar')
        <div class="layout-page">
      @include('admin.layout.components.header')

      @yield('admin-content')

        </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>

       <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('admin') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin') }}/assets/js/dashboards-analytics.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('admin/assets/dropify/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                    'blockQuote', 'insertTable', 'imageUpload', 'undo', 'redo'
                ],
                ckfinder: {
                    uploadUrl: '/path/to/your/upload-endpoint' // Replace with your server-side upload URL
                },
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    console.log(editor.getData()); // Log the editor's content whenever it changes
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>
</html>
