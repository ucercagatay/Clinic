@extends('admin.layouts.master')
@section('content')




    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            İçerikler
        </h2>
    </div>
    </header>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>İsim</th>
                    <th>Başlık</th>
                    <th>Yazı1</th>
                    <th>Yazı2</th>
                    <th>Yazı3</th>
                    <th>Yazı4</th>
                    <th>Yazı5</th>
                    <th>Yazı6</th>
                    <th>Yazı7</th>
                    <th>Yazı8</th>
                    <th>Yazı9</th>
                    <th>Eylemler</th>
                </tr>
                </thead>
                   <tbody>
                   @foreach($contents as $content)

                 <tr>
                     <td>{{$content->name}}</td>
                     <td>{{$content->title}}</td>
                     <td>{{$content->icerik1}}</td>
                     <td>{{$content->icerik2}}</td>
                     <td>{{$content->icerik3}}</td>
                     <td>{{$content->icerik4}}</td>
                     <td>{{$content->icerik5}}</td>
                     <td>{{$content->icerik6}}</td>
                     <td>{{$content->icerik7}}</td>
                     <td>{{$content->icerik8}}</td>
                     <td>{{$content->icerik9}}</td>
                     <td>
                         <form method="post" action="{{route('admin.deleteContent')}}" >
                             <!-- here the '1' is the id of the post which you want to delete -->
                             @csrf
                             <input type="hidden" name="delete" value="{{$content->id}}">
                             <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Sil</button>
                         </form>
                         <a href="{{Route('admin.newcontent',$content->id)}}" class="btn btn-primary" ><i class="fas fa-edit-alt"></i>Güncelle</a>
                     </td>
                 </tr>

                   @endforeach
                   </tbody>





            </table>








@endsection
