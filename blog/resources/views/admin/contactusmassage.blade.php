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
        <div class="">
            @foreach ($contacts as $contact)
                <div class="card">
                    <div class="card-content">
                        <div class="flex items-center justify-between">
                            <div class="widget-label">
                                <span style="color: rgb(0, 0, 0)class="icon widget-icon text-green-500">
                                    <i class="mdi mdi-account-multiple mdi-48px"></i>
                                </span>
                                <h3 style="color: rgb(243,97,0)">
                                    Comment
                                </h3>
                                <h1>
                                    {{$contact->name}}
                                </h1>
                                <br>
                                <h2>
                                    {{$contact->email}}
                                </h2>
                                <br>
                                <p style="color: rgb(243,97,0)">comment:</p>
                                <p style="max-height: 100px; overflow: hidden; text-overflow: ellipsis; width: auto; font-size: 12px; text-align: center">
                                    {{$contact->comment}}
                                </p>
                            </div>
                            <button style="background-color: white; border: 1px solid rgb(243,97,0);width: 60px;height: 60px;" class="button small red --jb-modal" type="submit" form="deleteForm-{{$contact->id}}">
                                <span style="color: rgb(243,97,0);width: 60px;height: 55px;" class="icon"><i class="mdi mdi-trash-can"></i></span>
                            </button>
                            <form id="deleteForm-{{$contact->id}}" action="{{ route('contact-admin.destroy', $contact->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
