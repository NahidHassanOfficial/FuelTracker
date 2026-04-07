<x-mail::message>
    # Verify Your Station

    Please click the button below to verify your station. This link is secure and will expire after a set period.

    <x-mail::button :url="$signedUrl">
        Verify Station
    </x-mail::button>

    If you did not request this verification, no further action is required.

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
