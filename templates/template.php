<?php

// Create the wrapping element container
$el = $this->el('div', [
    'class' => [
        'el-item uk-panel'
    ],
    'style' => [
        // Set the min-height if it has a value
        'min-height: {min_height}px',
        'margin-bottom: 10px',
    ],
    // Add the HTML attribute `uk-grid`
    'uk-grid' => false,
]);

// Create the wrapping content container
$content = $this->el('div', [

    'class' => [
        // Add a class if the style has a value
        'el-content uk-panel',
    ],

]);

?>

<?php
// Render the opening HTML tag
echo $el($props, $attrs);
?>

<?php

if ($props['content']){
    $strDelivery = htmlspecialchars(JText::_("JIGA_SHOPIFY_DELIVERY"),ENT_QUOTES);
    $strCart =  htmlspecialchars(JText::_("JIGA_SHOPIFY_CART"),ENT_QUOTES);
    $strCheckout =  htmlspecialchars(JText::_("JIGA_SHOPIFY_CHECKOUT"),ENT_QUOTES);
    $strSub =  htmlspecialchars(JText::_("JIGA_SHOPIFY_SUB"),ENT_QUOTES);
    $strButton = htmlspecialchars(JText::_("JIGA_SHOPIFY_BUTTON"),ENT_QUOTES);
    echo "<div id='JiGa-shopify' shopifyId='". $props['content'] . "' strDelivery='".$strDelivery."' strCart='".$strCart."' strCheckout='".$strCheckout."' strSub='".$strSub."' strButton='".$strButton."'></div>" ;
    echo '<h3>' . $strDelivery . '</h3>';

    /**/
}

/*
*/
?>
<?php
echo $el->end();
?>
