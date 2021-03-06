<?php

class setComItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'setComItem';
    public $classKey = 'setComItem';
    public $languageTopics = ['setcom'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('setcom_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('setcom_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'setComItemCreateProcessor';