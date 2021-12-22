<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FormationSuiviOrdredemission extends \App\Entity\FormationSuiviOrdredemission implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'id', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'idFormation', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'recepfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'moisfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'heurefait', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'heurerestant', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'datefac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'numfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'montantht', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'dateValidation'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'id', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'idFormation', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'recepfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'moisfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'heurefait', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'heurerestant', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'datefac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'numfac', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'montantht', '' . "\0" . 'App\\Entity\\FormationSuiviOrdredemission' . "\0" . 'dateValidation'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FormationSuiviOrdredemission $proxy) {
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
    public function getIdFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFormation', []);

        return parent::getIdFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdFormation($idFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdFormation', [$idFormation]);

        return parent::setIdFormation($idFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoisfac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoisfac', []);

        return parent::getMoisfac();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoisfac($moisfac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoisfac', [$moisfac]);

        return parent::setMoisfac($moisfac);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecepfac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecepfac', []);

        return parent::getRecepfac();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecepfac($recepfac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecepfac', [$recepfac]);

        return parent::setRecepfac($recepfac);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeurefait()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeurefait', []);

        return parent::getHeurefait();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeurefait($heurefait)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeurefait', [$heurefait]);

        return parent::setHeurefait($heurefait);
    }

    /**
     * {@inheritDoc}
     */
    public function setHeurerestant($heurerestant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeurerestant', [$heurerestant]);

        return parent::setHeurerestant($heurerestant);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeurerestant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeurerestant', []);

        return parent::getHeurerestant();
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefac', []);

        return parent::getDatefac();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefac($datefac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefac', [$datefac]);

        return parent::setDatefac($datefac);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumfac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumfac', []);

        return parent::getNumfac();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumfac($numfac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumfac', [$numfac]);

        return parent::setNumfac($numfac);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantht()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantht', []);

        return parent::getMontantht();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantht($montantht)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantht', [$montantht]);

        return parent::setMontantht($montantht);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateValidation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateValidation', []);

        return parent::getDateValidation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateValidation($dateValidation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateValidation', [$dateValidation]);

        return parent::setDateValidation($dateValidation);
    }

}
