<!DOCTYPE html>
<html lang="en">
<head>
  {{ app('FrontendAsset')->meta() }}
  <title>{{ $title or $title = '' }}{!! $title ? ' | ' : '' !!}{{ $master_title }}</title>
  {{ app('FrontendAsset')->css() }}
  {{ app('FrontendAsset')->less() }}
  {{ app('FrontendAsset')->styles('header') }}
  {{ app('FrontendAsset')->js('header') }}
  {{ app('FrontendAsset')->scripts('header') }}
</head>
<body class="{{ $body_class or 'bg-light' }} environment-{{ config('app.dev_name', false) ? 'testing' : 'production' }}">
  @if(config('app.dev_name', false))
  <div class="bg-danger text-white p-10 text-center">
    @if(config('app.dev_full_name'))
      {{ config('app.dev_full_name') }}
    @else
     @icon('s exclamation-triangle') Warning: This is not a live system
    @endif
    @if(config('app.dev_details'))
    <div class="f-10">
      Environment: <u>{{ config('app.dev_name') }}</u>
      Branch: <u>{{ Git::branch() }}</u>
      Version: <u>{{ Git::version() }}</u>
      Updated: <u>{{ Git::lastCommitDate() }}</u>
    </div>
    @endif
  </div>
  @endif
@yield('layout')
{{ app('FrontendAsset')->js() }}
{{ app('FrontendAsset')->scripts('footer') }}
{{ app('FrontendAsset')->scripts('inline') }}
{{ app('FrontendAsset')->js('ready') }}
{{ app('FrontendAsset')->scripts('ready') }}
@yield('footer')
</body>
</html>