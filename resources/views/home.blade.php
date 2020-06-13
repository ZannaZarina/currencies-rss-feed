<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<header>
    <h4 class="text-center mt-4">
        Last update: {{ $allCurrencies[0]->date }}
    </h4>
</header>

<body style="background-color: #effaff">
    <div class="row d-flex justify-content-center">
        {{ $allCurrencies->links() }}
    </div>

    <table class="table w-25 mx-auto text-center" >
        <thead>
            <tr style="background-color: #d6e8f4">
                <th></th>
                <th>Currency</th>
                <th>Rate</th>
            </tr>
        </thead>

        <tbody>
        @foreach($allCurrencies as $currency)
            <tr >
                <td>
                    <a href="{{ route('history', $currency) }}">
                        <img src="https://fxtop.com/ico/{{ $currency->currency }}.gif" alt="flag icon">
                    </a>
                </td>
                <td>
                    <a href="{{ route('history', $currency) }}" style="color:#00288e;">
                        {{ $currency->currency }}</a>
                </td>
                <td>{{ $currency->rate }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        {{ $allCurrencies->links() }}
    </div>

</body>

