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
                                    <h2>5</h2>
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
                                    <h2>2</h2>
                                </div>
                            </div>
                            <div class="more-menuA">
                                <a href="{{route('admin.subscribers')}}"> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="cardA">
                            <div class="card-nameA">Toplam Ziyaretçi Sayısı :</div>
                            <div class="contentA">
                                <div class="iconA">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="numberA">
                                    <h2>121</h2>
                                </div>
                            </div>
                            <div class="more-menuA">
                                <a> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="col-lg-12">
                    <div class="card card-red">
                        <div class="card-header border-0">
                            <h3 class="card-title">En Çok Mesaj Gelenler</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Başlık</th>
                                    <th>Eklenme Sayısı</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>sdfgsdfg</td>
                                        <td>sdfgsdf</td>
                                        <td>sdfgsdfg</td>
                                        <td>fdhdfh</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
