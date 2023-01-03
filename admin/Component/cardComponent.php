<?php

function Component($productname, $productprice, $productimg)
{
  $elemen = "

    <div class=\"col\">
        <div class=\"card\">
          <img src=\"../admin/assets_produk/$productimg\" class=\"img-fluid card-img-top\" alt=\"img1\" />
          <div class=\"card-body\">
            <h5 class=\"card-title fw-bold\">$productname</h5>
            <p class=\"card-text\" style=\"color: black\">Rp $productprice</p>
            <p><a href=\"https://www.tokopedia.com/dytayasmin\" class=\"btn btn-outline\">Beli sekarang</a></p>
          </div>
        </div>
      </div>

    ";

  echo $elemen;
}