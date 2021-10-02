@extends('admin.layouts.master')
@section('content')
    <div style="display: none;">
        @php
            $number=1;
        @endphp
    </div>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mesajlar
        </h2>
    </div>
    </header>
    <!-- Page Content -->
        <div class="py-6">
            <div class="max-w-7xl mx-auto">

               <table class="table table-striped table-bordered">
                   <thead>
                   <tr>
                       <th>Adet</th>
                       <th>İsim</th>
                       <th>Soyisim</th>
                       <th>Email</th>
                       <th>Telefon Numarası</th>
                       <th>Bilgi Türü</th>
                       <th>Mesaj</th>
                       <th>Gönderim Tarihi</th>
                       <th>Eylemler</th>
                   </tr>
                   </thead>
                   <br>

                   <tbody>

                   @foreach($contacts as $contact)

                   <tr>
                       <td><h6>
                               {{$number}}

                           </h6></td>
                       <td>{{$contact->name}}</td>
                       <td>{{$contact->surname}}</td>
                       <td>{{$contact->email}}</td>
                       <td>{{$contact->phoneNumber}}</td>
                       <td>{{$contact->option}}</td>
                       <td>{{$contact->message}}</td>
                       <td>{{$contact->created_at}}</td>
                        <td>
                            <form method="post" action="{{route('admin.messages.post')}}" >
                                <!-- here the '1' is the id of the post which you want to delete -->
                                @csrf
                                <input type="hidden" name="delete" value="{{$contact->id}}">
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Sil</button>
                            </form></td>
                   </tr>

                   <br>
                       {{$number++}}
                   @endforeach
                   </tbody>
               </table>

            </div>
        </div>
@endsection
