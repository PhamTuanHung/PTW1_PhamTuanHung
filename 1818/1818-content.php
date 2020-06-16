<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1818">
    <div class="title">
        <div class="container">
            <div class="aa">
                <hr></hr>
                <h3>Top Reasons to love Flatsome</h3>
                <hr></hr>
            </div>
        </div>
    </div>
    <section class="category">
        <div class="container">
            <div class = "AA">
                <div class="row" class="category_list">
                    <div class="col-md-4 category_item">
                            <img src="images/img3.jpg" alt="" class="category_item_img">
                            <h2 class="category_item_name">Revolutionary <br>  Drag & Drop Page Builder</h2>
                            <p class="category_item_detail detail"> We have created our own live page builder for Flatsome. Create Sliders, Grids and amazing content all in the same Page Builder. No need for extra slider plugins.</p>
                        <div class="BB">
                            <a href=""><span>LEARN MORE</span></a>
                        </div> 
                    </div>
                    <div class="col-md-4 category_item">
                            <img src="images/img4.jpg" alt="" class="category_item_img">
                            <h2 class="category_item_name">Customize anything with <br>  Live Theme Options.</h2>
                            <p class="category_item_detail detail"> Flatsome let you customize your site in a live customizer. We have unlimited options you can choose from to make your site unique and beautiful.</p>
                        <div class="BB">
                            <a href=""><span>LEARN MORE</span></a>
                        </div> 
                    </div>
                    <div class="col-md-4 category_item">
                            <img src="images/img5.jpg" alt="" class="category_item_img">
                            <h2 class="category_item_name">New features regularly and <br>  always up to date.</h2>
                            <p class="category_item_detail detail"> Flatsome has been active developed for 3 years and will continue for a long time. This theme is our only focus and we want it to be perfect in any way.</p>
                        <div class="BB">
                            <a href=""><span>LEARN MORE</span></a>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
    </section>
</div>
