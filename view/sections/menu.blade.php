@if(app('Nav')->has(trim($menu)))
<ul class="navbar-nav {!! $ul_class or '' !!}">
{!! app('Nav')->menu(trim($menu))->setItemCallbackOption(function(&$item) {
  $item->addItemAttribute('class', 'nav-item')
    ->addLinkAttribute('class', 'nav-link');
})->render('') !!}
</ul>
@endif