<?php
namespace Drupal\file_upload\Plugin\Block;
use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;/**
 * Provides a file_upload block.
 *
 * @Block(
 *  id = "number_of_downloads",
 *  admin_label = @Translation("NumberOfDownloads")
 * )
 */
class NumberOfDownloads extends BlockBase implements ContainerFactoryPluginInterface {

    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
        );
    }  /**
 * {@inheritdoc}.
 */
    public function build() {
        $number= \Drupal::database()->select('sessions')
                                    ->countQuery()
                                    ->execute()
                                    ->fetchField();
        $build = [
            '#markup' => $this->t('The file has been downloaded %number times', ['%number' => $number]),
            '#cache' => [
                'keys' => ['numberofdownloads:block'],
             'max-age' => '5',
            'contexts' => ['user'],
            ],
        ];
        return $build;
    }}