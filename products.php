<?php
require("db.php");
require("base.php");
?>

<div class="hello-text">
        Choose your product
</div>
<div class="items_cell">

<?php 

global $pdo;
$query = $pdo -> prepare('SELECT * FROM `product`');
$query -> execute();
$product_list = $query -> fetchAll(PDO::FETCH_ASSOC);
$pdo = null;

?>
    <!-- {% for product in product_list %} -->
    <?php for ($product in $product_list) {?>
        <div class="item">
            <div class="photo">
                <img src="media/product/sorry.png" alt="">
            </div>              

            <div class="item_info">
                <div class="text">
                    <div class="title">
                        <?php echo $product['title'] ?>
                    </div>

                    <!-- <div class="description">
                        {{ product.desctiption }}
                    </div>
                    
                    <div class="price-container">
                        <div class="price">
                            {% if product.currence != "" and product.price != "" %}
                                <div class="currency">
                                    {% if product.currency == "USD" %}
                                        <img src="{% static 'images/usd.png' %}" alt="">
                                    {% endif %}
                                </div>
                                <div class="text">
                                    {{ product.currency }} {{ product.price }}
                                </div>
                                
                            {% else %}
                                None
                            {% endif %}
                            
                        </div>
                    </div>
                </div>
                
            </div>      
            <div class="buy_container">
                <div class="buy_field">
                    <a href="/shoping_cart/add_{{ product.id }}"><img src="{% static 'images/shopping_cart.png' %}" alt=""></a>
                </div>
            </div> -->
        </div>
    <?php } ?>
    <!-- {% endfor %}   -->
</div>