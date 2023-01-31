![Screenshot](./art/screenshot.png)

# Laravel Console Helpers

tons of helper you need for you artisan command line application

## Installation

```bash
composer require tomatophp/console-helpers
```

## Usage

we have a Traits that you can use in your artisan command class

### Run PHP Command

you can run direct php command like this

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
}
```

```php
$this->phpCommand('echo "welcome";');
```

### Run Yarn Command

you can run direct yarn command like this

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
}
```

```php
$this->yarnCommand('echo "welcome";');
```
**NOTE**

you can update yarn path from config file.

## Run Artisan Command

you can direct run artisan command by using this method

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
}
```

```php
$this->artisanCommand('migrate');
```
### Handle Stubs File Template

you can handle stubs file template and copy change or add new data by using this method

```php
use TomatoPHP\ConsoleHelpers\Traits\HandleStubs;

class MyCommand extends Command{
    use HandleStubs;
}
```

```php
$this->generateStubs(
    __DIR__ . "/stubs/SettingsClass.stub",
    "Modules/Base/Settings/MainSettings.php",
    [
        "settingName" => "site_url",
        "moduleName" => "Base",
        "settingField" => Str::lower("site_url")
    ],
    [
        "Modules/Base/Settings/"
    ]
);
```

### Handel Modules Actions

this command is working with [laravel-modules](https://nwidart.com/laravel-modules/v6/introduction) you can active all modules or stop all modules or active selected module by this methods

```php
use TomatoPHP\ConsoleHelpers\Traits\HandleModules;

class MyCommand extends Command{
    use HandleModules;
}
```

```php
$this->activeAllModules();
```

```php
$this->stopAllModules();
```

this method take 2 parameter first is module name and second is active/stop bool by default is true

```php
$this->activeModule("Base");
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fady Mondy](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

