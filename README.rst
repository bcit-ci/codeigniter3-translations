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

====================== ===========  ===============
Idiom                  User         Maintainer
====================== ===========  ===============
catalan                ?            Roger Bernaus
french                 includebeer  Alain Rivest
german                 Rufnex       Johannes Gamperl
italian                ster         Stefano Mazzega
norwegian              yhoiseth     Yngve Hoiseth
persian                MSDehghan    Mohammad Sadegh
polish                 michalsn     Michał Śniatała
portuguese-brazilian   mateusfbi    Mateus Brandao
romanian               Chiribuc     Cristian Robert Chiribuc
serbian                oldwizard    Bojan Egerić
spanish                Razican      Iban Eguia
swedish                peterdenk    Peter Denk
yodish                 jim-parry    Jim Parry
====================== ===========  ===============

Pull requests to the repository will only be considered if they come from 
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.

If you would like provide a translation, please send me an email, with
your name, github account, and a brief explanation of your suitability.

`Jim Parry <jim_parry@bcit.ca>`_
