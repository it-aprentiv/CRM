<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Devis extends \App\Entity\Devis implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'ref', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContactCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContactCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTypeAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTypeAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idResponsable', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbResponsable', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'intituleDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'detail', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateEmission', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateValidation', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTypeCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTypeCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'conditionsReglement', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'budgetRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctDuBudgetRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'budgetMax', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalHtAvantRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalHt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalCout', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalTtc', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStatutDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStatutDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'statutRst', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'conditionsRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateValidite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'details', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idActivite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContactStr', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idDevisCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idDevisStatut', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStrRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStructure', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbActivite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContactStr', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbDevisCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbDevisStatut', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStrRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStructure', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntTtc', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'noRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'tauxRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalCoutHt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idCommercial', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'commentaires'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idb', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'ref', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContact', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContact', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContactCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContactCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTypeAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTypeAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbAffaire', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idResponsable', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbResponsable', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'intituleDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'detail', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateEmission', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateValidation', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTypeCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTypeCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'conditionsReglement', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'budgetRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctDuBudgetRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'budgetMax', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalHtAvantRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalHt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalCout', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'prctMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'montantTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalTtc', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStatutDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStatutDevis', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateAdd', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idUserAdd', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idUserMaj', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'statutRst', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'conditionsRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'dateValidite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'details', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idActivite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idContactStr', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idDevisCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idDevisStatut', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStrRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idStructure', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbActivite', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbCondRglmnt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbContactStr', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbDevisCli', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbDevisStatut', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStrRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idbStructure', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntMarge', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntTtc', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'mntTva', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'noRef', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'tauxRem', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'totalCoutHt', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'idCommercial', '' . "\0" . 'App\\Entity\\Devis' . "\0" . 'commentaires'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Devis $proxy) {
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

    
}
