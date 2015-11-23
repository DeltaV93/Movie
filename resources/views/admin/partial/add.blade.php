  <div class="container">
    @if (Session::has('flash_message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ Session::get('flash_message') }}</strong>
      </div>
    @endif
  </div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
$('div.alert').not('alert-success').delay(2000).slideUp(1000);
</script>