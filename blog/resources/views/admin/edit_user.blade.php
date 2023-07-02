<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="../../assest/css/main.css?v=1628755089081">
  <link rel="stylesheet" href="../../assest/css/main.css?v=1628755089081">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="../../assest/image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="../../assest/image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

    <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
          <a class="navbar-item mobile-aside-button">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
          </a>

        </div>
        <div class="navbar-brand is-right">
          <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
          </a>
        </div>
        <div class="navbar-menu" id="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item dropdown has-divider">
              <a class="navbar-link">
                </span>
              </a>

            </div>
            <div class="navbar-item dropdown has-divider has-user-avatar">
              <a class="navbar-link">
                  <div class="user-avatar">
                      <i style="color: rgb(243,97,0)" class="fas fa-user"></i>
                    </div>


                <span style="color: rgb(243,97,0)"  class="icon"><i class="mdi mdi-chevron-down"></i></span>
              </a>
              <div class="navbar-dropdown">
                <a href="{{route('profile-admin.index')}}" class="navbar-item">
                  <span style="color: rgb(243,97,0)"  class="icon"><i class="mdi mdi-account"></i></span>
                  <span style="color: rgb(243,97,0)" >Profile</span>
                </a>
                {{-- <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-settings"></i></span>
                  <span>Settings</span>
                </a>
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-email"></i></span>
                  <span>Messages</span>
                </a> --}}
                <hr class="navbar-divider">
                <a style="color: rgb(243,97,0)"  class="navbar-item" href="{{route('logout')}}">
                  <span style="color: rgb(243,97,0)"  class="icon"><i class="mdi mdi-logout"></i></span>
                  <span style="color: rgb(243,97,0)" >Log Out</span>
                </a>
              </div>
            </div>
            {{-- log out dont forget add sesion to log out    --}}
            <a title="Log out" class="navbar-item desktop-icon-only" href="{{route('logout')}}">
              <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-logout"></i></span>
              <span style="color: rgb(243,97,0)" >Log out</span>
            </a>
          </div>
        </div>
      </nav>

<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools" >
      <div>
        <p style="color: rgb(243,97,0);margin-left: 0px;font-size: 20px;font-weight: bold" >G Y M -<span style="color: white;font-weight: normal;font-size: 17px;font-weight: 700"> Dashboard</span></p>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class="active">
          <a href="{{route('Admin.index')}}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
        <li class="--set-active-profile-html">
            <a href="{{route('contact-admin.index')}}">
              <span class="icon mdi mdi-email"></span>
              <span class="menu-item-label">Contact Massage</span>
            </a>
          </li>
          <li class="--set-active-profile-html">
            <a href="{{route('review-admain.index')}}">
              <span class="icon mdi mdi-email"></span>
              <span class="menu-item-label">Reviews</span>
            </a>
          </li>
      </ul>
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
        <li class="--set-active-tables-html">
          <a href="{{route('table-admin.index')}}">
            <span class="icon"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label" >Table user</span>
          </a>
        </li>
        <li class="--set-active-tables-html">
          <a href="{{route('Table-coaches.index')}}">
            <span class="icon"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label" >Tables Coaches</span>
          </a>
        </li>
        <li class="--set-active-tables-html">
            <a href="{{route('gyms.index')}}">
              <span class="icon"><i class="mdi mdi-table"></i></span>
              <span class="menu-item-label" >Tables gyms</span>
            </a>
          </li>

        {{-- <li class="--set-active-profile-html">
          <a href="{{route('profile-admin.index')}}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label" >Profile</span>
          </a>
        </li> --}}
        <li class="--set-active-profile-html">
          <a href="{{route('add_coaches.create')}}">
            <span class="icon mdi mdi-account-plus"></span>
            <span class="menu-item-label">Add-Coaches</span>
          </a>
        </li>
        <li class="--set-active-profile-html">
          <a href="{{route('add-gym.index')}}">
            <span class="icon mdi mdi-account-plus"></span>
            <span class="menu-item-label">Add-gym</span>
          </a>
        </li>
        {{-- <li>
          <a href="login.html">
            <span class="icon"><i class="mdi mdi-lock"></i></span>
            <span class="menu-item-label">Login</span>
          </a>
        </li> --}}
        {{-- <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Submenus</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Sub-item One</span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Sub-item Two</span>
              </a>
            </li>
          </ul>
        </li>
      </ul> --}}
      {{-- <p class="menu-label">About</p> --}}

    </div>
  </aside>
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li style="color: rgb(243,97,0)">Forms</li>
            </ul>

        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title" style="color: rgb(243,97,0)">
                Forms
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p style="color: rgb(243,97,0)" class="card-header-title">
                    <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('table-admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label"></label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control icons-left">
                                    <input class="input" type="text" placeholder="Name" style="width: 40%"
                                        name="name" value="{{ $user->name }}">
                                    <span style="color: rgb(243,97,0)" class="icon left"><i class="mdi mdi-account"></i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control icons-left icons-right">
                                    <input style="width: 40%" class="input" type="email" placeholder="Email"
                                        name="email" value="{{ $user->email }}">
                                    <span style="color: rgb(243,97,0)" class="icon left"><i class="mdi mdi-mail"></i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control icons-left icons-right">
                                    <input style="width: 40%" class="input" type="password" placeholder="new password"
                                        name="password" value="{{ $user->password }}">
                                    <span style="color: rgb(243,97,0)" class="icon left"><i class="fas fa-lock"></i>
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
            <div class="field">
                <div class="field-body">
                    <div class="field">
                        <div class="field addons">
                            <p class="help"></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field">
                    <label class="label" style="color: rgb(243,97,0)">Image</label>
                    <div class="control">
                        <input class="input" type="file" placeholder="e.g. Partnership opportunity" style="width: 40%"
                            name="img" value="{{ $user->img }}">
                    </div>
                </div>
                <br>

                <br>
                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button "
                            style="background-color: rgb(243,97,0);margin-left: 30px;border: 1px solid white;color: white;font-weight: bold">
                            Submit
                        </button>
                    </div>
                </div>
                <br>
                </form>
            </div>
        </div>


    </section>
<footer class="footer">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
      <div class="flex items-center justify-start space-x-3">
        <div>

        </div>


      </div>


      <a href="https://justboil.me">
        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="100" viewBox="0 0 250 100" class="w-auto h-8">

        </svg>
      </a>
    </div>
  </footer>

  <div id="sample-modal" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Sample modal</p>
      </header>
      <section class="modal-card-body">
        <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
        <p>This is sample modal</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <button class="button red --jb-modal-close">Confirm</button>
      </footer>
    </div>
  </div>

  <div id="sample-modal-2" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Sample modal</p>
      </header>
      <section class="modal-card-body">
        <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
        <p>This is sample modal</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <button class="button blue --jb-modal-close">Confirm</button>
      </footer>
    </div>
  </div>

  </div>

  <!-- Scripts below are for demo only -->
  <script type="text/javascript" src="../../assest/js/main.min.js?v=1628755089081"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <script type="text/javascript" src="../../assest/js/chart.sample.min.js"></script>


  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '658339141622648');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

  <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

  </body>
  </html>

