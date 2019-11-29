<?php

namespace App\Reporting\Formatter;

use App\Reporting\Report;

class XmlFormatter implements FormatterInterface
{

    public function format(Report $report): string
    {
        $contents = $report->getContents();
        return "
            <report>
                <p class='title'>Nom du rapport : {$contents['title']}</p>
                <date>Date du rapport : {$contents['date']}</date>
            </report>
        ";
    }
}