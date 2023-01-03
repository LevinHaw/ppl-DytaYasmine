<?php

function ArticleComponent($titleArticle, $description, $link, $imgArticle)
{
    $komponen = "
<div class=\"card\" >
        <img src=\"../admin/assets_article/$imgArticle\" class=\"card-img-top\"  />
    <div class=\"card-body\">
        <h5 class=\"card-title mb-5\">$titleArticle</h5>
        <p class=\"card-text\">$description</p>
        <a href=\"$link\" class=\"btn-article mt-5\" target=\"_blank\">Read Full Article</a>
    </div>
</div>
      
    ";

    echo $komponen;
}