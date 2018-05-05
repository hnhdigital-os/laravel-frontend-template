@extends('hnhdigital-frontend-template::template')

@section('layout')
<div class="wrapper">
  <div class="header-container bg-dark">
    <div class="d-block d-md-none d-lg-none d-xl-none f-right p-5">
      @html(
        button()
          ->type('button')
          ->text('%s', Html::icon('s bars'))
          ->addClass('btn btn-sm btn-light')
          ->data('toggle', 'collapse')
          ->data('target', '#site-menu-navigation')
          ->aria('expanded', false)
          ->aria('controls', 'site-menu-navigation')
      )
    </div>
    {!! $header or ''  !!}
    <div class="d-none d-md-block d-lg-block d-xl-block">
      @component('hnhdigital-frontend-template::sections.nav')
         @slot('color')dark @endslot
         @slot('menu_left')NavPrimaryLeft @endslot
         @slot('menu_right')NavPrimaryRight @endslot
         @slot('nav_class')primary-navigation-container @endslot
      @endcomponent
      @component('hnhdigital-frontend-template::sections.nav')
         @slot('color')light @endslot
         @slot('menu_left')NavSecondaryLeft @endslot
         @slot('menu_right')NavSecondaryRight @endslot
         @slot('nav_class')secondary-navigation-container @endslot
      @endcomponent
    </div>
  </div>
  <div class="d-md-none d-lg-none d-xl-none">
    <div id="site-menu-navigation" class="collapse">
      @component('hnhdigital-frontend-template::sections.nav')
         @slot('color')dark @endslot
         @slot('menu_left')NavPrimaryLeft,NavPrimaryRight,NavSecondaryLeft,NavSecondaryRight,NavHeaderRight @endslot
         @slot('nav_class')primary-navigation-container @endslot
      @endcomponent
    </div>
  </div>
  <div class="container-fluid m-t-20">
    @component('hnhdigital-frontend-template::sections.feedback')
    @endcomponent
    @yield('content')
  </div>

  {!! $footer or '' !!}
</div>

@yield('modals')
@endsection