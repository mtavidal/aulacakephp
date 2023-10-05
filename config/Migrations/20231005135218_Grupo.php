<?php
use Migrations\AbstractMigration;

class Grupo extends AbstractMigration
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
        $tabela = $this->table('grupo');
        
        $tabela->addColumn('nome', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 50
        ]);
        $tabela->addColumn('descricao', 'text', [
            'default' => null,
            'null' => true
        ]);
        $tabela->addTimestamps('created', 'modified');
        $tabela->create();
    }
}
