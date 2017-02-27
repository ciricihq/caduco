<?php
use Migrations\AbstractMigration;

class CaducoInitialization extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('caducities');
        $table
            ->addPrimaryKey('id')
            ->addColumn('model', 'string')
            ->addColumn('foreign_key', 'integer')
            ->addColumn('begin_date', 'date', [
                'default' => null,
                'null'    => true
            ])
            ->addColumn('end_date', 'date', [
                'default' => null,
                'null'    => true
            ])
            ->create();
    }
}
