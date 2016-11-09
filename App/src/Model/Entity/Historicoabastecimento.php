<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Historicoabastecimento Entity
 *
 * @property int $id
 * @property int $veiculo_id
 * @property int $historicopreco_id
 * @property float $litros
 * @property float $valor_total
 * @property int $km_atual
 * @property float $consumo_ult_abastecimento
 * @property int $avaliacao_posto
 * @property \Cake\I18n\Time $dt_abastecimento
 * @property int $status
 *
 * @property \App\Model\Entity\Veiculo $veiculo
 * @property \App\Model\Entity\Historicopreco $historicopreco
 */
class Historicoabastecimento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
