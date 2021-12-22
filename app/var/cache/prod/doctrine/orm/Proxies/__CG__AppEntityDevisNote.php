<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DevisNote extends \App\Entity\DevisNote implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\DevisNote' . "\0" . 'devis', 'texteNote', 'idbActionStatut', 'idUserAdd', 'note', 'idbAction', 'idb', 'idActionStatut', 'idUserMaj', 'dateMaj', 'idAction', 'idNomAction', 'rappelleur', 'deletedAt', 'idTable', 'dateAction', 'nomCon', 'idbTable', 'dateAdd', 'idUserAction', 'id', 'statutRst', 'idbNomAction'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\DevisNote' . "\0" . 'devis', 'texteNote', 'idbActionStatut', 'idUserAdd', 'note', 'idbAction', 'idb', 'idActionStatut', 'idUserMaj', 'dateMaj', 'idAction', 'idNomAction', 'rappelleur', 'deletedAt', 'idTable', 'dateAction', 'nomCon', 'idbTable', 'dateAdd', 'idUserAction', 'id', 'statutRst', 'idbNomAction'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DevisNote $proxy) {
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
    public function getDevis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevis', []);

        return parent::getDevis();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevis($devis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevis', [$devis]);

        return parent::setDevis($devis);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomTable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomTable', []);

        return parent::getNomTable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAction(?\App\Entity\NoteAction $idAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAction', [$idAction]);

        return parent::setIdAction($idAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserAction(): ?\App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserAction', []);

        return parent::getIdUserAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbTable(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbTable', []);

        return parent::getIdbTable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserAction(?\App\Entity\Utilisateur $idUserAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserAction', [$idUserAction]);

        return parent::setIdUserAction($idUserAction);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbNomAction(?int $idbNomAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbNomAction', [$idbNomAction]);

        return parent::setIdbNomAction($idbNomAction);
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
    public function setIdUserMaj(?int $idUserMaj): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserMaj', [$idUserMaj]);

        return parent::setIdUserMaj($idUserMaj);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAction(?\DateTimeInterface $dateAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAction', [$dateAction]);

        return parent::setDateAction($dateAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdActionStatut(): ?\App\Entity\NoteActionStatut
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdActionStatut', []);

        return parent::getIdActionStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbActionStatut(?int $idbActionStatut): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbActionStatut', [$idbActionStatut]);

        return parent::setIdbActionStatut($idbActionStatut);
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutRst(?bool $statutRst): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutRst', [$statutRst]);

        return parent::setStatutRst($statutRst);
    }

    /**
     * {@inheritDoc}
     */
    public function setNomCon(?string $nomCon): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomCon', [$nomCon]);

        return parent::setNomCon($nomCon);
    }

    /**
     * {@inheritDoc}
     */
    public function setRappelleur($rappelleur): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRappelleur', [$rappelleur]);

        return parent::setRappelleur($rappelleur);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdb(?int $idb): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdb', [$idb]);

        return parent::setIdb($idb);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAction(): ?\App\Entity\NoteAction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAction', []);

        return parent::getIdAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTable(): ?\App\Entity\Dossier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTable', []);

        return parent::getIdTable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbTable(?int $idbTable): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbTable', [$idbTable]);

        return parent::setIdbTable($idbTable);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserAdd(?\App\Entity\Utilisateur $idUserAdd): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserAdd', [$idUserAdd]);

        return parent::setIdUserAdd($idUserAdd);
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
    public function getDateAction(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAction', []);

        return parent::getDateAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomCon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomCon', []);

        return parent::getNomCon();
    }

    /**
     * {@inheritDoc}
     */
    public function setTexteNote(?string $texteNote): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexteNote', [$texteNote]);

        return parent::setTexteNote($texteNote);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', []);

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdActionStatut(?\App\Entity\NoteActionStatut $idActionStatut): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdActionStatut', [$idActionStatut]);

        return parent::setIdActionStatut($idActionStatut);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbAction(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbAction', []);

        return parent::getIdbAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTable(?int $idTable): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTable', [$idTable]);

        return parent::setIdTable($idTable);
    }

    /**
     * {@inheritDoc}
     */
    public function getRappelleur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRappelleur', []);

        return parent::getRappelleur();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateMaj(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateMaj', []);

        return parent::getDateMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdNomAction(): ?\App\Entity\NoteAction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdNomAction', []);

        return parent::getIdNomAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserAdd(): ?\App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserAdd', []);

        return parent::getIdUserAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(?string $note): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt(?\DateTimeInterface $deletedAt): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbAction(?int $idbAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbAction', [$idbAction]);

        return parent::setIdbAction($idbAction);
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
    public function getTexteNote(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexteNote', []);

        return parent::getTexteNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdNomAction(?\App\Entity\NoteAction $idNomAction): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdNomAction', [$idNomAction]);

        return parent::setIdNomAction($idNomAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd(?\DateTimeInterface $dateAdd): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', [$dateAdd]);

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbActionStatut(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbActionStatut', []);

        return parent::getIdbActionStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbNomAction(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbNomAction', []);

        return parent::getIdbNomAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function setDateMaj(?\DateTimeInterface $dateMaj): \App\Entity\Note
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateMaj', [$dateMaj]);

        return parent::setDateMaj($dateMaj);
    }

}
