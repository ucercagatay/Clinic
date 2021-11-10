</div>
</div>
<div id="sidebar">
    <ul class="sidebar-head">
        <a><li><img id="logo-img"  src="{{ asset('admin/adminpanel/admin-images/logo.png') }}"><h2>Panel</h2> </li></a>
    </ul>
    <ul>
        <a href="{{route('admin.panel')}}"><li><i class="fas fa-home fa-2x"></i> <a href="{{route('admin.panel')}}">Ana sayfa</a>  </li></a>
        <a href="{{route('admin.messages')}}"><li><i class="fas fa-envelope fa-2x"></i> <a href="{{route('admin.messages')}}">Mesajlar</a> </li></a>
        <a href="{{route('admin.subscribers')}}"><li><i class="fas fa-user fa-2x"></i> <a href="{{route('admin.subscribers')}}"> Aboneler</a>  </li></a>
        <a href="{{route('admin.editContent')}}"><li><i class="fas fa-edit fa-2x"></i> <a href="{{route('admin.editContent')}}"> İçerikleri Düzenle</a>  </li></a>

    </ul>
</div>

</body>
