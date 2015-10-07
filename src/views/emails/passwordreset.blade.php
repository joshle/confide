<h1>{{ trans('confide::confide.email.password_reset.subject') }}</h1>

<p>{{ trans('confide::confide.email.password_reset.greetings', array( 'name' => (isset($user['username'])) ? $user['username'] : $user['email'])) }},</p>

<p>{{ trans('confide::confide.email.password_reset.body') }}</p>
<a href='{{ url('users/reset_password/'.$token) }}'>
    {{ url('users/reset_password/'.$token)  }}
</a>

<p>{{ trans('confide::confide.email.password_reset.farewell') }}</p>
