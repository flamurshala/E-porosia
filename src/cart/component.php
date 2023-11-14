<?php

function component($product_title, $sale, $product_price, $filename, $product_shipping_fee, $product_description, $productid)
{
    $element = "

    <div class=\"col-md-4 col-sm-6 my-3 my-md-0\" >
                <form action=\"\" method=\"post\">
                    <div style=\" margin-bottom: 50px; height:500px\"class=\"card shadow\">
                        <div>
                            <img src=\"$filename\" alt=\"Image1\" class=\"img-fluid rounded card-img-top\" style=\"height:200px; width:auto\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$product_title</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <h6 style=\"color:gray; font-size: 12px;\">
                           $product_description
                        </h6>
                            <h5>
                           
                                <span class=\"price\">Çmimi:  <small><s class=\"text-secondary\">€$sale</s></small> € $product_price</span>
                            </h5>
                            <h6>
                            Transporti:
                                <span class=\"price\">€ $product_shipping_fee</span>
                            </h6>

                            <button type=\"submit\" class=\"btn btn-outline-dark my-3 mt-auto \" name=\"add\">Shto ne shport <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($product_title, $product_price, $filename, $product_shipping_fee, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$filename alt=\"Image1\" class=\"img-fluid center\" style=\"height:125px; width:auto;\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$product_title</h5>
                                <h5 class=\"pt-2\">Çmimi: $$product_price</h5>
                                <h6 class=\"pt-2\">Transporti: $$product_shipping_fee</h6>
                                
                            </div>
                            <div class=\"col-md-3 py-4\">
                                <div>
                               
                                    
                    
                                    <div><button type=\"submit\" class=\"btn btn-danger mx-5 float-end\" name=\"remove\">Largo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo $element;
}