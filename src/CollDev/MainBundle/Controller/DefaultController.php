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
        $baseURL = 'http://www.serpost.com.pe/';
        
        $urlEndpoint = 'calculaRC2/tarifaInternacional2.jsp';
        $urlMercaderias = 'calculaRC2/tarifaEms2.jsp';

        $interFirstClass = 'body div#result_tarifa table caption';
        $vigencia = 'div.informacion-servicio div';

        $client = new Client();
        $crawler = $client->request('GET', $baseURL . $urlMercaderias);
        $return = $crawler->filter($vigencia)->eq(0)->each(function (Crawler $node, $i) {
            preg_match('/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/', $node->text(), $matches);

            $baseActualizadaHasta = "08/07/2013";
            $return['update'] = false;
            if ($matches[0] > $baseActualizadaHasta) {
                $return['update'] = true;
                
            }
            $return['vigencia'] = $matches[0];
            
            return $return;
        });

        return array('message' => $return[0]);
    }
}
