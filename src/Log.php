<?php
namespace xreload;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class Log{
    public function info($a, $b = []){

        $log = new Logger('test');
        $log->pushHandler(new StreamHandler('var/log/trace.log'));

        $log->pushProcessor(function ($record) {
            $record['extra']['post'] = $_POST;
            return $record;
        });

        $log->info($a, $b);

    }
}
