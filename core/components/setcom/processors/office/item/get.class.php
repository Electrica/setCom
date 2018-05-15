<?php

class setComOfficeItemGetProcessor extends modObjectGetProcessor
{
    public $objectType = 'setComItem';
    public $classKey = 'setComItem';
    public $languageTopics = ['setcom:default'];
    //public $permission = 'view';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }

}

return 'setComOfficeItemGetProcessor';