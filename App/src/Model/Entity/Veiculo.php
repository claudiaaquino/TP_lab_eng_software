<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $modelo_id
 * @property int $ano
 * @property string $placa
 * @property \Cake\I18n\Time $dt_cadastro
 * @property \Cake\I18n\Time $dt_modificado
 * @property int $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Modelo $modelo
 * @property \App\Model\Entity\Historicoabastecimento[] $historicoabastecimentos
 * @property \App\Model\Entity\Veiculofuel[] $veiculofuels
 */
class Veiculo extends Entity
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
