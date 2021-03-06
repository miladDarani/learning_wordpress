<!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">

              <form action="/" method="get" class="d-flex">
                  <input type="text" class="form-control" name="s" placeholder="Search for...">
                  <span class="input-group-append">
                      <button class="btn btn-secondary" type="submit">Go!</button>
                  </span>

            </form>
            </div>
          </div>
        </div>
        

        <!-- MENU -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">

                <?php wp_nav_menu(['menu' => 'main-menu']); ?>

          </div>
        </div>


        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col">
                
                  <?php wp_list_categories(['title_li' => '']) ?>

              </div>
            </div>
          </div>
        </div>

        