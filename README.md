# yocto CMS

yocto CMS is a minimal flat file CMS. All content is stored in a single text file using JSON. There is nothing more to it. It comes with a password protected admin interface. There is no page tree, no users, no file uploads.

## Name
I needed something wich means "really small". Yocto is the smallest offical SI prefix, hence the name.

## How to use yocto

To use content from yocto, you have to include `yocto.php`. To insert content in your pages, use `<?= t('fieldname') ?>`. That's it.

```
<?php
    require_once('yocto.php');
?>
<!DOCTYPE html>
    <body>
        <h1><?= t('title') ?></h1>
    </body>
</html>
```

## Admin / Backend

If you want to change your content, just go to `/admin.php`, make your changes, enter the password and save them.

## Author

* Simon Aebersold <s.aebersold at gmail.com>
* https://aebersold.me/

## License

Copyright (C) 2015 Simon Aebersold

hipsterbrowser is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

hipsterbrowser is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with hipsterbrowser. If not, see http://www.gnu.org/licenses/.
