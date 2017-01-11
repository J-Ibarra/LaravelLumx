<!DOCTYPE html>
<html lang="en" ng-app = "myModule">
<head>
<meta charset="UTF-8">
<title>Laravel Lumx</title>
<link rel="stylesheet" href="{{ asset('css/lumx.css') }}">
<link rel="stylesheet" href="{{ asset('css/materialdesignicons.css') }}">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
</head>
  <body>
    <div class="p+">
    Hola
  </div>
    <div class="p+">
      <lx-button lx-type="raised">Button</lx-button>
      <lx-button lx-type="flat">Button</lx-button>
      <lx-button lx-type="fab"><i class="mdi mdi-plus"></i></lx-button>
      <lx-button lx-type="icon"><i class="mdi mdi-plus"></i></lx-button>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/velocity.js') }}"></script>
    <script src="{{ asset('js/moment-with-locales.js') }}"></script>
    <script src="{{ asset('js/angular.js') }}"></script>
    <script src="{{ asset('js/lumx.js') }}"></script>
    <script>
      angular.module('myModule', ['lumx']);
    </script>

  </body>
</html>
