<?php

function componentHiking($item_name, $additional_info, $item_note, $item_price, $item_id){
    $element = "
         <div class=\"card mb-3 card-book-info\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Starting price: ¥ $item_price</p>
                <p class=\"card-text\">Other price info:</p>
                <p class=\"card-text\">$additional_info</p>
            </div>
            <div class=\"card-body card-note\">
                <p class=\"card-text\"><small>Note:</small></p>
                <p class=\"card-text\"><small>$item_note</small></p>
            </div>
            <div class=\"card-body justify-content-center\">
            <button type=\"button\" class=\"btn btn-primary btn-add\"><a class=\"dropdown-item\" href=\"inc/addtocart/addHiking.php? getidhiking='$item_id'\">Pick this service
            </a></button>
            </div>
        </div>
    ";
    echo $element;
}

function componentBeerMaking($item_img, $item_name,$item_price, $additional_info, $item_note,$item_id){
    $element = "
    <div class=\"col\">
        <div class=\"card mb-3 card-book-info\">
            <img  src=\"admin/$item_img\" class=\"card-img-top\" alt=\"Beer Making Banner\">
            <div class=\"card-body \">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Price: ¥$item_price (Including Tax)</p>
                <p class=\"card-text\">$additional_info</p>
            </div>
            <div class=\"card-body card-note\">
                <p class=\"card-text\"><small>Note: </small></p>
                <p class=\"card-text\"><small>$item_note</small></p>
            </div>
            <div class=\"card-body justify-content-center\">
                <button type=\"button\" class=\"btn btn-primary btn-add\"><a class=\"dropdown-item\" href=\"inc/addtocart/addBeerMaking.php? getidhiking='$item_id'\">Pick this service
                </a></button>
            </div>
        </div>
    </div>
    ";
    echo $element;
}

function componentRestaurant($item_img, $item_name,$item_price, $additional_info, $item_note, $item_id){
    $element = "
    <div class=\"col\">
        <div class=\"card mb-3 card-book-info\">
            <img style=\"max-height:410px;\" src=\"admin/$item_img\" class=\"card-img-top\" alt=\"Restaurant Banner\">
            <div class=\"card-body \">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Price: ¥$item_price (Including Tax)</p>
                <p class=\"card-text\">$additional_info</p>
            </div>
            <div class=\"card-body card-note\">
                <p class=\"card-text\"><small>Note: </small></p>
                <p class=\"card-text\"><small>$item_note</small></p>
            </div>
            <div class=\"card-body justify-content-center\">
                <button type=\"button\" class=\"btn btn-primary btn-add\"><a class=\"dropdown-item\" href=\"inc/addtocart/addRestaurant.php? getidhiking='$item_id'\">Pick this service
                </a></button>
            </div>
        </div>
    </div>
    ";
    echo $element;
}

function componentBBQ($item_img, $item_name,$item_price, $additional_info, $item_note, $item_id){
    $element = "
    <div class=\"col\">
        <div class=\"card mb-3 card-book-info\">
            <img style=\"max-height:410px;\" src=\"admin/$item_img\" class=\"card-img-top\" alt=\"Restaurant Banner\">
            <div class=\"card-body \">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Price: ¥$item_price (Including Tax)</p>
                <p class=\"card-text\">$additional_info</p>
            </div>
            <div class=\"card-body card-note\">
                <p class=\"card-text\"><small>Note: </small></p>
                <p class=\"card-text\"><small>$item_note</small></p>
            </div>
            <div class=\"card-body justify-content-center\">
                <button type=\"button\" class=\"btn btn-primary btn-add\"><a class=\"dropdown-item\" href=\"inc/addtocart/addBBQ.php? getidhiking='$item_id'\">Pick this service
                </a></button>
            </div>
        </div>
    </div>
    ";
    echo $element;
}

function componentEbike($item_name, $additional_info, $item_note, $item_price, $item_img, $subcategory,$item_id){
    $element = "
    <div class=\"col-md-4\">
        <div class=\"card card-book-info mb-3\" style=\"width: 100%; height:760px;\">
            <img src=\"admin/$item_img\" class=\"card-img-top\" alt=\"E-bike Pictue\" style=\"height: 300px;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Price: ¥ $item_price</p>
        </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Type: $subcategory</li>
            </ul>
        <div class=\"card-body\">
            <p class=\"card-text\">Note:</p>
            <p class=\"card-text\">$item_note</p>
        </div>
        <div class=\"card-body text-center\">
            <button type=\"button\" class=\"btn btn-primary btn-add\"><a class=\"dropdown-item\" href=\"inc/addtocart/addEbike.php? getidhiking='$item_id'\">Rent
            </a></button>
            </div>
        </div>
    </div>
    ";
    echo $element;
}

function componentWinterDaily($item_name, $additional_info, $item_price, $item_id){
    $element = "
    <div class=\"card mb-3 card-book-info card-book-info-item\" style=\"width: 100%;\">
    <div class=\"row d-flex\">
        <div class=\"col-md-9 card-body\">
            <h5 class=\"card-title ms-1\">$item_name</h5>
            <p class=\"card-text ms-1\">$additional_info</p>
                <p class=\"card-text ms-1\">Price: ¥$item_price</p>
        </div>
        <div class=\"col-md-3 card-body btn-rent-area text-center\">
            <a href=\"inc/addtocart/addWinterEquipmentDaily.php? getidhiking='$item_id'\" class=\"btn btn-primary btn-rent\">Rent</a>
        </div>
    </div>
</div>
    ";
    echo $element;
}

function componentWinterHourly($item_name, $additional_info, $item_price, $item_id){
    $element = "
    <div class=\"card mb-3 card-book-info card-book-info-item\" style=\"width: 100%;\">
    <div class=\"row d-flex\">
        <div class=\"col-md-9 card-body\">
            <h5 class=\"card-title ms-1\">$item_name</h5>
            <p class=\"card-text ms-1\">$additional_info</p>
                <p class=\"card-text ms-1\">Price: ¥$item_price</p>
        </div>
        <div class=\"col-md-3 card-body btn-rent-area text-center\">
            <a href=\"inc/addtocart/addWinterEquipmentHourly.php? getidhiking='$item_id'\" class=\"btn btn-primary btn-rent\">Rent</a>
        </div>
    </div>
</div>
    ";
    echo $element;
}




// add to cart components
function itemConfirmation($item_img, $item_name, $subcategory, $item_price){
    $element = "
    <div class=\"col\">
    <div class=\"card card-item mb-3\" style=\"width: 85%;\">
    <div class=\"row g-0\">
        <div class=\"col-md-3 img-field\" style=\"max width:50px\">
            <img src=\"../../admin/$item_img\" class=\"img-fluid rounded-start\"
                style=\"min-width:100%\" alt=\"item pictures\">
        </div>
        <div class=\"col-md-9\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$item_name</h5>
                <p class=\"card-text\">Type: $subcategory
                </p>
                <p class=\"card-text text-success\">Price: ¥$item_price
                </p>
            </div>
        </div>
    </div>
    </div>  
    </div>
    
    ";
    echo  $element;
}

// cartItem
function componentCart($item_name, $item_category, $reserve_date, $reserve_hour, $subcategory, $duration, $quantity, $note, $totalPrice, $cart_id){
    $element = "
    
    <div class=\"card card-book-info card-item mb-3\" style=\"width: 100%;\">
        <div class=\"row d-flex\">
            <div class=\"col-9\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$item_name</h5>
                    <p class=\"card-text\">From: $item_category
                    </p>
                    <p class=\"card-text\">Type: $subcategory
                    </p>
                    <p class=\"card-text\">Date: $reserve_date
                    </p>
                    <p class=\"card-text\">Time: $reserve_hour
                    </p>
                    <p class=\"card-text\">Duration: $duration
                    </p>
                    <p class=\"card-text\">Quantity: $quantity
                    </p>
                    <p class=\"card-text text-success\">Price: ¥$totalPrice
                    </p>
                </div>
            </div>
            <div class=\"col-3 text-end\">
                <button type=\"button\" class=\"btn btn-danger btn-remove mt-2 me-2\"><a class=\"dropdown-item\" href=\"remove/removeCart.php? cartid='$cart_id'\"><i class=\"bi bi-trash3-fill\"></i></a></button>
            </div>
        </div>
        <div class=\"card-body note-area\">
            <p class=\"card-text\">Note:
            </p>
            <p class=\"card-text\">$note
            </p>
        </div>

    </div>
    
    ";
    echo  $element;
}