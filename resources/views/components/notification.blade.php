@if ($errors->any())
<div class="notification is-danger is-light">
    <button class="delete"></button>
         <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
</div>
@endif

