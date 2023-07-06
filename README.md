# DOPTOR DATA DPG

This guide provides step-by-step instructions for installing the PHP application. Please follow the instructions below to get started.



## Prerequisites

Before proceeding with the installation, make sure you have the following software installed on your system:

- PHP (version 7.4 or higher)
- Composer

## Installation Steps

1. Clone the repository:

   ```shell
   git clone <repository_url>
   ```
2. Change to the doptor-api-data-dpg/config directory:

   ```shell
   cd doptor-api-data-dpg/config
   ```
3. Create a copy of the app.example.php file and name it app.php:

   ```shell
   cp app.example.php app.php
   ```
4. Edit `oisf_dynamic_conf.php` and set the domain of the application in `APP_URL` like below:

   ```shell
   define('APP_URL', 'https://dpgdata.doptor.gov.bd/');
   ```

4. Go back to the root directory of the application:

   ```shell
   cd ../
   ```
5. Install the required dependencies using Composer:

   ```shell
   composer install
   ```
6. Open the ```config/app.php``` file and update the MySQL configuration with your database credentials and save the file.

## Thank You

We appreciate your support and hope you find our DOPTOR DATA DPG.

Best regards,

[Tappware Team](https://tappware.com/)
