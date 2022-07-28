<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class HomeController extends AbstractActionController
{

    public function indexAction()
    {
        $message = $this->params()->fromQuery('message', 'hello');
        return new ViewModel(['message' => $message]);
    }
}
