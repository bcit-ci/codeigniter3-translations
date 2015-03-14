############################################
Translations for CodeIgniter System Messages
############################################

Note: In preparation for the 3.0 release, we have switched to a more proper branching model. 
    The *master* branch has been tagged for release, and all new changes or additions will be to the *develop* branch.

This project contains translations for the CodeIgniter 
system messages folder, **system/language/english**.

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

=======================  ===========  ==============  =========================
Idiom                    Status       User            Maintainer
=======================  ===========  ==============  =========================
arabic                   part         daif            Daif Alotaibi
bangla                   coming       ngangchill      ?
bulgarian                3.0          ivantcholakov   Ivan Tcholakov
catalan                  3.0          Ignasimg        Ignasi Molsosa
czech                    3.0          Ruplahlava      Štěpán Postránecký
dutch                    3.0          pkrul           Pieter Krul
filipino                 3.0          dzerium         Edzer Josh V. Padilla
french                   3.0          includebeer     Alain Rivest
german                   3.0          Rufnex          Johannes Gamperl
gujarti                  coming       sajid19991      ?
hungarian                3.0          orionstar       Lászlo Bóra
indonesian               3.0          ridho1991       Mutasim Ridlo
italian                  3.0          ster            Stefano Mazzega
japanese                 3.0          tsukasa         Tsukasa Takao
khmer                    3.0          Chanthoeun      Chanthoeun Kim
korean                   3.0          KwonLatte       HyeongJoo Kwon
norwegian                3.0          yhoiseth        Yngve Hoiseth
persian                  3.0          MSDehghan       Mohammad Sadegh
polish                   3.0          michalsn        Michał Śniatała
portugese                3.0          j38600          Júlio Sebastião
portugese-brazilian      3.0          mateusfbi       Mateus Brandão
romanian                 3.0          Chiribuc        Cristian Robert Chiribuc
russian                  3.0          vadimyer        Vadim Yermolin
simplified-chinese       3.0          denghongcai     Deng HongCai
slovak                   coming       muzikant        ?
spanish                  3.0          Razican         Iban Eguia
swedish                  3.0          peterdenk       Peter Denk
tamil                    3.0          karthik-code    Karthikeyan
thai                     3.0          karidoe         Anuchit Thiam-uan
traditional-chinese      3.0          appleboy        Bo-Yi Wu
turkish                  3.0          obozdag         Osman Bozdag
ukranian                 3.0          flybot          Sergiy Kosiy
=======================  ===========  ==============  =========================

************
Requirements
************

These translations are intended for use with CodeIgniter 3.0.

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

If you would like provide a translation, please send me an email, with
your name, github account, and a brief explanation of your suitability.

`Jim Parry <jim_parry@bcit.ca>`_
