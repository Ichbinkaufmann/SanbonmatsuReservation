<?php 
function componentDataEmail($email, $password_email, $email_function,$id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-light\">
        <td>$email</td>
        <td>$password_email</td>
        <td>$email_function</td>
        <td> <div class=\"col d-flex\"><a class=\"dropdown-item\" href=\"edit/edititEmail.php? updateid='$id'\"><button type=\"button\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Edit</button></a>
        <a class=\"dropdown-item\" href=\"remove/removeEmail.php? deleteid='$id'\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"bi bi-trash\"></i> Remove</button></a></li>
    </div></td>
    </tr>
</tbody>
    ";
    echo $element;
}
function componentDataHiking($item_name, $subcategory, $item_stock, $item_price, $additional_info, $item_note, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-primary\">
        <td>$item_name</td>
        <td>$subcategory</td>
        <td class=\"table-primary text-center\">$item_stock</td>
        <td class=\"table-primary text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>$item_note</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititemhiking.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemHiking.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

function componentDataEbike($item_name, $item_img, $subcategory, $item_stock, $item_price, $additional_info, $item_note, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-info\">
        <td>$item_name</td>
        <td><img src=\"$item_img\" style=\"max-width:60px; max-height:60px;\" alt=\"E-bike image\"></td>
        <td>$subcategory</td>
        <td class=\"table-info text-center\">$item_stock</td>
        <td class=\"table-info text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>$item_note</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititemE-bike.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemE-bike.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

function componentDataWinterEquipment($item_name, $item_img, $subcategory,$rent_type, $item_stock, $item_price, $additional_info, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-default\">
        <td>$item_name</td>
        <td><img src=\"$item_img\" style=\"max-width:60px; max-height:60px;\" alt=\"E-bike image\"></td>
        <td>$subcategory</td>
        <td>$rent_type</td>
        <td class=\"table-default text-center\">$item_stock</td>
        <td class=\"table-default text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititemWinter.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemWinter.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

function componentDataRestaurant($item_name, $item_img, $subcategory, $item_stock, $item_price, $additional_info, $item_note, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-success\">
        <td>$item_name</td>
        <td><img src=\"$item_img\" style=\"max-width:60px; max-height:60px;\" alt=\"Restaurant image\"></td>
        <td>$subcategory</td>
        <td class=\"table-success text-center\">$item_stock</td>
        <td class=\"table-success text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>$item_note</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititemRestaurant.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemRestaurant.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

function componentDataBrewex($item_name, $subcategory, $item_stock, $item_price, $additional_info, $item_note, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-warning\">
        <td>$item_name</td>
        <td>$subcategory</td>
        <td class=\"table-warning text-center\">$item_stock</td>
        <td class=\"table-warning text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>$item_note</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititemBrewex.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemBrewex.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

function componentDataBBQ($item_name, $item_img, $item_stock, $item_price, $additional_info, $item_note, $item_id){
    $element = "
    <tbody class=\"table-group-divider\">
    <tr class=\"table-secondary\">
        <td>$item_name</td>
        <td><img src=\"$item_img\" style=\"max-width:60px; max-height:60px;\" alt=\"BBQ images\"></td>
        <td class=\"table-secondary text-center\">$item_stock</td>
        <td class=\"table-secondary text-center\">$item_price</td>
        <td>$additional_info</td>
        <td>$item_note</td>
        <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-danger rounded\"
                data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"bi bi-three-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"edit/edititembbq.php? updateid='$item_id'\"><i class=\"bi bi-pencil\"></i> Edit</a>
                </li>
                <li><a class=\"dropdown-item\" href=\"remove/removeitemBBQ.php? deleteid='$item_id'\"><i class=\"bi bi-trash3\"></i>
                        Remove</a></li>
            </ul>
        </div>
    </td>
    </tr>
</tbody>
    ";
    echo $element;
}

?>