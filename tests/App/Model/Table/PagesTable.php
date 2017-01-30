<?php
namespace App\Model\Table;

use App\Model\Entity\Page;
use Cake\ORM\Table;

class PagesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('pages');
    }
}
