<?php

namespace Nuage\DAO;

use Nuage\Domain\Photo;

class PhotoDAO extends DAO 
{

    /**
     * Return portfolio list, 
     *
     * @return array A list of images.
     */
    public function getPortfolio() {
        $sql = "SELECT * FROM t_photo WHERE photo_portfolio = TRUE";
        $result = $this->getDb()->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $portfolio = array();
        $active = 'active';
        foreach ($result as $row) {
            $photoId = $row['photo_id'];
            $portfolio[$photoId] = $this->buildDomainObject($row, $active);
            $active = '';
        }
        return $portfolio;
    }
    
    /**
     * Return astro list,
     *
     * @return array A list of images.
     */
    public function getAstro() {
    	$sql = "SELECT * FROM t_photo WHERE photo_astro = TRUE";
    	$result = $this->getDb()->fetchAll($sql);
    
    	// Convert query result to an array of domain objects
    	$astro = array();
    	$active = 'active';
    	foreach ($result as $row) {
    		$photoId = $row['photo_id'];
    		$astro[$photoId] = $this->buildDomainObject($row, $active);
    		$active = '';
    	}
    	return $astro;
    }

    /**
     * Creates an Photo object based on a DB row.
     *
     * @param array $row The DB row containing Photo data.
     * @return \MicroCMS\Domain\Photo
     */
    protected function buildDomainObject($row, $arg2) {
        $photo = new Photo();
        $photo->setId($row['photo_id']);
        $photo->setSrc($row['photo_src']);
        $photo->setNom($row['photo_nom']);
        $photo->setPortfolio($row['photo_portfolio']);
        $photo->setAstro($row['photo_astro']);
        $photo->setActive($arg2);
        return $photo;
    }
}
