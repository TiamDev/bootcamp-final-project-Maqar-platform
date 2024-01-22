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
    {{-- <h2>{{ $message }}</h2> --}}
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
</body>

</html>
