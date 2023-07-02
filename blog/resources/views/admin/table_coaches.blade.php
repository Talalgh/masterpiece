@extends('admin.layout')
@section('content')
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li style="color: rgb(243,97,0)">Tables</li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title" style="color: rgb(243,97,0)">
       Table
    </h1>
  </div>
</section>

<section class="section main-section">
  <div style="background-color: rgb(31,41,55)" class="notification ">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
      <div>
        <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-account-multiple"></i></span>
        <b  style="color: rgb(243,97,0)">Coaches</b>
      </div>
    </div>
  </div>
  <hr>
  <br>
  <form action="{{ '/Table-coaches' }}" method="GET">
    <input style="width: 40%;height: 40px;" type="search" class="form-control" placeholder=" Search Dashboard" aria-label="Search Dashboard"
           value="" name="name_users">
    <span>
      <button type="submit" style="border: 1px solid rgb(243,97,0); background-color: rgb(243,97,0); color: #fff; padding: 10px 15px; font-size: 16px; font-weight: bold; border-radius: 4px; cursor: pointer;">
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
        <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-account-multiple"></i></span>
        Table-coaches
          </p>
    </header>

    <div class="card-content">
      <table>
        <thead>
          <tr>
            <th style="color: rgb(243,97,0)">Image</th>
            <th></th>
            <th></th>
            <th style="color: rgb(243,97,0)">Name</th>
            <th style="color: rgb(243,97,0)">Email</th>
            <th style="color: rgb(243,97,0)">Created</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td class="image-cell">
              <div class="image">
                @if ($user->img)
                <img style="height: 30px;width: 100px;border-radius: 30px" src="{{asset('images/' . $user->img)}}" class="rounded-full">
                @else
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                @endif
              </div>
            </td>
            <td></td>
            <td></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{date('d-m-Y h-m', strtotime($user->created_at))}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <a style="background-color: white;border: 1px solid rgb(243,97,0)" href="{{ route('Table-coaches.edit', ['Table_coach' => $user->id]) }}" class="button small blue --jb-modal" type="button">
                  <span  style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-pencil"></i></span>
                </a>
                <button style="background-color: white;border: 1px solid rgb(243,97,0)" class="button small red --jb-modal" type="submit" form="deleteForm-{{$user->id}}">
                  <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
                <form id="deleteForm-{{$user->id}}" action="{{ route('Table-coaches.destroy', ['Table_coach' => $user->id]) }}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection
