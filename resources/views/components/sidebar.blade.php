<!-- Muốn thêm thuộc tính ta dùng merge(['name']) -->
<div {{ $attributes->merge(['class' => 'class-test']) }}>
    <h3>Sidebar Component</h3>
    <!-- Hiểm thị Component được thêm cố định -->
    <p>{{ $title }}</p>
    <!-- Hiểm thị Component được thêm cố động -->
    <p>Email: {{$email}}</p>

    <!-- Lấy dữ liệu Component ở trong Sidebar, mỗi lần sẽ láy ra được 1 user-->
    @foreach($user('Do trong E') as $user)
        <p><small>{{ $user }}</small></p>
    @endforeach
</div>