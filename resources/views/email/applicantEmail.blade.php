@component('mail::message')
# Thank you! {{$applicant->firstName}}

We have received your job application. Our HR department will reivew your information. We may call you to further discuss opportunities at Magic Noodle Inc



Thanks,<br>
{{ config('app.name') }}
@endcomponent
