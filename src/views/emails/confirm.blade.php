<h1>{{ trans('confide::confide.email.account_confirmation.subject') }}</h1>

<p>{{ trans('confide::confide.email.account_confirmation.greetings', array('name' => (isset($user['username'])) ? $user['username'] : $user['email'])) }},</p>

<p>{{ trans('confide::confide.email.account_confirmation.body') }}</p>
<a href='{{ url("users/confirm/{$user['confirmation_code']}") }}'>
    {{ url("users/confirm/{$user['confirmation_code']}") }}
</a>

<p>{{ trans('confide::confide.email.account_confirmation.farewell') }}</p>
