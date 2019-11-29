<?php

namespace App\Controller;

use App\Reporting\Formatter\HtmlFormatter;
use App\Reporting\Formatter\JsonFormatter;
use App\Reporting\Report;

class ReportCreatorController
{
    public function show()
    {
        require_once(TEMPLATES_DIR . 'report-creator/show.html.php');
    }

    public function execute()
    {
        // Extraction des données, on fait au plus simple / rapide mais ce serait à revoir
        $date = $_POST['date'];
        $title = $_POST['title'];
        $data = $_POST['data'];
        $format = $_POST['format'];

        // Début de l'algorithme
        $report = new Report($date, $title, $data);
        $htmlFormatter = new HtmlFormatter();
        $jsonFormatter = new JsonFormatter();

        if ($format === "html") {
            $reportResult = $htmlFormatter->format($report);
        } else {
            $reportResult = $jsonFormatter->format($report);
        }

        require_once(TEMPLATES_DIR . 'report-creator/result.html.php');
    }
}
