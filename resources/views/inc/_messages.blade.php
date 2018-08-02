@if (Session::has('success'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('success') }}</li>
    </ul>
@endif

@if (Session::has('loginerror'))
    <ul class="collection center-align">
        <li class="collection-item red">{{ Session::get('loginerror') }}</li>
    </ul>
@endif

@if (Session::has('feedback'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('feedback') }}</li>
    </ul>
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <ul class="collection center-align">
            <li class="collection-item red">{{ $error }}</li>
        </ul>
    @endforeach
@endif