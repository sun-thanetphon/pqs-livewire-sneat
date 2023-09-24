  <!-- Menu -->
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
          <a class="app-brand-link">
              <span class="app-brand-logo demo">

                  <img width="80" height="80" src="../assets/img/illustrations/fleet.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">{{config('app.name')}}</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">

          <!-- Dashboard -->
          <livewire:slidebars.menu menuName="Dashboard" routeName="dashboard" />
          <!-- Exam-manager -->
          <livewire:slidebars.menu menuName="Exam Manager" routeName="exam-manager" />
          <!-- Home -->
          <livewire:slidebars.menu menuName="Home" routeName="home" />


          <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Admin</span>
          </li>
          <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                          <div data-i18n="Account">Account</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                          <div data-i18n="Notifications">Notifications</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                          <div data-i18n="Connections">Connections</div>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                  <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                          <div data-i18n="Basic">Login</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                          <div data-i18n="Basic">Register</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                          <div data-i18n="Basic">Forgot Password</div>
                      </a>
                  </li>
              </ul>
          </li>





  </aside>
  <!-- / Menu -->