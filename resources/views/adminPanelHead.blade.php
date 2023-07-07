<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Admin Panel</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('utills/favicon-32x32.png') }}">
    
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ asset('utills/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{ asset('utills/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('utills/demo-2.css') }}">

    <style>
        body{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }
        .register-right{
            background: #f8f9fa;
            margin-left: 5px;
        }
        .register .register-form{
            padding: 3%;
        }
        .btnRegister{
            float: right;
            border: none;
            border-radius: 1.5rem;
            background: #0062cc;
            transition: 0.5s ease-in-out;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        .btnRegister:hover{
            background: #01C3FD;
            box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            -webkit-box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            -moz-box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            transition: 0.5s ease-in-out;
        }
        .register .nav-tabs .nav-new{
            padding: 5%;
            height: 20px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .customShadow{
          box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
          -webkit-box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
          -moz-box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
        }

        .form-control:focus {
          border: none;
          box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
          -webkit-box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
          -moz-box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
        }

        .alert-custom {
            background: #01C3FD;
            box-shadow: 0px 20px 11px 0px rgba(0,0,0,0.55);
            -webkit-box-shadow: 0px 20px 11px 0px rgba(0,0,0,0.55);
            -moz-box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            transition: 0.5s ease-in-out;
            right: 10px;
            left: 2px;
        }

  </style>
</head>
