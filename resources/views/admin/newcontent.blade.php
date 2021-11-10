@extends('admin.layouts.master')
@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            YENİ İÇERİK
        </h2>
    </div>
    </header>
<div class="py-6">
    <div class="max-w-7xl mx-auto">
        <form action="{{Route('admin.updateContent',$contents->id)}}" method="post">
            @csrf
            <label>İsim</label>
            <input type="text" name="name" value="{{$contents->name}}"> <br>
            <label>Title</label>
            <input type="text" name="title" value="{{ $contents->title}}" ><br>
            <label>İçerik</label> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik1}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik2}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik3}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik4}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik5}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik6}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik7}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik8}}</textarea> <br>
            <textarea style="width:240px; height: 240px;" class="input100" name="icerik" >{{$contents->icerik9}}</textarea> <br>
            <button class="btn btn-primary" type="submit">Güncelle</button>

        </form>
    </div>
</div>













@endsection
