<h4><?= empty($nome) ? 'teste': $nome ?></h4>
<?php
    echo $this->html->nestedList([
        'Shippers' => $this->Html->link('Shippers', '/shippers', ['target'=>'_blank', 'class'=>'busca-teste']),
        'ShippersController' => $this->Html->link( 'Shippers Controller', ['controller' => 'shippers', 'action' => 'index']),
        'Busca' => $this->Html->link( 'Busca', ['controller' => 'shippers', 'action' => 'busca']),
        'Busca1' => $this->Html->link( 'Busca1', ['controller' => 'shippers', 'action' => 'busca1', "?"=> ['titulo' => 'cakephp'], "#" => 'top']),
        'Busca2' => $this->Html->link( 'Busca2', ['controller' => 'shippers', 'action' => 'busca2']),
        'Outros' => [
            'Google' => $this->Html->link('Busca', 'http://google.com'),
            'Microsoft' => $this->Html->link('Busca', 'http://microsoft.com', ['target'=>'_blank', 'class'=>'busca-teste']),
        ]
    ])
?>