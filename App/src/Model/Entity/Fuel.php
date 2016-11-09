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
 * @property \App\Model\Entity\Historicopreco[] $historicoprecos
 * @property \App\Model\Entity\Postofuel[] $postofuels
 * @property \App\Model\Entity\Veiculofuel[] $veiculofuels
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
