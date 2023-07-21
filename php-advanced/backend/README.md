# Design Patern Model-View-Controller PHP Backend

## Basic architecture

**DP MVC PHP with homemade framework**.

- app
    - controllers
        - HomeController.php
        - UserController.php
        - ...
    - models *
        - UserModel.php *
        - ProductModel.php *
        - ...
    - views
        - home
            - index.php
            - about.php
            - ...
        - user
            - profile.php
            - edit.php
            - ...
        - ...
    - templates
        - header.php
        - footer.php
        - ...
- public
    - css
        - styles.css
        - ...
    - js
        - script.js
        - ...
    - index.php
    - ...
- config
    - config.ini
    - init.php
    - Db.php
- core
    - Router.php *
    - ...
- includes
    - header.php
    - footer.php
    - ...
- .htaccess

---

## Files & Roles

- index.php

### Main file of app

- Controller.php

- ModelStatistics.php

- InterfaceModule.php

- Router.php

### Display data

To display data into browser :

- app/includes/tools/Template.class.php

Treats data before render & and display into browser :

- app/statistics/InterfaceModule.php

Display data

- app/public/views/statistics/stat_graphs.php

- app/public/theme/lib/plugins/stat_graphs/stat_graphs.js

### Request MySQL

- Controller.php

- ModelStatistics.php

- ORM ( Object - Relationnal - Mapping )

- Builder (It's a filter. Manage ORM & define type data and fields for db)