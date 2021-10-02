@extends('admin.layouts.master')
@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ana Sayfa
        </h2>
    </div>
    </header>
    <!-- Page Content -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Veriler</h3>
                    </div>
                    <div class="card-body p-5" style="display: flex;">
                        <div class="cardA">
                            <div class="card-nameA">Toplam Mesaj Sayısı :</div>
                            <div class="contentA">
                                <div class="iconA">
                                    <i class="fas fa-atom fa-2x"></i>
                                </div>
                                <div class="numberA">
                                    <h2>{{$contacts->count()}}</h2>
                                </div>
                            </div>
                            <div class="more-menuA">
                                <a href="{{route('admin.messages')}}"> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="cardA">
                            <div class="card-nameA">Toplam Abone Sayısı :</div>
                            <div class="contentA">
                                <div class="iconA">
                                    <i class="fas fa-user-tag fa-2x"></i>
                                </div>
                                <div class="numberA">
                                    <h2>{{$subscribers->count()}}</h2>
                                </div>
                            </div>
                            <div class="more-menuA">
                                <a href="{{route('admin.subscribers')}}"> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                            </div>
                            <div class="more-menuA">
                                <a> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
