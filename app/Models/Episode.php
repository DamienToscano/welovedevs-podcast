<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Episode extends Model
{
    use Sushi;

    protected $casts = [
        'released_at' => 'datetime',
    ];

    protected $rows = [
        [
            'number' => 40,
            'title' => 'L’agilité comme tremplin vers le management résilient – Florence Chabanois, Scaleway',
            'notes' => 'Ça y est, c’est le 40ème épisode de la Saison 2 de notre Podcast. <br>Avec nos invité·e·s, on est partis à la recherche la recette du bonheur dans l’IT. Et chacune, chacun nous a donné son ingrédient secret.<br>Aujourd’hui, Damien vous présente Florence Chabanois, Head of Engineering chez Scaleway. Et on est vraiment heureux d’avoir Florence avec nous pendant une heure pour parler de son job et de management.',
            'audio' => 'https://audio.ausha.co/B4AYztp4vnwD.mp3',
            'image' => 'https://image.ausha.co/xhFcu0MWtQE5tQGqBfhLixJ24wPkMyKcceMWG8SF_400x400.jpeg',
            'duration' => 3788,
            'released_at' => '2022-07-22 10:00:00',
        ],
        [
            'number' => 39,
            'title' => 'Travailler en remote pour une boite canadienne – Amélie Benoit, Tech Lead chez BusBud',
            'notes' => 'Aujourd’hui Damien vous présente Amélie Benoît, rencontrée au Web2Day 🌞<br>Amélie a travaillé chez Ubisoft à Montréal sur une app Companion appelée Ubisoft Connect, puis elle est entrée chez Busbud, une autre entreprise Canadienne où elle a été tout fraichement nommée Tech Lead 🎉<br>Busbud, c’est un site Web de réservation de voyages en autobus et Amélie travaille désormais en remote depuis Bordeaux après quelques mois sur place au Canada. C’est un sujet incroyable qu’il fallait que l’on développe 👌',
            'audio' => 'https://audio.ausha.co/omX1niGvrndD.mp3',
            'image' => 'https://image.ausha.co/eeKxYFOAiH58atHWRAZvXTLjou77dsnYveByVWKN_400x400.jpeg',
            'duration' => 2940,
            'released_at' => '2022-07-15 10:00:00',
        ],
        [
            'number' => 38,
            'title' => 'Disco, pattes d’eph et parité – Marie et Marianne d’Eleven Labs',
            'notes' => 'J’ai rencontré Marie et Marianne au Web2Day, tout comme Elisabeth que l’on vous a présentée la semaine dernière. Elles travaillent chez Eleven Labs, et elles sont heureuses d’être développeuses, sur Symfony et PHP.
            <br>Au Web2Day, Marie et Marianne sont venues animer une conférence intitulée : 1980’s : Disco, pattes d’eph et parité,
            Au delà de l’abstract, c’est un sujet incroyable !',
            'audio' => 'https://audio.ausha.co/ygdjJUlD3Xnx.mp3',
            'image' => 'https://image.ausha.co/IZ6e3LJ0gDuGRMkEbJlC6cCj3gJIeGBl8jtsyOuT_400x400.jpeg',
            'duration' => 3152,
            'released_at' => '2022-07-08 10:00:00',
        ],
        [
            'number' => 37,
            'title' => 'Être Tech dans le service public – Elisabeth Fainstein',
            'notes' => 'J’ai rencontré Elisabeth au Web2Day. Elle intervenait sur un panel intitulé : « Entreprendre pour l’intérêt général au sein d’une administration ». Ce podcast a donc une très belle acoustique et une invitée de qualité. Elisabeth est coach technique à Etalab.<br>Elle accompagne les EIGs (Entrepreneur•euse•s d’Interêt Général) dans la réalisation technique de leur projet.<br>Elisabeth vient du monde de l’édition ! On a donc aussi parlé de son parcours professionnel et de l’inclusion dans les métiers du numérique.',
            'audio' => 'https://audio.ausha.co/BQdZ2UWXYQ7a.mp3',
            'image' => 'https://image.ausha.co/bQAVFWb8iQb0p4cLECguelqOnX3wr2Yax9HsvpDH_400x400.jpeg',
            'duration' => 2679,
            'released_at' => '2022-07-01 10:00:00',
        ],
        [
            'number' => 36,
            'title' => 'Laissez les gens s’investir – Marine Gandy',
            'notes' => 'J’ai profité de l’AFUP Day à Lille pour attraper Marine Gandy. Le Discours de Marine m’avait interpellé lors d’un Twitter Space et j’ai été content de pouvoir enregistrer avec elle.<br>On a parlé de pas mal de sujets, et notamment de la période de premier emploi qui suit la reconversion. On en avait pas encore parlé avant dans ce podcast.<br>Marine est la présidente de Drupal France, elle est militante, experte, rock’n’roll. Marine nous décrit l’entreprise où elle serait heureuse, où tout le monde est à l’aise. On parle d’accessibilité dans le logiciel aussi, de safe space et d’emojis slack.',
            'audio' => 'https://audio.ausha.co/b7zv5FOKaEgz.mp3',
            'image' => 'https://image.ausha.co/uql8380vzn0hcR9QTZgs63hiYfLmpf7abUiMLLJi_400x400.jpeg',
            'duration' => 4260,
            'released_at' => '2022-06-24 10:00:00',
        ],
        
    ];

    protected function duration(): Attribute
    {
        return Attribute::make(
            get: fn (int $value) => CarbonInterval::seconds($value)->cascade()->format('%H:%I:%S'),
        );
    }
}
