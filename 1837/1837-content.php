<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1837">
    <div class="container">
        <div class="panel">
            <div class="woocommerce">
                <h3 class="normal">
                    Reviews
                </h3>
                <p class="noreviews">There are no reviews yet.</p>
            </div>
            <div class="cot">
                <h3 class="comment2">
                    Be the first to review “Varanise CN Tee Hilfiger Denim”
                </h3>  
                <label>Your rating</label>
                <p class="stars">
                    <a class="star-1"><i class="fas fa-star"></i></a>
                    <span class="mx-1 text-light">|</span>
                    <a class="star-2"><i class="fas fa-star"></i><i class="fas fa-star"></i></a>
                    <span class="mx-1 text-light">|</span>
                    <a class="star-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a>
                    <span class="mx-1 text-light">|</span>
                    <a class="star-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a>
                    <span class="mx-1 text-light">|</span>
                    <a class="star-5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a>
                </p>
                <label>
                    Your review
                    <span>*</span>
                </label>
                <textarea class="w-100" cols="100" rows="5"></textarea>                              
                <div class="row">
                    <div class="col-md-6">
                        <label>
                            Name
                            <span>*</span>
                        </label>
                        <input class="chunhat2">
                    </div>
                    <div class="col-md-6">
                        <label>
                            Email
                            <span>*</span>
                        </label>
                        <input class="chunhat2">
                    </div>
                </div>
                <div class="check">
                    <input type="checkbox">
                    <label>Save my name, email, and website in this browser
                        for the next time I comment.</label>
                </div>
                <div class="form-submit">
                    <input name="submit" type="submit" class="submit" value="Submit" >
                </div>
            </div>
        </div>
    </div>
</div>