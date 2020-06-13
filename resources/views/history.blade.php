<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<header>
    <div class="d-flex justify-content-center mt-4">
        <img src="https://fxtop.com/ico/{{ $currencyRates[0]->currency }}.gif" alt="flag icon" style="height:100%">
        <h4>{{ $currencyRates[0]->currency}}</h4>
    </div>
</header>

<body style="background-color: #effaff">
    <table class="table w-50 mx-auto text-center" >
        <thead>
            <tr style="background-color: #d6e8f4">
                @for ($i = count($currencyRates) - 1; $i >= 0; $i--)
                <th> {{ $currencyRates[$i]->date }} </th>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr >
                @for ($i = count($currencyRates) - 1; $i >= 0; $i--)
                <td>{{ $currencyRates[$i]->rate }}</td>
                @endfor
            </tr>
        </tbody>
    </table>

    <div class="row justify-content-center">
        <a href="{{ route('home') }}"
           class="btn-md active btn btn-light">
            Go back
        </a>
    </div>
</body>


