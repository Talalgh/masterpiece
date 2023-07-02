@extends('admin.layout')
@section('content')
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li style="color: rgb(243,97,0)">Review</li>
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
        <b  style="color: rgb(243,97,0)">Review</b>
      </div>
    </div>
  </div>
  <hr>
  <br>
  <form action="{{ route('reviews.index') }}" method="GET">
    <input style="width: 40%;height: 40px;" type="search" class="form-control" placeholder=" Search Dashboard" aria-label="Search Dashboard"
           value="" name="name_reviews">
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
      <p style="color: rgb(243,97,0)"  class="card-header-title">
        <span style="color: rgb(243,97,0)"  class="icon"><i class="mdi mdi-account-multiple"></i></span>
        Table-Review
          </p>
    </header>

    <div class="card-content">
      <table>
        <thead>
          <tr>
            <th style="color: rgb(243,97,0)" >Name</th>
            <th style="color: rgb(243,97,0)" >Review</th>
            <th style="color: rgb(243,97,0)" >created_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
               <tr>
                 <td>{{$review->name}}</td>
                 <td>{{$review->review}}</td>
                 <td>{{date('d-m-Y h-m', strtotime($review->created_at))}}</td>
                 <td></td>
                 <td></td>
                 <td class="actions-cell">
                   <div class="buttons right nowrap">

                     <form id="deleteForm-{{$review->id}}" action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: none;">
                       @csrf
                       @method('DELETE')
                     </form>
                     <button style="background-color: white;border: 1px solid rgb(243,97,0)" class="button small red --jb-modal" type="submit" form="deleteForm-{{$review->id}}">
                       <span style="color: rgb(243,97,0)" class="icon"><i class="mdi mdi-trash-can"></i></span>
                     </button>
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
