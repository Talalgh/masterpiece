@extends('admin.layout')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li style="color: rgb(243,97,0)">Dashboard</li>
            </ul>

        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title" style="color: rgb(243,97,0)">
                Dashboard
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3 style="color: rgb(243,97,0)">
                                Users
                            </h3>
                            <h1>
                                {{ $userCount }}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-green-500"><i
                                class="mdi mdi-account-multiple mdi-48px"></i></span>
                    </div>
                </div>
            </div>
<div class="card">
    <div class="card-content">
        <div class="flex items-center justify-between">
            <div class="widget-label">
                <h3 style="color: rgb(243,97,0)">
                    Coaches
                </h3>
                <h1>
                    {{$coachCount}}
                </h1>
            </div>
            <span style="color: red" class="icon widget-icon text-green-500">
                <i class="mdi mdi-account-multiple mdi-48px"></i>
            </span>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-content">
        <div class="flex items-center justify-between">
            <div class="widget-label">
                <h3 style="color: rgb(243,97,0)">
                    Gyms
                </h3>
                <h1>
                    {{$gymCount}}
                </h1>
            </div>
            <span style="color: navy" class="icon widget-icon text-green-500">
                <i class="mdi mdi-dumbbell mdi-48px"></i>
            </span>
        </div>
    </div>
</div>


        </div>

        {{-- <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-finance"></i></span>
          Performance
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="chart-area">
          <div class="h-full">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div></div>
              </div>
            </div>
            <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
          </div>
        </div>
      </div>
    </div> --}}
        {{--
    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Responsive table</b>
        </div>
      </div>
    </div> --}}
    <hr>
    <br>
    <form action="{{ '/admin' }}" method="GET">
        <input style="width: 40%;height: 40px;" type="search" class="form-control" placeholder=" Search Dashboard" aria-label="Search Dashboard"
            value="" name="name_users"> <span><button type="submit" style="border: 1px solid rgb(243,97,0); background-color: rgb(243,97,0); color: #fff; padding: 10px 15px; font-size: 16px; font-weight: bold; border-radius: 4px; cursor: pointer;">
                <i class="fas fa-search" style="margin-right: 5px;"></i>
            </button>
            </span>
        <br>
    </form>
    <br>
<hr>

        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title" style="color: rgb(243,97,0)">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Clients
                </p>

            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th style="color: rgb(243,97,0)">Image</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th style="color: rgb(243,97,0)">Name</th>
                            <th style="color: rgb(243,97,0)">Email</th>
                            <th style="color: rgb(243,97,0)">Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        @if ($user->img)
                                        <img style="height: 30px;width: 100px;border-radius: 30px" src="{{asset($user->img)}}" class="rounded-full">
                                        @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                                        @endif

                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{date('d-m-Y h-m', strtotime($user->created_at))}}</td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
@endsection
