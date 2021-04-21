@if ($errors->any())
<div class="notification is-danger">
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
@if(session('message'))
<div class="notification is-success">
    <button class="delete"></button>
         <div>
            <div>{{ __('Message') }}</div>
            <p>{{session('message')}}</p>
        </div>
</div>
@endif


