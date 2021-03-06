@component('mail::message', ['preheader' => 'Vi har modtaget en anmodning om at nulstille din kode med denne e-mailadresse. ('.$user['email'].')'])

# Hej

Vi har modtaget en anmodning om at nulstille koden til at tilgå din K-Net bruger hos {{config('app.name')}} med din e-mailadresse ({{ $user['email'] }}) fra en {{ $platform }} enhed med browseren {{ $browser }}. Vi kunne ikke finde en bruger med tilknytning til denne e-mailadresse.

Hvis du er en beboer på {{config('app.name')}} og har forventet at modtage denne mail, så bør du overveje at anmode om en nulstilling af adgangskoden ved hjælp af den e-mail adresse, der er tilknyttet din bruger.

@component('mail::button', ['url' => config('app.url')])
Prøv med en anden e-mailadresse
@endcomponent

Hvis du ikke er beboer på {{config('app.name')}} og ikke har anmodet om nulstilling af din adgangskode, så kan du blot se bort fra denne mail, eller [kontakte netgruppen]({{ config('app.url') }}), hvis du har spørgsmål.

Med venlig hilsen,<br>
Netgruppen på {{ config('app.name') }}

@component('mail::subcopy')
Hvis du har problemer med knappen ovenfor, så kan du kopiere og indsætte web-adressen nedenfor i din browser:

{{ config('app.url') }}
@endcomponent

@endcomponent
