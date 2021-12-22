<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FormationDossierStagiaire extends \App\Entity\FormationDossierStagiaire implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dossier', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idbDossier', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'stagiaire', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idbStagiaire', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'statutRst'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dossier', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idbDossier', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'stagiaire', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idbStagiaire', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\FormationDossierStagiaire' . "\0" . 'statutRst'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FormationDossierStagiaire $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdb', []);

        return parent::getIdb();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdb(?int $idb): \App\Entity\FormationDossierStagiaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdb', [$idb]);

        return parent::setIdb($idb);
    }

    /**
     * {@inheritDoc}
     */
    public function getDossier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDossier', []);

        return parent::getDossier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDossier($dossier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDossier', [$dossier]);

        return parent::setDossier($dossier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbDossier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbDossier', []);

        return parent::getIdbDossier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbDossier($idbDossier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbDossier', [$idbDossier]);

        return parent::setIdbDossier($idbDossier);
    }

    /**
     * {@inheritDoc}
     */
    public function getStagiaire(): ?\App\Entity\Contact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStagiaire', []);

        return parent::getStagiaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setStagiaire(?\App\Entity\Contact $idStagiaire): \App\Entity\FormationDossierStagiaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStagiaire', [$idStagiaire]);

        return parent::setStagiaire($idStagiaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbStagiaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbStagiaire', []);

        return parent::getIdbStagiaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbStagiaire($idbStagiaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbStagiaire', [$idbStagiaire]);

        return parent::setIdbStagiaire($idbStagiaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', []);

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd($dateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', [$dateAdd]);

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserAdd', []);

        return parent::getIdUserAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserAdd($idUserAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserAdd', [$idUserAdd]);

        return parent::setIdUserAdd($idUserAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateMaj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateMaj', []);

        return parent::getDateMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateMaj($dateMaj)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateMaj', [$dateMaj]);

        return parent::setDateMaj($dateMaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserMaj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserMaj', []);

        return parent::getIdUserMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserMaj($idUserMaj)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserMaj', [$idUserMaj]);

        return parent::setIdUserMaj($idUserMaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutRst()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutRst', []);

        return parent::getStatutRst();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutRst($statutRst)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutRst', [$statutRst]);

        return parent::setStatutRst($statutRst);
    }

}
