<?php

namespace App\Shell;

use App\Controller\MigrationProcessController;
use Cake\Console\Shell;

class SignTransferShell extends Shell
{
    public function main()
    {
        (new MigrationProcessController())->fireSignatureMigration();
    }
}