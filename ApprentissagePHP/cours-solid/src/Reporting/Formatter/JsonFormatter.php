<?php

namespace App\Reporting\Formatter;

use App\Reporting\Report;

class JsonFormatter implements FormatterInterface
{
    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     * @return string
     */
    public function format(Report $report): string
    {
        return json_encode($report->getContents());
    }
}