# yocto CMS

yocto is a minimal flat file CMS written in PHP. All content is stored in a single text file using JSON. There is nothing more to it. It comes with a password protected admin interface. There is no page tree, no users, no file uploads.

yocto was created for very small sites where a fully featured CMS would be overkill but where the content has to be editable to some degree. yocto is user friendly enough, so that a non-technical person can change some content without breaking anything.

I needed something wich means "really small". Yocto is the smallest offical SI prefix, hence the name.

## How to use yocto

Check out index.php, it should be self-explanatory.

To get started with yocto, include `yocto.php` in all pages you need dynamic content. To insert a content block in your pages, use `<?= t('fieldname') ?>`. That's it.

```php
<?php
    require_once('yocto.php');
?>
<!DOCTYPE html>
    <body>
        <h1><?= y('title') ?></h1>
    </body>
</html>
```

### Change content

![yocto Admin](/admin.jpg)

If you want to change your content, just point your browser to `/admin.php`, make your changes, enter the password and save them. If you need a new field, add it to the JSON manually (this feature might be added later on).

The file `content.json` needs to be writable to save changes.

### Author

* Simon Aebersold <s.aebersold at gmail.com>
* https://aebersold.me/

### License

Copyright (C) 2015 Simon Aebersold

yocto CMS is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

yocto CMS is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with yocto CMS. If not, see http://www.gnu.org/licenses/.
