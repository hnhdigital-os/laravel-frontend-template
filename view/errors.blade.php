@if (isset($errors) && count($errors) > 0)
<!-- Form Error List -->
<div class="alert alert-danger p-10">
  <div class="row v-middle">
    <div class="col-auto">
      @icon('exclamation-circle fa-2x')
    </div>
    <div class="col p-l-none">
      <dl class="m-none">
        <dt>An error occured.</dt>
        @foreach ($errors->all() as $error)
        <dd class="m-b-none">{{ $error }}</dd>
        @endforeach
      </dl>
    </div>
  </div>
</div>
@endif
