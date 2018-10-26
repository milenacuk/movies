@if($errors->has($field))
<div class = 'alter alter-danger'>
    @foreach($errors->get($field) as $error)
        {{ $error }}
        @endforeach
</div>
@endif