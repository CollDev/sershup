<?php

namespace CollDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $return = $this->checkValidation();
        if ($return[0]['validity'] == true) {
            $this->updateShipping();
        }
        
        return array('message' => $return[0]);
    }
    
    /**
     * Check prices validity from Serpost webpage.
     */
    private function checkValidation()
    {
        $baseURL = $this->container->getParameter("serpost_url");
        
        $tarifaInternacional = $this->container->getParameter("serpost_tarifaInt");
        $tarifaMercaderias = $this->container->getParameter("serpost_tarifaMerc");

        $interSecondClassValidity = $this->container->getParameter("serpost_interSecondClassValidity");

        $client = new Client();
        $crawler = $client->request('GET', $baseURL . $tarifaInternacional);
        $return = $crawler->filter($interSecondClassValidity)->eq(0)->each(function (Crawler $node, $i) {
            preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $node->text(), $matches);

            $baseActualizadaHasta = "08/07/2013";//@TODO request from database
            
            $return['validity'] = '';
            $return['update'] = false;
            if (!empty($matches) && ($matches[0] > $baseActualizadaHasta)) {
                $return['update'] = true;
                $return['validity'] = $matches[0];
            }
            return $return;
        });
        
        return $return;
    }
    
    /**
     * Updates shipping from Serpost webpage
     */
    private function updateShipping()
    {
        //@TODO web scraping
        return array();
    }
}
