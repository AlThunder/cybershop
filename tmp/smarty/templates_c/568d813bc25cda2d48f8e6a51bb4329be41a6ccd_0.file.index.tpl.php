<?php
/* Smarty version 3.1.39, created on 2021-07-15 23:26:52
  from 'W:\domains\myshop.local\views\bootstrap\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f09a0ca07148_49306236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568d813bc25cda2d48f8e6a51bb4329be41a6ccd' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\bootstrap\\index.tpl',
      1 => 1626380809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f09a0ca07148_49306236 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
	<div style="float: left; padding: 30px 30px 40px 30px">
		<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
		</a><br>
		<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
		<div style="clear: both"></div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- Containers
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="containers">Containers</h1>
            </div>
          </div>
        </div>
        <div>
            <h2>Badges</h2>
            <div class="bs-component mb-4">
              <span class="badge bg-primary">Primary</span>
              <span class="badge bg-secondary">Secondary</span>
              <span class="badge bg-success">Success</span>
              <span class="badge bg-danger">Danger</span>
              <span class="badge bg-warning">Warning</span>
              <span class="badge bg-info">Info</span>
              <span class="badge bg-light">Light</span>
              <span class="badge bg-dark">Dark</span>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
            <div class="bs-component">
              <span class="badge rounded-pill bg-primary">Primary</span>
              <span class="badge rounded-pill bg-secondary">Secondary</span>
              <span class="badge rounded-pill bg-success">Success</span>
              <span class="badge rounded-pill bg-danger">Danger</span>
              <span class="badge rounded-pill bg-warning">Warning</span>
              <span class="badge rounded-pill bg-info">Info</span>
              <span class="badge rounded-pill bg-light">Light</span>
              <span class="badge rounded-pill bg-dark">Dark</span>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2>Cards</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Secondary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Success card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Danger card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Warning card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Info card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card bg-light mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Light card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Secondary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Success card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Danger card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Warning card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-info mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Info card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-light mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Light card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card mb-3">
                <h3 class="card-header">Card header</h3>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                  <rect width="100%" height="100%" fill="#868e96"></rect>
                  <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="https://bootswatch.com/sketchy/#" class="card-link">Card link</a>
                  <a href="https://bootswatch.com/sketchy/#" class="card-link">Another link</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://bootswatch.com/sketchy/#" class="card-link">Card link</a>
                  <a href="https://bootswatch.com/sketchy/#" class="card-link">Another link</a>
                </div>
              </div>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            <h2>Accordions</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
            <button class="source-button btn btn-primary btn-xs" role="button" tabindex="0">&lt; &gt;</button></div>
          </div>
        </div>

      </div><?php }
}
