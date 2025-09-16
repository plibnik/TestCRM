<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management App — Test task (in progress)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- лінк вище -- просто знайшов зі зразку, я розумію, що в ідеалі треба було б додати його в депенденсіз, але час! -->
</head>
<body>
<table>
    <!-- тут буде набір навігації фіксованої, а потім я заюзаю блейди, які я бачив у Ларакасті, з кнопками з підсвіткою активного шляху
    (блоку сторінок типу) /companies, /orders окремим кольором. Але зараз HTML-костиль, швидко, грубо, погано, працює -->
    <tr>
        <td> <a href="/">На головну</a> </td>
    </tr>

</table>
<div class="container mt-5">
    @yield('content')
</div>
</body>
</html>
