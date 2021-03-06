
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/img/logo.png">

    <title> Take A Ride</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/style.css">

    <!-- DataTable CSS -->
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Multiselect -->
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/select2/dist/css/select2.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/switchery/dist/switchery.css" />
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" />
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/multiselect/css/multi-select.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">

     <!-- Clock picker -->
     <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/clockpicker/dist/jquery-clockpicker.min.css">

     <!-- Color picker plugins css -->
     <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css">

     <!-- Date picker plugins css -->
     <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" type="text/css" />

     <!-- Daterange picker plugins css -->
     <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/timepicker/bootstrap-timepicker.min.css">
     <link rel="stylesheet" type="text/css" href="/admin/css/node_modules/bootstrap-daterangepicker/daterangepicker.css">

     <!-- File-Upload css -->
    <link rel="stylesheet" href="/admin/css/node_modules/dropify/dist/css/dropify.min.css">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body class="skin-blue fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"> Take A Ride</p>
        </div>
    </div>

    <div id="main-wrapper">
