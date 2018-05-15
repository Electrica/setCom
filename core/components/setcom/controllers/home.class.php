<?php

/**
 * The home manager controller for setCom.
 *
 */
class setComHomeManagerController extends modExtraManagerController
{
    /** @var setCom $setCom */
    public $setCom;


    /**
     *
     */
    public function initialize()
    {
        $this->setCom = $this->modx->getService('setCom', 'setCom', MODX_CORE_PATH . 'components/setcom/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['setcom:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('setcom');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->setCom->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/setcom.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->setCom->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        setCom.config = ' . json_encode($this->setCom->config) . ';
        setCom.config.connector_url = "' . $this->setCom->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "setcom-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="setcom-panel-home-div"></div>';

        return '';
    }
}