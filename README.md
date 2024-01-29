# DevCycle PHP Server SDK Example App

An example app built using the [DevCycle PHP Server SDK](https://docs.devcycle.com/sdk/server-side-sdks/php/)

## Requirements

PHP 7.3+
Composer

## Creating a Demo Feature
This example app requires that your project has a feature with the expected variables, as well as some simple targeting rules. 

#### ⇨ [Click here](https://app.devcycle.com/r/create?resource=feature&key=hello-togglebot) to automatically create the feature in your project ⇦

When you run the example app and switch your identity between users, you'll be able to see the feature's different variations.

## Installing Composer Locally
* `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `php composer-setup.php`
* `php -r "unlink('composer-setup.php');"`

## Running the Example
### Setup

* Run `php composer.phar install` (local install) or `composer install` (global install) in the project directory to install dependencies
* Create a `.env` file and set `DEVCYCLE_SERVER_SDK_KEY` to your Environment's SDK Key.\
You can find this under [Settings > Environments](https://app.devcycle.com/r/environments) on the DevCycle dashboard.
[Learn more about environments](https://docs.devcycle.com/essentials/environments).

### Development

`cd public && php -S localhost:8080`

Runs the app in the development mode. Requests may be sent to http://localhost:8080

## Documentation
For more information about using the DevCycle PHP Server SDK, see [the documentation](https://docs.devcycle.com/sdk/server-side-sdks/php/)
