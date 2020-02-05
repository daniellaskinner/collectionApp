<?php

/**
 * function to retrieve all cheeses as an array from db
 *
 * @param PDO $db
 *
 * @return array
 */
function getAllCheeses(PDO $db):array {
    $query = $db->prepare("SELECT `id`, `name`, `countryoforigin`, `winepairing`, `funfact`, `imgurl` FROM `cheese`;");
    $query->execute();
    return $query->fetchAll();
};


/**
 * return cheese items from array one by one if array keys exist for them, otherwise return an error message
 *
 * @param array $cheeses
 *
 * @return string
 */
function displayAllCheeses(array $cheeses): string {
   $cheeseItem=" ";
    foreach($cheeses as $cheese) {
        if (array_key_exists('imgurl', $cheese) && array_key_exists('name', $cheese) && array_key_exists('countryoforigin', $cheese)
            && array_key_exists('winepairing', $cheese) && array_key_exists('funfact', $cheese)) {
                $cheeseItem .= "<div class='collectionItem'>";
                $cheeseItem .= "<div class='image'>";
                $cheeseItem .= "<img src='" . $cheese['imgurl'] . "'/>" . "</div>";
                $cheeseItem .= "<h3> <span> Name: </span>" . $cheese['name'] . "</h3> <ul> <li>";
                $cheeseItem .= "<span> Country of origin: </span>" . $cheese['countryoforigin'] . "</li> <li>";
                $cheeseItem .= "<span> Wine pairing: </span>" . $cheese['winepairing'] . "</li> <li>";
                $cheeseItem .= "<span> Fun fact: </span>" . $cheese['funfact'] . "</li> </ul> </div>";
            }
        else $cheeseItem = "The array being input is not valid";
        }
    return $cheeseItem;
}