@php($menu_left = isset($menu_left) ? $menu_left : '')
@php($menu_right = isset($menu_right) ? $menu_right : '')
@if(app('Nav')->has(trim($menu_left)) || app('Nav')->has(trim($menu_right)))
<div class="bg-{{ $color }} ">
<nav class="navbar p-5 navbar-expand-sm navbar-{{ $color }} hidden-print {{ $nav_class or '' }}">
  @if(isset($menu_left))
  @component('hnhdigital-frontend-template::sections.menu', ['menu' => $menu_left, 'ul_class' => 'mr-auto'])
  @endcomponent
  @endif
  @if(isset($menu_right))
  @component('hnhdigital-frontend-template::sections.menu', ['menu' => $menu_right, 'ul_class' => 'ml-auto text-right'])
  @endcomponent
  @endif
</nav>
</div>
@endif