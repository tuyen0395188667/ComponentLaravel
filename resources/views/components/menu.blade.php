<div>
    <ul {{ $attributes }}>
        @foreach($menus as $item)
        <li><a href="#">{{ $item }}</a></li>
        @endforeach
    </ul>
    <!-- echo slot -->
    {{ $subUi ?? null }} <!-- ?? Nếu có slot sẽ in ra, không có sẽ null-->
</div>