<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Companent View</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div id="wrapper">
        <div class="top">
            @php
                $topMenues = [
                    'Home',
                    'About',
                    'News',
                    'Product',
                    'Services',
                ];
            @endphp
            <x-menu class="x-menu" :menus="$topMenues"></x-menu> 
        </div>
        <div class="left">LEFT
            @php
                $leftMenues = [
                    'Laptop',
                    'Desktop',
                    'Mobile',
                    'Watch',
                    'Printer',
                ];
            @endphp
            <x-menu class="y-menu" :menus="$leftMenues">
                <!-- Ta dùng thẻ x-slot để thêm list mà không cần viết trong Component -->
                <x-slot name="subUi">
                <ol>
                    <li>Ttem 1</li>
                    <li>Ttem 2</li>
                    <li>Ttem 3</li>
                    <li>Ttem 4</li>
                </ol>
                </x-slot>
            </x-menu>
        </div>
        <div class="center">CENTER</div>
        <div class="right">RIGHT</div>
        <div class="footer">FOOTER</div>
    </div>
    
</body>
</html>