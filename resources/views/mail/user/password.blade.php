<x-mail::message>
# Your account has been successfully generated

Your password: {{ $password }}

{{--<x-mail::button :url="''">--}}
{{--Log In--}}
{{--</x-mail::button>--}}

Thanks for registration,<br>
{{ config('app.name') }}
</x-mail::message>
