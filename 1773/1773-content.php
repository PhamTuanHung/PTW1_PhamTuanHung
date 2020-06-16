<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1773">
<div class="banner has-hover has-parallax">
        <div class = "banner-inner fill">
            <div class = "banner-bg fill parallax-active">
                <div class ="bg fill bg-fill  bg-loaded>">
                    <div class = "overlay">
                    </div>
                </div>
            </div>
            <div class ="banner-layers container">
                <div class = "fill banner-link">
                    <div class = "text dark">
                        <div class = "text-inner text-center">
                            <h3 class = "uppercase" >
                                <strong> Our Stores </strong>
                            </h3>
                            <div class = "is-divider divider clearfix">
                            </div>
                            <div class ="social-icons share-icons share-row relative">
                                <a href = "#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href = "#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href = "#">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </a>
                                <a href = "#">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>
                                <a href = "#">
                                    <i i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
