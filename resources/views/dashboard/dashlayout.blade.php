<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    <title>dashboard-RTL</title>
  </head>
  <body>
    <div id="vue-app" :class="showSideNav ? 'sidenav-visible' : 'sidenav-hidden'">
      <!-- Wrapper around top navbar and sidenav -->
      <header>
        <div class="top-navbars">
          <!-- Fixed top navbar -->
          <div class="navbar-fixed" v-show="! showSearchNav">
            <nav>
              <div class="nav-wrapper ">
                <a href="#" class="brand-logo center">مجموعة التاج</a>
                <!-- right section's icons - top navbar -->
                <ul class="right topnav-right-items">
                  <li class="right">
                    <a @click="toggleSideNav"><i class="material-icons">menu</i></a>
                  </li>
                  <li class="right">
                  </li>
                </ul>
                <!-- end of right section - top navbar -->
                <!-- left section's icons - top navbar -->
                <ul>
                  <!-- user menu for top navbar -->
                  <li 	class="user-menu">
                      <a href="#" @click="toggleUserDropdownMenu" @blur="showUserDropdownMenu = false">

                      </a>
                      <ul class="user-dropdown-menu dropdown-content" :class="{'user-dropdown-menu-visible': showUserDropdownMenu}">
                        <li>
                          <a href="#!">
                            <i class="material-icons">account_circle</i>
                            <span>Profile</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <i class="material-icons">settings</i>
                            <span>Setting</span>
                          </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#!">
                            <i class="material-icons">power_settings_new</i>
                            <span>Log Out</span>
                          </a>
                        </li>
                      </ul>
                  </li>
                  <!-- End of user menu - top navbar -->
                  <!-- Other likns in right section of top navbar -->
                  {{-- <li>
                    <a href="#">
                      <i class="material-icons">notifications</i>
                      <span class="badge-navbar">7</span>
                    </a>
                  </li>
                  <li class="hide-on-small-only">
                    <a href="#">
                      <i class="material-icons">lock</i>
                    </a>
                  </li> --}}
                </ul>
                <!-- end of left section - top navbar -->
              </div>
            </nav>
          </div>
          <!-- End of fixed top navbar -->

          <!-- Search navbar -->
          {{-- <div class="navbar-search" v-show="showSearchNav">
            <nav>
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons" @click="toggleSearchNav">close</i>
                  </div>
                </form>
              </div>
            </nav>
          </div> --}}
          <!-- End of search navbar -->
        </div>
        <!-- End of top-navbars -->

        <!-- Main sidebar -->
        <aside>
          <ul class="side-nav fixed right-aligned">
            <li>
              <div class="userView">
                <div class="background">
                  <img src="{{ asset('images/sidebar-top-bg.jpg') }}">
                </div>
                <a href="#!user"><img class="circle" src="{{ asset('images/icon-1.webp') }}"></a>
                <a href="#!name"><span class="white-text name">شركه التاج</span></a>
                <a href="#!email"><span class="white-text email">لوحه التحكم</span></a>
              </div>
            </li>

            {{-- <li><a href="#!"><i class="">cloud</i>First Link With Icon</a></li> --}}
            <li><a  href="{{ asset('/create') }}"> اضافة بيانات القسم</a></li>
            <li><a  href="{{ asset('category') }}"> اقسام الصفحه الرئيسيه</a></li>
            <li><a  href="{{ asset('about/create') }}">الاعمال </a></li>
            <li><a href="{{ asset('why/create') }}">صفحه لماذا نحن</a></li>
            <li><a href="{{ asset('product/create') }}">صفحه المنتجات </a></li>
            <li><a href="{{ asset('news/create') }}">صفحه الاخبار</a></li>
            <li><a href="{{ asset('contact/show') }}">صفحه بيانات التواصل</a></li>
            <li><a  href="{{ asset('contact_info') }}">بيانات المستخدم المدخله</a></li>
            {{-- <li><a  href="{{ asset('card/create') }}">من بطاقه نحن</a></li> --}}
            <li><div class="divider"></div></li>
            {{-- <li><a class="subheader">Subheader</a></li> --}}
            {{-- <li><a  href="{{ asset('/create') }}">Third Link With Waves</a></li> --}}
            {{-- <li><a  href="{{ asset('counter/create') }}">Third Link With Waves</a></li> --}}


            {{-- <li><a  href="{{ asset('/create') }}"> اضافة بيانات القسم</a></li> --}}
          </ul>
        </aside>
        <!-- End of main sidebar -->
        <div class="overlay" v-if="showSideNav" @click="toggleSideNav"></div>
      </header>
      <!-- End of header wrapper -->


   <section>

    @yield('dashcontent')
</section>


</div>
<!-- End of vue-app -->

<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
<script src="{{ asset('js/dash.js') }}" charset="utf-8"></script>
</body>
</html>
