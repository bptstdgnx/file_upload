<?php
namespace Drupal\file_upload\Controller;
use Drupal\Core\Controller\ControllerBase;
class DownloadController extends ControllerBase {  /**
 * @param string $param
 * @return array
 */
    public function content($param = '') {
        /*NOTE: Cette fonction doit stocker en base de données dès qu'un tléchargement est effectué */
        $message = $this->t('Téléchargez le fichier uploadé ici.', [
        ]);
        return ['#markup' => $message];
        /*NOTE: Cette fonction doit stocker en base de données dès qu'un tléchargement est effectué */
    }
}