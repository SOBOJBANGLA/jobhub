<header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="toggle-icon">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
       
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <input class="form-control" type="text" placeholder="Search for anything">
          <div class="position-absolute top-50 translate-middle-y search-close-icon">
            <ion-icon name="close-outline"></ion-icon>
          </div>
        </form>


        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link mobile-search-button" href="javascript:;">
                <div class="">
                  <ion-icon name="search-outline"></ion-icon>
                </div>
              </a>
            </li>
            <li>
            <p class="pt-3" style="color: goldenrod;"><?php echo $user_first_name.' '.$user_last_name ?> 
            </li>&nbsp;&nbsp;
            <li><a href="logout.php" class="text-white text-decoration-none btn btn-primary py-1 m-0">
								Logout
							</a></li>
                
              </ul>
            </li>

          

        </div>
      </nav>
    </header>