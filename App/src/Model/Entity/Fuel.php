<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fuel Entity
 *
 * @property int $id
 * @property string $descricao
 * @property \Cake\I18n\Time $dt_cadastro
 * @property \Cake\I18n\Time $dt_modificado
 * @property int $status
 *
 * @property \App\Model\Entity\HistoricoPreco[] $historico_precos
 * @property \App\Model\Entity\PostoFuel[] $posto_fuels
 * @property \App\Model\Entity\VeiculoFuel[] $veiculo_fuels
 */
class Fuel extends Entity
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