<div style="padding: 15px">
    <h1><?= __('Formulário Contato') ?></h1>
    <?php
    echo $this->Form->create($contato, ['type'=>'file']);
    
    echo $this->Form->control('email');

    echo $this->Form->control('assunto');
    echo $this->Form->control('body', ['label'=>'Mensagem']);

    echo $this->Form->submit('Enviar');

    echo $this->Form->end();
    ?>

</div>