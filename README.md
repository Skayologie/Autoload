#  Autoloading & Namespace

`@LiveCoding`
`@Jawad Boulmal`
`@Youcode`

## Overview
This repo demonstrates the use of both Composer's autoloading and a basic manual autoloading system. The code utilizes namespaces and aliasing to avoid conflicts between classes with the same name.

## Requirements
- Composer installed globally

## Installation
1. Clone this repository or download the source code.
2. Navigate to the project directory using the terminal.
3. Run the following command to generate the Composer autoload file:

```bash
composer dump-autoload
```

This command will generate the `vendor/autoload.php` file, which is essential for the project to work.

## Usage
The project contains three main components:
- `Person` class in the `App\Control` namespace.
- `Person` class in the `App\Module` namespace, used with an alias `PersonInformations`.
- `Voiture` class in the `App\Module` namespace.

### Running the Code
After generating the autoload file, run the script using the PHP command:

```bash
php index.php
```
Or Run it From The Browser Using Local Server ...

## Manual Autoloading Option
If you prefer to use a basic manual autoloading mechanism instead of Composer, uncomment the following lines in the code:

```php
require './Manually_Autoload.php'; // This is our basic manual autoload
Autoload::register();
```

Ensure that `Manually_Autoload.php` is correctly implemented to handle your project's file structure.


###### _Live Coding 12/30/2024 - By Jawad Boulmal_