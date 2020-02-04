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
        $cheeseItem .= "<div class='collectionItem'>" ;
        $cheeseItem .= "<div class='image'>";
        $cheeseItem .= "<img src='" . $cheese['imgurl'] . "'/>" . "</div>";
        $cheeseItem .= "<h3>" . $cheese['name'] . "</h3> <ul> <li>";
        $cheeseItem .= $cheese['countryoforigin'] . "</li> <li>";
        $cheeseItem .= $cheese['winepairing'] . "</li> <li>";
        $cheeseItem .= $cheese['funfact'] . "</li> </ul> </div>";
    }
    return $cheeseItem;
};

?>




<div class="collectionItem">
    <div class="image">
        <img src="images/stilton.jpeg" alt="">
    </div>
    <h3 class=\"cheeseName\">example cheese</h3>
    <ul>
        <li class="country">england</li>
        <li class="wine">merlot</li>
        <li class="fact">funfact</li>
    </ul>
</div>
