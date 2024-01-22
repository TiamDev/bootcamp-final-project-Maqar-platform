<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>

<body dir="rtl">
    <h3>بيانات الحجز</h3>
    <table>
        <tr>
            <th style="text-align: start">حالة الحجز</th>
            <td>{{ $reply->state->title }}</td>
        </tr>
        <tr>
            <th style="text-align: start">تاريخ البداية</th>
            <td>{{ $reply->start_date }}</td>
        </tr>
        <tr>
            <th style="text-align: start">تاريخ النهاية</th>
            <td>{{ $reply->end_date }}</td>
        </tr>
        <tr>
            <th style="text-align: start">المقر</th>
            <td>{{ $reply->workspaceOffer->workspace->provider->title }}</td>
        </tr>
        <tr>
            <th style="text-align: start">المكتب</th>
            <td>{{ $reply->workspaceOffer->workspace->title }}</td>
        </tr>

    </table>
    <h3>الفاتورة </h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col" class="bg-total">#</th>
                <th scope="col" class="w-75 bg-total">اسم الخدمة</th>
                <th scope="col" class="bg-total">السعر
                    ({{ $reply->workspaceOffer->workspace->provider->currency }})</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPrice = floatval($reply->officPrice);
                $counter = 1;
            @endphp

            <tr>
                <th scope="row">{{ $counter }}</th>
                <td>{{ $reply->workspaceOffer->workspace->title }}</td>
                <td>{{ $reply->officPrice }}</td>
            </tr>
            @foreach ($reply->orders as $order)
                <tr>
                    <th scope="row">{{ ++$counter }}</th>
                    <td>{{ $order->service->name }}</td>
                    <td>{{ $order->service->price }}</td>
                </tr>
                @php
                    $totalPrice += floatval($order->service->price);
                @endphp
            @endforeach


        </tbody>
        <tfoot class="total">
            <th colspan="2 " class="fs-5 bg-total">الاجمالي</th>
            <th class="darkColor bg-total fs-4">{{ $totalPrice }}</th>
        </tfoot>
    </table>
</body>

</html>
