@if (Session::has('success'))
    {{ Session::get('success') }}
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <ul class="collection ">
            <li class="collection-item red"> {{ $error }} </li>
        </ul>
    @endforeach
@endif