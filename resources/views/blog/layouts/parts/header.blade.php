         <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
               <div class="navbar-header">
                  <a id="mobile_btn" href="javascript:void(0);">
                  <span class="bar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                  </span>
                  </a>
                  <a href="{{ route('blog') }}" class="navbar-brand logo">
                  <img src="../blog/assets/img/logo.png" class="img-fluid" alt="Logo">
                  </a>
               </div>
               <div class="main-menu-wrapper">
                  <div class="menu-header">
                     <a href="index.html" class="menu-logo">
                     <img src="blog/assets/img/logo.png" class="img-fluid" alt="Logo">
                     </a>
                     <a id="menu_close" class="menu-close" href="javascript:void(0);">
                     <i class="fas fa-times"></i>
                     </a>
                  </div>
                  <ul class="main-nav">
                     <li class="has-submenu active">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                           <li><a href="blog-list.html">Blog List</a></li>
                           <li class="active"><a href="blog-grid.html">Blog Grid</a></li>
                           <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                     </li>
                     <li class="login-link">
                        <a href="{{ route('admin-login') }}">Login / Signup</a>
                     </li>
                  </ul>
               </div>
               <ul class="nav header-navbar-rht">
                  <li class="nav-item contact-item">
                     <div class="header-contact-img">
                        <i class="far fa-hospital"></i>
                     </div>
                     <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +1 315 369 5943</p>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link header-login" href="{{ route('admin-login') }}">login / Signup </a>
                  </li>
               </ul>
            </nav>
         </header>