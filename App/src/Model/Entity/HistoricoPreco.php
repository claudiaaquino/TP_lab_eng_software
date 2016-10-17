<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistoricoPreco Entity
 *
 * @property int $id
 * @property int $posto_id
 * @property int $fuel_id
 * @property float $preco_litro
 * @property \Cake\I18n\Time $dt_cadastro
 * @property int $status
 *
 * @property \App\Model\Entity\Posto $posto
 * @property \App\Model\Entity\Fuel $fuel
 * @property \App\Model\Entity\HistoricoAbastecimento[] $historico_abastecimentos
 */
class HistoricoPreco extends Entity
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
