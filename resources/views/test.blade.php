<!DOCTYPE html>
<html lang="en" ng-app = "myModule">
<head>
<meta charset="UTF-8">
<title>Laravel Lumx</title>
<link rel="stylesheet" href="{{ asset('css/lumxall.css') }}">
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

    <div class="p+">
      <lx-switch ng-model="vm.switches.colors.blue" lx-color="blue">Blue switch</lx-switch>
      <lx-switch ng-model="vm.switches.colors.green" lx-color="green" class="mt+">Green switch</lx-switch>
      <lx-switch ng-model="vm.switches.colors.orange" lx-color="orange" class="mt+">Orange switch</lx-switch>
      <lx-switch ng-model="vm.switches.colors.red" lx-color="red" class="mt+">Red switch</lx-switch>
    </div>


    <script src="{{ asset('js/lumxall.js') }}"></script>
    <script>
      angular.module('myModule', ['lumx']);
    </script>

  </body>
</html>
