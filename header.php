<nav class="navbar  navbar-expand-lg bg-dark">
        <div class="container">
          <a class="navbar-brand text-white"
           href="<?php echo getUrl()?>">
            <h1>NoahFashion</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse flex-grow-0 navbar-collapse" id="navbarSupportedContent">
            
            <form class="d-flex " role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
              
            </form>
            <a href="<?php echo getUrl("?action=cart")?>" class="mx-2 text-warning text-decoration-none position-relative">
                <i class="fa-2x fa-solid fa-cart-shopping"></i><?php if(isset($_SESSION['carts']))
                {?>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php echo getCartCount()?></span>
                <?php }
                ?>
            </a>
              <?php 
              if(!isset($_SESSION['user']))
              { ?>
                    <a href="javascript:" class="mx-2 text-warning" data-bs-toggle="modal" 
                    data-bs-target="#registerModal">
                    <i class="fa-solid fa-2x fa-right-to-bracket"></i>
                    </a>

              <?php }
              else
              { ?>
                
                <div class="dropdown dropstart">
                 <a href=""  data-bs-toggle="dropdown">
                 <i class="fa-solid fa-2x fa-user text-warning" ></i>
                 </a>
                  <ul class="dropdown-menu">
                    <li>
                    <a  href="<?php echo getUrl("?action=profile")?>" class="dropdown-item">
                    My Profile
                </a>
                    </li>
                    <li><a class="dropdown-item" 
                    href="<?php echo getUrl("logout.php")?>">Logout</a></li>
                  </ul>
                </div>
              <?php }
              ?>
            
          </div>
        </div>
      </nav>