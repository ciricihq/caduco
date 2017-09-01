<?php

use Phinx\Migration\AbstractMigration;

class FixCaducoIndex extends AbstractMigration
{
    public function change()
    {
        $this->table('caducities')
            ->addIndex(
                ['model', 'foreign_key'],
                ['name' => 'idx_plugin']
            )
            ->addIndex(
                ['begin_date', 'end_date'],
                ['name' => 'idx_dates']
            )
            ->addIndex(
                ['model', 'foreign_key', 'begin_date', 'end_date'],
                ['name' => 'idx_joins']
            )
            ->update()
        ;
    }
}
