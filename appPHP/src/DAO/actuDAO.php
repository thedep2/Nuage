<?php

namespace Nuage\DAO;

use Nuage\Domain\Actu;

class ActuDAO extends DAO 
{

    /**
     * Return 4 last actu, sorted by date (most recent first).
     *
     * @return array A list of 4 last actu.
     */
    public function lastActus() {
        $sql = "SELECT * FROM t_photo ORDER BY photo_id LIMIT 0, 4";
        $result = $this->getDb()->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $actus = array();
        $offset = 1;
        foreach ($result as $row) {
            $actuId = $row['photo_id'];
            $actus[$actuId] = $this->buildDomainObject($row, $offset);
            if ($offset == 1)
            {
            	$offset = 2;
            }
        }
        return $actus;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    protected function buildDomainObject($row, $arg2) {
        $actu = new Actu();
        $actu->setId($row['photo_id']);
        $actu->setSrc($row['photo_src']);
        $actu->setNom($row['photo_nom']);
        $actu->setPortfolio($row['photo_portfolio']);
        $actu->setAstro($row['photo_astro']);
        $actu->setOffset($arg2);
        return $actu;
    }
}
