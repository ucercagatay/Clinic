@extends('admin.layouts.master')
@section('content')
        <!-- Page Content -->
        <div class="py-6">
            <div class="max-w-7xl mx-auto">
               <table class="table table-striped table-bordered">
                   <thead>
                   <tr>
                       <th>İd</th>
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
                       <td>{{$contact->id}}</td>
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
                                <button type="submit">Sil</button>
                            </form></td>
                   </tr>

                   <br>
                   @endforeach
                   </tbody>
               </table>

            </div>
        </div>
@endsection
