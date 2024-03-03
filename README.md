# Module Core for Magento 2

## How to install & upgrade Dvdam_Core

### 1. Install via composer (recommend)

We recommend you to install Dvdam_Core module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require dvdam/module-core
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
Run compile if your store in Product mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way.

- Download
- Extract `main.zip` file to `app/code/Dvdam/Core` ; You should create a folder path `app/code/Dvdam/Core` if not exist.
- Go to Magento root folder and run upgrade command line to install `Dvdam_Core`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
