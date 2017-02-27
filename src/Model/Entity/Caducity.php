<?php
namespace Cirici\Caduco\Model\Entity;

use Cake\ORM\Entity;

/**
 * Caducity Entity
 *
 * @property int $id
 * @property string $model
 * @property int $foreign_key
 * @property \Cake\I18n\Time $begin_date
 * @property \Cake\I18n\Time $end_date
 *
 * @property \Cirici\Caduco\Model\Entity\Phinxlog[] $phinxlog
 */
class Caducity extends Entity
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
