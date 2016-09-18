## gettext-example
This small program shows the basics of using the GNU Project library gettext for supporting internationalization (i18n) in your applications. Please use gettext and do not reinvent the wheel.

Run this program by executing it from the command line:

    $ php gettext-example.php
    
## Troubleshooting

- "gettext system **doesn't work**"

If you just cloned this repository and it doesn't work, you have probably some problems about cache (server cache), so you should restart the server with this command (if you use nginx replace apache2 with nginx):


    $ sudo service apache2 restart

## FAQ

- ** How can I generate the files .PO /.POT/.MO from files PHP?**

You can use this command to generate the file .pot and from it you can use poedit to generate the file .po and .mo

    $ xgettext --from-code=UTF-8 -o messages.pot *.php

- ** I already generated a file.po but I added some strings to my file.php and I should update the file.po **

You can generate the file .po ever with the follow command:

    $ xgettext --from-code=UTF-8 -o messages.pot *.php

and you can **merge** the file.pot with your file.po with this command:

    $ msgmerge file.po file.pot

msgmerge can mess up some translations, so read the final file.po with **poedit**.

**PAY ATTENTION**: when you create a new file .po open it with poedit and save it to generate the file.mo

