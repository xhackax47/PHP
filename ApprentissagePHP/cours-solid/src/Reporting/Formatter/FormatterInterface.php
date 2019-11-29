<?php

namespace App\Reporting\Formatter;

use App\Reporting\Report;

interface FormatterInterface
{
    public function format(Report $report): string;
}