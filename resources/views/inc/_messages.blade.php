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

@if (Session::has('countrycreated'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('countrycreated') }}</li>
    </ul>
@endif

@if (Session::has('deleteUser'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('deleteUser') }}</li>
    </ul>
@endif

@if (Session::has('placecreated'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('placecreated') }}</li>
    </ul>
@endif

@if (Session::has('comment'))
    <ul class="collection center-align">
        <li class="collection-item green">{{ Session::get('comment') }}</li>
    </ul>
@endif

@if (Session::has('like_exist'))
    <ul class="collection center-align">
        <li class="collection-item red">{{ Session::get('like_exist') }}</li>
    </ul>
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <ul class="collection center-align">
            <li class="collection-item red">{{ $error }}</li>
        </ul>
    @endforeach
@endif