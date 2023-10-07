<x-mail::message>
# Requête de démonstration personnalisée.

Une nouvelle demande de démo a été faite par un lead potentiel.
Voici les informations utiles pouvant permettre un premier contact.
<br>
Nom : {{ $demo['name'] }}
<br>
Email: {{ $demo['email'] }}
<br>
Phone: {{ $demo['phone'] }}
<br>
Pays: {{ $demo['country'] }}
<br>
Ville: {{ $demo['city'] }}
<br>
Industrie: {{ $demo['industry'] }}
<br>
Taille de l'entreprise: {{ $demo['size'] }}
<br>
Intérêt principal: {{ $demo['primary_interest'] }}

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
