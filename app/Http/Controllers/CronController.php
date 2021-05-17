<?php

namespace App\Http\Controllers;

use Ifsnop\Mysqldump\Mysqldump as IMysqldump;
use Spatie\DbDumper\Databases\MySql as SMysqldump;
use Rah\Danpu\Dump as RDump;
use Rah\Danpu\Export as RExport;
use Illuminate\Http\Request;

class CronController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dbbackup(Request $request)
    {
        //
        ini_set('memory_limit', '256M');
        set_time_limit(0);
        ignore_user_abort(true);

        //
        $dbHost = env('DB_HOST', '127.0.0.1');
        $dbName = env('DB_DATABASE', 'forge');
        $dbUser = env('DB_USERNAME', 'forge');
        $dbPassword = env('DB_PASSWORD', '');

        //
        $path = public_path('backups/' . $dbName . '_' . date('YmdHis') . '.sql');

        //
        $error = true;
        $message = '';

        if ($request->has('library')) {
            switch ($request->query('library')) {
                case 'ifsnop':

                    try {
                        $dump = new IMysqldump('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPassword);
                        $dump->start($path);

                        $error = false;
                        $message = 'ifsnop';
                    } catch (\Exception $e) {
                        $message = $e->getMessage();
                    }

                    break;

                case 'spatie':

                    try {
                        SMysqldump::create()
                            ->setDbName($dbName)
                            ->setUserName($dbUser)
                            ->setPassword($dbPassword)
                            ->dumpToFile($path);

                        $error = false;
                        $message = 'spatie';
                    } catch (\Exception $e) {
                        $message = $e->getMessage();
                    }

                    break;

                case 'rah':

                    try {
                        $dump = new RDump;
                        $dump->file($path)
                            ->dsn('mysql:host=' . $dbHost . ';dbname=' . $dbName)
                            ->user($dbUser)
                            ->pass($dbPassword);

                        new RExport($dump);

                        $error = false;
                        $message = 'rah';
                    } catch (\Exception $e) {
                        $message = $e->getMessage();
                    }

                    break;

                default:
                    # code...
                    break;
            }
        }

        if ($error == false) {
            $this->_autoRemovedDBBackupFiles();
        }

        return json_encode(['error' => $error, 'message' => $message]);
    }

    private function _autoRemovedDBBackupFiles()
    {
        /*$files = glob(public_path('backups/*.sql'));    //GLOB_NOSORT

        if (count($files) >= 4) {

            unlink($files[0]);
            unlink($files[1]);
        }*/
    }
}
