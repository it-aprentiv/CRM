<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Adresse extends \App\Entity\Adresse implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'compAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idVille', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbVille', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idRegion', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbRegion', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idPays', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbPays', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idTypeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbTypeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'remarque', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'principal', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'statutRst', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'adressRank', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'typeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idTableContact'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'compAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idVille', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbVille', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idRegion', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbRegion', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idPays', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbPays', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idTypeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idbTypeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'remarque', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'principal', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'statutRst', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'adressRank', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'typeAdresse', '' . "\0" . 'App\\Entity\\Adresse' . "\0" . 'idTableContact'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Adresse $proxy) {
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
    public function getIdb(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdb', []);

        return parent::getIdb();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdb(?int $idb): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdb', [$idb]);

        parent::setIdb($idb);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdContact(): ?\App\Entity\Contact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdContact', []);

        return parent::getIdContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdContact(?\App\Entity\Contact $idContact): void
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
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompAdresse', []);

        return parent::getCompAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompAdresse(?string $compAdresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompAdresse', [$compAdresse]);

        parent::setCompAdresse($compAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVille(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVille', []);

        return parent::getIdVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVille(?int $idVille): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVille', [$idVille]);

        parent::setIdVille($idVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbVille(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbVille', []);

        return parent::getIdbVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbVille(?int $idbVille): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbVille', [$idbVille]);

        parent::setIdbVille($idbVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(?string $codePostal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRegion(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRegion', []);

        return parent::getIdRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRegion(?int $idRegion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRegion', [$idRegion]);

        parent::setIdRegion($idRegion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbRegion(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbRegion', []);

        return parent::getIdbRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbRegion(?int $idbRegion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbRegion', [$idbRegion]);

        parent::setIdbRegion($idbRegion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPays(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPays', []);

        return parent::getIdPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPays(?int $idPays): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPays', [$idPays]);

        parent::setIdPays($idPays);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbPays(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbPays', []);

        return parent::getIdbPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbPays(?int $idbPays): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbPays', [$idbPays]);

        parent::setIdbPays($idbPays);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTypeAdresse(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTypeAdresse', []);

        return parent::getIdTypeAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTypeAdresse(?int $idTypeAdresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTypeAdresse', [$idTypeAdresse]);

        parent::setIdTypeAdresse($idTypeAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbTypeAdresse(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbTypeAdresse', []);

        return parent::getIdbTypeAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbTypeAdresse(?int $idbTypeAdresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbTypeAdresse', [$idbTypeAdresse]);

        parent::setIdbTypeAdresse($idbTypeAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemarque(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemarque', []);

        return parent::getRemarque();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemarque(?string $remarque): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemarque', [$remarque]);

        parent::setRemarque($remarque);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrincipal(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrincipal', []);

        return parent::getPrincipal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrincipal(?string $principal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrincipal', [$principal]);

        parent::setPrincipal($principal);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', []);

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd(?\DateTimeInterface $dateAdd): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', [$dateAdd]);

        parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserAdd(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserAdd', []);

        return parent::getIdUserAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserAdd(?int $idUserAdd): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserAdd', [$idUserAdd]);

        parent::setIdUserAdd($idUserAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateMaj(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateMaj', []);

        return parent::getDateMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateMaj(?\DateTime $dateMaj): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateMaj', [$dateMaj]);

        parent::setDateMaj($dateMaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserMaj(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserMaj', []);

        return parent::getIdUserMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserMaj(?int $idUserMaj): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserMaj', [$idUserMaj]);

        parent::setIdUserMaj($idUserMaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutRst(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutRst', []);

        return parent::getStatutRst();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutRst(?bool $statutRst): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutRst', [$statutRst]);

        parent::setStatutRst($statutRst);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdressRank(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdressRank', []);

        return parent::getAdressRank();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdressRank(?string $adressRank): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdressRank', [$adressRank]);

        parent::setAdressRank($adressRank);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeAdresse(): ?\App\Entity\ContactAdresseType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeAdresse', []);

        return parent::getTypeAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeAdresse(?\App\Entity\ContactAdresseType $typeAdresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeAdresse', [$typeAdresse]);

        parent::setTypeAdresse($typeAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTableContact(): ?\App\Entity\Contact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTableContact', []);

        return parent::getIdTableContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTableContact(?\App\Entity\Contact $idTableContact): \App\Entity\Adresse
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTableContact', [$idTableContact]);

        return parent::setIdTableContact($idTableContact);
    }

}
