<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
        db.php
      controllers/        contains Web controller classes
        RoleController.php
        UserController.php
      mail/               contains view files for e-mails
      models/             contains model classes
        Role.php
        User.php
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
        role/index.php
        user/index.php
      web/                contains the entry script and Web resources


INSTALLATION AND RUN
-------------------
1. Clone this repository ```git clone git@github.com:syauqifut/tugas_personal2_data.git```
2. Change directory to installation folder ```cd tugas_personal2_data```
3. Install Composer ```composer install```
4. Run by command ```php yii serve```


ACCESS THE URL
-------------------
index user ```http://localhost:8080/index.php?r=user%2Findex```

index role ```http://localhost:8080/index.php?r=role%2Findex```