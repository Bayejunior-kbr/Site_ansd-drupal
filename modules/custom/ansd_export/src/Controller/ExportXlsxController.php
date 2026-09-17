<?php

namespace Drupal\ansd_export\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class ExportXlsxController extends ControllerBase {

  public function export(Request $request) {
    $httpKernel = \Drupal::service('http_kernel');
    $subRequest = Request::create('/donnees-recensements/export', 'GET', $request->query->all());
    $subRequest->cookies = $request->cookies;
    $subResponse = $httpKernel->handle($subRequest, HttpKernelInterface::SUB_REQUEST);

    if ($subResponse->getStatusCode() !== 200) {
      return new \Symfony\Component\HttpFoundation\Response(
        'Erreur : le CSV source a renvoyé le statut ' . $subResponse->getStatusCode(),
        500
      );
    }

    $content = $subResponse->getContent();
    if (stripos($content, '<html') !== FALSE) {
      return new \Symfony\Component\HttpFoundation\Response(
        'Erreur : réponse HTML reçue au lieu du CSV.',
        500
      );
    }

    $tmpFile = tempnam(sys_get_temp_dir(), 'ansd_export_') . '.csv';
    file_put_contents($tmpFile, $content);

    $reader = new CsvReader();
    $reader->setDelimiter(',');
    $reader->setInputEncoding('UTF-8');
    $spreadsheet = $reader->load($tmpFile);
    unlink($tmpFile);

    $sheet = $spreadsheet->getActiveSheet();

    // Ajuste automatiquement la largeur des colonnes.
    foreach ($sheet->getColumnIterator() as $column) {
      $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(TRUE);
    }

    // En-tête en gras avec fond bleu marine, texte blanc.
    $highestColumn = $sheet->getHighestColumn();
    $headerRange = 'A1:' . $highestColumn . '1';
    $sheet->getStyle($headerRange)->getFont()->setBold(TRUE)->getColor()->setRGB('FFFFFF');
    $sheet->getStyle($headerRange)->getFill()
      ->setFillType(Fill::FILL_SOLID)
      ->getStartColor()->setRGB('0A3D62');

    // Fige la ligne d'en-tête.
    $sheet->freezePane('A2');

    unlink($tmpFile === $tmpFile ? '' : $tmpFile); // no-op sécurité

    $writer = new XlsxWriter($spreadsheet);

    $response = new StreamedResponse(function () use ($writer) {
      $writer->save('php://output');
    });
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment; filename="repertoire-localites.xlsx"');
    return $response;
  }

}