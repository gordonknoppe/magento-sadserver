<?php

class Gk_Sadserver_Model_Formatter extends Zend_Log_Formatter_Simple
{
    /**
     * Formats data into a single line to be written by the writer.
     *
     * @param  array $event event data
     * @return string             formatted line to write to the log
     */
    public function format($event)
    {
        $event['message'] = '¯\_(ツ)_/¯';
        return parent::format($event);
    }
}