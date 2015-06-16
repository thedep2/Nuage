<?php

namespace Nuage\Domain;

class Actu 
{
    /**
     * photo_id.
     *
     * @var integer
     */
    private $id;

    /**
     * photo_src.
     *
     * @var string
     */
    private $src;
    
    /**
     * photo_nom.
     *
     * @var string
     */
    private $nom;
    
    /**
     * photo_portfolio.
     *
     * @var boolean
     */
    private $portfolio;
    
    /**
     * photo_astro.
     *
     * @var boolean
     */
    private $astro;
    
    /**
     * offset.
     *
     * @var integer
     */
    private $offset;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    
    public function getSrc() {
    	return $this->src;
    }
    
    public function setSrc($src) {
    	$this->src = $src;
    }
    
    
    public function getNom() {
    	return $this->nom;
    }
    
    public function setNom($nom) {
    	$this->nom = $nom;
    }
    
    
    public function getPortfolio() {
    	return $this->portfolio;
    }
    
    public function setPortfolio($portfolio) {
    	$this->portfolio = $portfolio;
    }
    
    
    public function getAstro() {
    	return $this->astro;
    }
    
    public function setAstro($astro) {
    	$this->astro = $astro;
    }
    
    
    public function getOffset() {
    	return $this->offset;
    }
    
    public function setOffset($offset) {
    	$this->offset = $offset;
    }

    
    
}
