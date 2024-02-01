<x-layout>
    <h1 class="middle-heading text-center mb-3">Confirm</h1>
    <p class="text-center">こちらの内容で注文を受け付けます。<br>注文内容に相違なければ、注文確定ボタンを押してください</p>
    <div class="d-flex justify-content-center">
    <p class="text-center alert alert-danger ">注文を確定すると、本人及び列席されたご家族は、<br>これ以降ご注文ができなくなりますので、ご注意ください。<br><br>その他のページは、引き続きご覧いただけます。</p>
    </div>
    
    <!-- table -->
    <div class="d-flex flex-column align-items-center col-md-12">
        <?php 
            $product_id   = $security->h($_POST["product_id"])??"";
            $address_id   = $security->h($_POST["address_id"])??"";
            $product_info = $database->table("product")
                                      ->select(["image_name", "product_name"])
                                      ->where("product_id", "=", [$product_id])
                                      ->execute()[0];  
        ?>
        <div class="col-md-3 my-3 border">
            <img class="h-100 w-100" src="<?php Image::showProduct($product_info["image_name"]); ?>" alt="">
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">項目</th>
                        <th scope="col">内容</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>商品名</th>
                        <th><?php echo($product_info["product_name"]) ?></th>
                    </tr>
                    <?php 
                        $is_product_with_option = $product_id == 4;
                        if($is_product_with_option) { 
                            $option_1_name = convert_to_option_name($security->h($_POST["product_option_1"]));
                            $option_2_name = convert_to_option_name($security->h($_POST["product_option_2"]));
                    ?>
                        <tr>
                            <th>オプション名</th>
                            <th>
                                ウイスキーカップ(1): <?php echo($option_1_name); ?><br>
                                ウイスキーカップ(2): <?php echo($option_2_name); ?>
                            </th>
                        </tr>
                    <?php } ?>
                    <tr>
                        <?php 
                            if(!$address_id) {
                                $postal_code = $security->h($_POST["postal_code"])??"";
                                $province    = $security->h($_POST["province"])??"";
                                $city        = $security->h($_POST["city"])??"";
                                $line        = $security->h($_POST["line"])??"";
                                $building    = $security->h($_POST["building"])??"";
                            } else {
                                $address_info = $database->table("address")
                                                         ->select(["*"])
                                                         ->where("address_id", "=", [$address_id])
                                                         ->execute()[0];
                                                         
                                $postal_code = $address_info["postal_code"];
                                $province    = $address_info["province"];
                                $city        = $address_info["city"];
                                $line        = $address_info["line"];
                                $building    = $address_info["building"];
                            }
                            $address_info = "〒{$postal_code} {$province} {$city} {$line} {$building}";
                        ?>
                        <th>送付先住所</th>
                        <th><?php echo($address_info); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <form action="./logic/orderLogic" method="post">
        <div class="col-sm-12 d-flex justify-content-center">
            <input type="hidden" name="product_id" value="<?php echo($product_id); ?>">
            <input type="hidden" name="address_id" value="<?php echo($address_id); ?>">
            <input type="hidden" name="postal_code" value="<?php echo($postal_code); ?>">
            <input type="hidden" name="province" value="<?php echo($province); ?>">
            <input type="hidden" name="city" value="<?php echo($city) ?>">
            <input type="hidden" name="line" value="<?php echo($line) ?>">
            <input type="hidden" name="building" value="<?php echo($building) ?>">
            <input type="hidden" name="product_option_1" value="<?php echo($_POST["product_option_1"]); ?>">
            <input type="hidden" name="product_option_2" value="<?php echo($_POST["product_option_2"]); ?>">          
            <button id="submit" class="btn btn-lg btn-secondary">注文確定</button>
        </div>
    </form>
    <?php
     include("./lib/footer.php"); 

     // ↓どうにかしたい。。
     function convert_to_option_name(string $option_id): string {
        switch($option_id) {
            case "0":
                return "柄をつけない";
            case "1":
                return "ニャンドゥティA";
            case "2":
                return "ニャンドゥティB";
            default:
                return "";
        }
     }
     ?>
</x-layout>