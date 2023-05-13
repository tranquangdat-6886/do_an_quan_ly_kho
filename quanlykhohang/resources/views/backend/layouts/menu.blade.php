  <!-- Sidebar Start -->
  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="./index.html" class="text-nowrap logo-img">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
              <ul id="sidebarnav">
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Home</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="/admin/dashboard" aria-expanded="false">
                          <span>
                              <i class="ti ti-layout-dashboard"></i>
                          </span>
                          <span class="hide-menu">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Quản Lý</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('product.index') }}" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Sản Phẩm</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('warehouse.index') }}" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu"> Kho Hàng</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('export.index') }}" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Xuất Kho</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('employee.index') }}" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Employees</span>
                      </a>
                  </li>
              </ul>

          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
