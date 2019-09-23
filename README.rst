############################################
Translations for CodeIgniter System Messages
############################################

This project contains translations for the CodeIgniter
system messages folder, **system/language/english**.
A changelog has been added to the repository, so you can track updates
between official releases.

Copy the folder(s) for the idioms you are interested in,
from inside the **language** folder of this project to your
**application/language** folder.

You may then use the CodeIgniter Language class to reference the translations
directly, or you can set the default language in **application/config/config**
to the idiom appropriate for your webapp.

There have been several questions about RTL languages, but that is not
something addressed in CodeIgniter. The suggested approach is to keep any
translations in left-to-right order, and to deal with right-to-left
rendering through the "dir" attribute of an HTML element, or the "direction"
attribute in CSS.

**********************
Repository Information
**********************

Each language is maintained by a community member, per the table below:

=======================  ===========  ==================  =========================
Idiom                    Status       User                Maintainer
=======================  ===========  ==================  =========================
arabic                   3.1.11       daif                Daif Alotaibi ???
armenian                 3.1.5        tgrnmrdn            Tigran Muradyan
azerbaijani              3.1.5        Qarakom             Sübhan Cabbarov
basque                   3.1.11       agonirena           Ander Goñi
bengali                  3.1.5        kabircse            Kabir Hossain
bulgarian                3.1.10       ivantcholakov       Ivan Tcholakov
catalan                  3.1.5        Ignasimg            Ignasi Molsosa
croatian                 3.1.5        PaleRider981        Mario Ljubicic
czech                    3.1.11       Ruplahlava          Štěpán Postránecký
danish                   3.1.5        janhansson*         Jan Hansson
dutch                    3.1.5        pkrul               Pieter Krul
filipino                 3.1.5        dzerium             Edzer Josh V. Padilla
french                   3.1.11       includebeer         Alain Rivest
german                   3.1.5        Rufnex              Johannes Gamperl 
greek                    3.1.5        xargr               Grigoris Charamidis
gujarati                 3.1.10       sajid19991          Sajid Mathupotra
hindi                    3.1.5        shindesushilkumar   Sushilkumar Shinde
hungarian                3.1.5        orionstar           László Bóra
indonesian               3.1.10       ridho1991           Mutasim Ridlo
italian                  3.1.5        ster                Stefano Mazzega
japanese                 3.1.6        ???                 N/A
khmer                    3.1.5        Chanthoeun          Chanthoeun Kim
korean                   3.1.6        KwonLatte           HyeongJoo Kwon ???
latvian                  3.1.5        DavisMiculis        Davis Miculis
lithuanian               3.1.10       dgvirtual           Donatas Glodenis
marathi                  3.1.11       devakshay-official  Akshay Devrukhkar
norwegian                3.1.8        yhoiseth            Yngve Hoiseth
persian                  3.1.5        MSDehghan           Mohammad Sadegh
polish                   3.1.5        michalsn            Michał Śniatała
portuguese               3.1.6        j38600              Júlio Sebastião
portuguese-brazilian     3.1.11       mateusfbi           Mateus Brandão
romanian                 3.1.5        CodefishRo          Cristian Robert Chiribuc
russian                  3.1.5        vadimyer            Vadim Yermolin
serbian                  3.1.5        novakurosevic       Novak Urosevic ???
simplified-chinese       3.1.9        denghongcai         Deng HongCai
slovak                   3.1.5        gadelat             Gabriel Potkány
slovenian                3.1.5        andrejflorjancic    Andrej Florjančič
spanish                  3.1.5        Razican             Iban Eguia
swedish                  3.1.5        peterdenk           Peter Denk
tamil                    3.1.5        karthik-code        Karthikeyan
thai                     3.1.10       ?                   ?
traditional-chinese      3.1.5        appleboy            Bo-Yi Wu
turkish                  3.1.5        obozdag             Osman Bozdag
ukranian                 3.1.5        flybot              Sergiy Kosiy
urdu                     3.1.5        codeonion           Muhammad Ali
vietnamese               3.1.5        tinhphaistc         Trần Xuân Sâm ???
=======================  ===========  ==================  =========================

************
Requirements
************

These translations are intended for use with CodeIgniter 3.x.

*******
License
*******

These translations are licensed under the `MIT license <license.txt>`_.

************
Contributing
************

If you have a translation or correction, please fork the repository, clone it
locally, and then create a new branch (from develop)
for each set of related changes or for
a complete language pack. Once your branch is complete, *then* create a pull
request to merge it into the main repository. Remember to "sign" your commits.

Pull requests to the repository will only be considered if they come from
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.
If a maintainer is unresponsive

PR conversations should be conducted in English, thanks.

`Jim Parry <jim_parry@bcit.ca>`_
