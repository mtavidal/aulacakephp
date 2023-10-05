<?php
use Migrations\AbstractMigration;

class User extends AbstractMigration
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
        $tabela = $this->table('user');
        
        $tabela->addColumn('foto', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255
        ]);
    
        $tabela->update();
    }
}
