{* страница продукта *}

        <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="bs-component">
            <div class="card mb-3">
                <h3 class="card-header">{$rsProduct['name']}</h3>
                <div class="card-body">
                    <h5 class="card-title">Стоимость: {$rsProduct['price']}</h5>
                </div>
                <img width="500" src="/images/products/{$rsProduct['image']}">
                <div class="card-body">
                <p class="card-text"> Описание: <br>{$rsProduct['description']}</p>
                </div>
                <div class="card-body">
                    <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} alt="Удалить из корзины" onclick="removeFromCart({$rsProduct['id']}); return false;" href="#" class="card-link">Удалить из корзины</a>
                    <a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} alt="Добавить в корзину" onclick="addToCart({$rsProduct['id']}); return false;" href="#" class="card-link">Добавить в корзину</a>
                </div>
            </div>
        </div>
    </div>
