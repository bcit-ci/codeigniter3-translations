############################################
Translations for CodeIgniter System Messages
############################################

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

************
Requirements
************

These translations are intended for use with CodeIgniter 3.0.

*******
License
*******

These translations are licensed under the `MIT license <license.txt>`_.

**********************
Repository Information
**********************

Each language is maintained by a community member, per the table below:

=======================  ===========  ==============  =========================
Idiom                    Status       User            Maintainer
=======================  ===========  ==============  =========================
arabic                   coming       Ihabafia        Ihab Abou Afia
bulgarian                done         ivantcholakov   Ivan Tcholakov
catalan                  coming       rogervila       Roger Vilà
czech                    done         Ruplahlava      Štěpán Postránecký
dutch                    done         pkrul           Pieter Krul
french                   done         includebeer     Alain Rivest
german                   done         Rufnex          Johannes Gamperl
italian                  done         ster            Stefano Mazzega
malaysian                coming       hafizhassan     Muhamad Hafizuddin
norwegian                done         yhoiseth        Yngve Hoiseth
persian                  coming       MSDehghan       Mohammad Sadegh
polish                   done         michalsn        Michał Śniatała
portugese                done         j38600          Júlio Sebastião
portugese-brazilian      done         mateusfbi       Mateus Brandão
romanian                 done         Chiribuc        Cristian Robert Chiribuc
russian                  coming       vadimyer        Vadim Yermolin
serbian                  coming       oldwizard       Bojan Egerić
simplified-chinese       done         denghongcai     Deng HongCai
spanish                  done         Razican         Iban Eguia
swedish                  done         peterdenk       Peter Denk
thai                     done         karidoe         Anuchit Thiam-uan
traditional-chinese      done         PeterDaveHello  Peter Dave Hello
vietnamese               coming       depchuanseo     Oliver Sieu
yodish                   done         jim-parry       Jim Parry
=======================  ===========  ==============  =========================


Pull requests to the repository will only be considered if they come from 
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.

If you would like provide a translation, please send me an email, with
your name, github account, and a brief explanation of your suitability.

`Jim Parry <jim_parry@bcit.ca>`_