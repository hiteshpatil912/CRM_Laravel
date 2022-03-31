@component('mail::message')
# Your post was liked

liked one of your posts

@component('mail::button', ['url' => route('redirect') ])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent