<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <style>
    .whatsapp {
        padding: 10px;
        background: #5aff89;
        color: #000;
        margin: 10px;
        border-radius: 10px;
        list-style: none;
    }

    .whatsapp h5 {
        display: block;
        width: 100%;
    }

    .whatsapp span {
        font-size: 12px;
    }
  </style>
</head>
<body>
    @yield('body')
</body>
</html>
