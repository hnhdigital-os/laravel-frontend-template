@foreach(['success', 'warning', 'danger'] as $feedback_type)
@if (session()->has($feedback_type))
<div class="alert alert-{{ $feedback_type }} p-10">
  <div class="row v-middle">
    <div class="col-auto">
      @icon('info-circle fa-2x')
    </div>
    <div class="col p-l-none">
      {{ session($feedback_type) }}
    </div>
  </div>
</div>
@endif
@endforeach