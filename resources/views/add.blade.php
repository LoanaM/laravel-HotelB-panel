<form class="" action="{{route('add')}}" method="post">
  {{ csrf_field() }}
  <input type="text" name="n_stanza" placeholder="numero stanza">
  <input type="text" name="tipologia" placeholder="tipologia">
  <input type="text" name="piano" placeholder="piano">
  <input type="submit" name="" value="SALVA">
</form>
