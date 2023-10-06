<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContatoForm;

/**
 * Contato Controller
 *
 *
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $contato = new ContatoForm();

        //tratamento post
        if ($this->request->is('post')){
            $data = $this->request->getData();
            if($contato->execute($data)){
                $this->Flash->success('Mensagem enviada com sucesso!');
            } else{
                $this->Flash->error('Ocorreu um erro ao enviar.');
            }
        }

       $this->set('contato', $contato);
    }

}
