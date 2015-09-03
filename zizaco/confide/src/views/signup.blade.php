<form method="POST" action="{{ URL::to('users') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ Session::getToken() }}">
    <fieldset>
        @if (Cache::remember('username_in_confide', 5, function() {
            return Schema::hasColumn(Config::get('auth.table'), 'username');
        }))
            <div class="form-group">
                <label for="username">{{ trans('confide::confide.username') }}</label>
                <input class="form-control" placeholder="{{ trans('confide::confide.username') }}" type="text" name="username" id="username" value="{{ Input::old('username') }}">
            </div>
        @endif
        <div class="form-group">
            <label for="email">{{ trans('confide::confide.e_mail') }} <small>{{ trans('confide::confide.signup.confirmation_required') }}</small></label>
            <input class="form-control" placeholder="{{ trans('confide::confide.e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">{{ trans('confide::confide.password') }}</label>
            <input class="form-control" placeholder="{{ trans('confide::confide.password') }}" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{ trans('confide::confide.password_confirmation') }}</label>
            <input class="form-control" placeholder="{{ trans('confide::confide.password_confirmation') }}" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{ trans('confide::confide.signup.submit') }}</button>
        </div>

    </fieldset>
</form>
