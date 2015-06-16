<?php

namespace Nuage\DAO;

use Nuage\Domain\Photo;

class PhotoDAO extends DAO 
{

    /**
     * Return 4 last actu, sorted by date (most recent first).
     *
     * @return array A list of 4 last actu.
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
