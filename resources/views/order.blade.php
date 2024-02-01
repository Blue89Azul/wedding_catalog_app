<x-layout>
    <!-- 住所 -->
    <div class="col-12 mb-5 mx-0 row justify-content-center">
        <h1 class="middle-heading text-center">Address</h1>
        <p class="text-center">注文する引き出物をお送りする住所を選択、または入力してください</p>
        <div class="col-md-6 col-12 bg-light text-center p-3">
            <span class="fw-bold d-inline-block mb-2">現在送付予定の住所</span>
            <p>
                <?php echo($postal_code); ?>
                <br>
                <?php echo($address_info); ?>
            </p>
        </div>
    </div>

    <!-- 選択肢 -->
    <form action="confirm" method="post">
        <div id="address-option" class="d-flex justify-content-center col-sm-12 mb-5">
            <div>
                <div class="form-check mb-3">
                    <input id="same-address-radio" class="form-check-input" type="radio" name="address_id" value="<?php echo($_SESSION["ADDRESS_ID"]); ?>" checked>
                    <label class="form-check-label" for="same_direction">現在送付予定の住所 と 同じ住所 に送る</label>
                </div>
                <div class="form-check">
                    <!-- 0の場合は、更新がかかるよう修正する。 -->
                <input id="diff-address-radio" class="form-check-input" type="radio" name="address_id" value="0"> 
                    <label class="form-check-label" for="diff_direction">住所を変更して送る</label>
                </div>
            </div>
        </div>

        <!-- 異なる場合のフォーム -->
        <div class="d-flex justify-content-center h-adr  col-12 col-sm-6 w-100">
            <div id="modify-address-form" class="p-5 mb-3 d-none border">
                <span class="p-country-name d-none">Japan</span>
                <div class="mb-3 row required-item">
                    <label for="post-code" class="form-label required">郵便番号 (ハイフンなし)</label>
                    <input type="text" id="post-code" class="form-control p-postal-code d-none" name="postal_code" size="7" placeholder="123456" autocomplete="postal-code">
                </div>
                <div class="mb-3 row required-item">
                    <label for="post-code" class="form-label required">都道府県</label>
                    <input type="text" id="post-code" class="form-control p-region d-none" name="province" placeholder="埼玉県" autocomplete="postal-code">
                </div>
                <div class="mb-3 row required-item">
                    <label for="post-code" class="form-label required">住所(市区町村)</label>
                    <input type="text" id="post-code" class="form-control p-locality p-street-address d-none" name="city" placeholder="〇〇市 △△区 ××" autocomplete="postal-code">
                </div>
                <div class="mb-3 row required-item">
                    <label for="post-code" class="form-label required">住所(丁目 番地 号)</label>
                    <input type="text" class="form-control p-extended-address d-none" name="line" placeholder="〇〇丁目 △△番 ××号" autocomplete="postal-code">
                </div>
                <div class="mb-3 row">
                    <label for="post-code" class="form-label">住所(アパート・マンション)</label>
                    <input type="text" id="post-code" class="form-control d-none" name="building" placeholder="金田ハイツ 100号室" autocomplete="postal-code">
                </div>
            </div>
        </div>

        <input type="hidden" name="product_id" value="<?php echo($_POST["product_id"]); ?>">
        <?php 
            $product_option_1 = isset($_POST["product_option_1"])? $_POST["product_option_1"] :"0";
            $product_option_2 = isset($_POST["product_option_2"])? $_POST["product_option_2"] :"0";
        ?>
        <input type="hidden" name="product_option_1" value="<?php echo($product_option_1); ?>">
        <input type="hidden" name="product_option_2" value="<?php echo($product_option_2); ?>">        

        <div class="col-sm-12 d-flex justify-content-center">
            <button id="submit" class="btn btn-lg btn-secondary">注文確認画面へ進む</button>
        </div>
    </form>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <script src="./js/confirm.js"></script>
</x-layout>