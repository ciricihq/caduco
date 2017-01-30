<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Page Entity.
 */
class Page extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'parent_id' => true,
        'user_id' => true,
        'lft' => true,
        'rght' => true,
        'title' => true,
        'slug' => true,
        'text' => true,
        'deleted' => true,
        'deleted_date' => true,
        'visible' => true,
        'parent_page' => true,
        'user' => true,
        'child_pages' => true,
    ];
}
