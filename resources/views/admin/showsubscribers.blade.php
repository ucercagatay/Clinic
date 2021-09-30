@extends('admin.layouts.master')
@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Aboneler
        </h2>
    </div>
    </header>
    <!-- Page Content -->
        <div class="py-6">
            <div class="max-w-7xl mx-auto">
                <table class="table table-striped table-bordered">
                    <thead>
                 <tr>
                     <th>İd</th>
                     <th>Email</th>

                 </tr>
                    </thead>
                    <br>
                    <tbody>
                    @foreach($subscribers as $subscriber)
                      <tr>
                          <td>{{$subscriber->id}}</td>
                          <td>{{$subscriber->email}}</td>

                      </tr>
                        <br>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
@endsection

