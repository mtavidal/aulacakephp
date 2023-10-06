<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

/**
 * Contato Form.
 */
class ContatoForm extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema)
    {
        $schema->addField('email', 'string');
        $schema->addField('assunto', 'string');
        $schema->addField('body', 'text');
        return $schema;
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        $validator->email('email', 'Deve ser fornecido um email válido')
            ->maxLength('email', 255)
            ->requirePresence('email','Campo email necessário');

        $validator->scalar('assunto')
            ->maxLength('assunto', 255)
            ->notEmpty('assunto', 'Campo assunto necessário');

        $validator->scalar('body')
            ->minLength('body', 10)
            ->notEmpty('body', 'Campo mensagem necessário');

        return $validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array $data Form data.
     * @return bool
     */
    protected function _execute(array $data)
    {
        //salvar no banco ou enviar email
        return true;
    }
}
