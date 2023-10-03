<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\ORM\TableRegistry;

/**
 * MeuTeste Controller
 *
 *
 * @method \App\Model\Entity\MeuTeste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeuTesteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->autoRender = false;
        // $query = $this->request->getquery();
        // echo ("Meu nome é $query[nome]");
        $this->loadModel('Shippers');
        $shippers = $this->Shippers->find('all')
            ->toArray();
        debug($shippers);
    }
    public function view($id = null)
    {
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shipper = $this->Shippers->get($id);
        debug($shipper);
    }
    public function add($id = null)
    {
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
        $shipper = $tableShippers->get($id);
        debug($shipper);
    }

}
