<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Collaborateur extends \App\Entity\Collaborateur implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'nomPrenom', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'initiales', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'statut'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'nomPrenom', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'initiales', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Collaborateur' . "\0" . 'statut'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Collaborateur $proxy) {
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
    public function getId(): int
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
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdb(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdb', []);

        return parent::getIdb();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdb(int $idb): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdb', [$idb]);

        parent::setIdb($idb);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomPrenom', []);

        return parent::getNomPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomPrenom(?string $nomPrenom): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomPrenom', [$nomPrenom]);

        parent::setNomPrenom($nomPrenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitiales(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitiales', []);

        return parent::getInitiales();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitiales(?string $initiales): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitiales', [$initiales]);

        parent::setInitiales($initiales);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdContact(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdContact', []);

        return parent::getIdContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdContact(?int $idContact): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdContact', [$idContact]);

        parent::setIdContact($idContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbContact(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbContact', []);

        return parent::getIdbContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbContact(?int $idbContact): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbContact', [$idbContact]);

        parent::setIdbContact($idbContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser(?int $idUser): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$idUser]);

        parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(int $statut): \App\Entity\Collaborateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

}
