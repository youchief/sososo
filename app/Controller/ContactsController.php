<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends AppController {



    public function index() {
        if ($this->request->is('post')) {
            $this->Contact->create();
            $this->Contact->set($this->request->data);
            if ($this->Contact->validates()) {
                $Email = new CakeEmail();
                $Email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['lastname']." ".$this->request->data['Contact']['firstname']));
                $Email->to('communication@sososomagazine.com');
                $Email->subject($this->request->data['Contact']['subjet']);
                $Email->send($this->request->data['Contact']['message']);
                $this->Session->setFlash(__('Thank you !'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
            }
        }
    }

}