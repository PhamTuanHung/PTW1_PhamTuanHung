<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12">
    <div class = "container">
        <form class="example">
            <input type="seach" >
        </form>
        <div class="menu1">
            <div class="tieude1">
                <p class="Cart">Cart</P>
                <p class="Cart2"></p>
            </div>
            <p>No products in the cart.</p>
        </div>
        <div class="menu2">
            <div class=tieude2>
                <p class="Caterogies">Caterogies</p>
                <p class="Caterogies2"></p>
            </div>
            <div class="ull">
                <ul>
                    <li>Black Tea</li>
                    <li>Green Tea</li>
                    <li>Organic Tea</li>
                    <li>Uncategorized</li>
                </ul>
            </div>
        </div>
        <div class="Filter">
            <h3 class="content">Filter</h3>
            <p class="content2"></p>
        </div> 
        <div class="slidecontainer">
            <input class ="thanh" type="range" min="200" max="999" value="300" id="myRange">
        </div>
        <div class="price">
            Price: 
            <span>$1</span>
            -
            <span>$4</span>
        </div>
        <button class="nut">
        Filter
        </buton>
        <div class = "Product">
            <p class="nd1">Product tags</p>
            <p class="nd2"></p>
        </div>
    </div>
</div>
