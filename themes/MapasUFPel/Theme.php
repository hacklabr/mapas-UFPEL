<?php
namespace MapasUFPel;

use MapasCulturais\App;


// class Theme extends \Subsite\Theme {
class Theme extends \MapasCulturais\Themes\BaseV2\Theme {
 
    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();

        $app = App::i();

        $app->hook('app.init:after', function() use ($app) {
           $this->config['report.agent'][] = "comunidadesTradicional";
           $this->config['report.agent'][] = "pessoaDeficiente";
        });

         // Manifest do five icon
        $app->hook('GET(site.webmanifest)', function() use ($app) {
            /** @var \MapasCulturais\Controller $this */
            $this->json([
                'icons' => [
                    [ 'src' => $app->view->asset('img/favicon-192x192.png', false), 'type' => 'image/png', 'sizes' => '192x192' ],
                    [ 'src' => $app->view->asset('img/favicon-515x515.png', false), 'type' => 'image/png', 'sizes' => '512x512' ],
                ],
            ]);
        });

        $this->enqueueStyle("app-v2", "logo-footer", "css/logo-footer.css");
        $app->hook("template(<<*>>.<<*>>.main-footer-links):after", function(){
            $this->part("logo-footer");
        });
    }

    // protected function _publishAssets() {

    //     // $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);

    //     // $this->enqueueScript('app', 'hide-fields', 'js/hide-fields.js');
    // }
}