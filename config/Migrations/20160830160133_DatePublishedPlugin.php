<?php
use Migrations\AbstractMigration;

class DatePublishedPlugin extends AbstractMigration
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
        $table = $this->table('date_publisheds');
        $table
            ->addPrimaryKey('id')
            ->addColumn('model', 'string')
            ->addColumn('foreign_key', 'integer')
            ->addColumn('begin_date', 'date')
            ->addColumn('end_date', 'date')
            ->create();
    }
}
