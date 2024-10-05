![Screenshot](https://raw.githubusercontent.com/tomatophp/console-helpers/blob/master/art/screenshot.png)

# Laravel Console Helpers

[![Latest Stable Version](https://poser.pugx.org/tomatophp/console-helpers/version.svg)](https://packagist.org/packages/tomatophp/console-helpers)
[![License](https://poser.pugx.org/tomatophp/console-helpers/license.svg)](https://packagist.org/packages/tomatophp/console-helpers)
[![Downloads](https://poser.pugx.org/tomatophp/console-helpers/d/total.svg)](https://packagist.org/packages/tomatophp/console-helpers)

tons of helper you need for you artisan command line application

## Installation

```bash
composer require tomatophp/console-helpers
```


## Usage

we have Traits that you can use in your artisan command class

### Run PHP Command

you can run direct php command like this

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
    
    public function handle(){
       $this->phpCommand('echo "welcome";');
    }
}

```


## Run Yarn Command

you can run direct yarn commands like this

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
    
    public function handle(){
       $this->yarnCommand('echo "welcome";');
    }
}

```

**NOTE:** you can update the yarn path from the config file.

## Run Artisan Command

you can direct run the artisan command by using this method

```php
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class MyCommand extends Command{
    use RunCommand;
    
    public function handle(){
       $this->artisanCommand('migrate');
    }
}
```

## Handle Stubs File Template

you can handle stubs file templates and copy change or add new data by using this method

```php
use TomatoPHP\ConsoleHelpers\Traits\HandleStub;

class MyCommand extends Command{
    use HandleStub;
    
    public function handle(){
        $this->generateStubs(
            from: __DIR__ . "/stubs/SettingsClass.stub",
            to: "Modules/Base/Settings/MainSettings.php",
            replacements: [
                "settingName" => "site_url",
                "moduleName" => "Base",
                "settingField" => Str::lower("site_url")
            ],
            directory: [
                "Modules/Base/Settings/"
            ],
            append: false
        );
    }
}
```


## Handel Modules Actions

this command is working with laravel-modules you can activate all modules or stop all modules or actively selected modules by this method

```php
use TomatoPHP\ConsoleHelpers\Traits\HandleModules;

class MyCommand extends Command{
    use HandleModules;
    
    public function handle(){
        $this->activeAllModules();
        $this->stopAllModules();
    }
}
```

this method takes 2 parameters first is the module name and the second is the active/stop bool by default is true

```php
$this->activeModule("Base");
```


## Other Filament Packages

Checkout our [Awesome TomatoPHP](https://github.com/tomatophp/awesome)
