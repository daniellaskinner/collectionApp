<?php
//function to retrieve all cheeses as an array from db (with prepare statement)

function getAllCheeses($db) {
    $query = $db->prepare("SELECT `id`, `name`, `countryoforigin`, `winepairing`, `funfact`, `imgurl` FROM `cheese`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
};


//display cheese items from array

function displayACheese($cheeses) {
   $cheeseItem=" ";
    foreach($cheeses as $cheese) {
        $cheeseItem.= "<h1>" . $cheese['name'] . "</h1>" . "<p>" . $cheese['countryoforigin'] . "</p>";
    }
    return $cheeseItem;
};



<div class="collectionItem">
            <div class="image">
                <img src="images/stilton.jpeg" alt="">
            </div>
            <h3 class="cheeseName">example cheese</h3>
            <ul>
                <li class="country">england</li>
                <li class="wine">merlot</li>
                <li class="fact">funfact</li>
            </ul>
        </div>
