@extends('layouts.home')
@section('content')
<div class="inicial">
    <div class="bmj">
        <div class="credito">
            <h1>
                CRÉDITO PARA <br> ACELERAR SEUS <br>
            </h1>
            <div class="sonho">
                <h1>SONHOS</h1>
            </div>
        </div>
        <div class="contrate">
            <h1>
                <span class="menor">Contrate agora o</span>
                <span class="maior"> BMJ <br> CONSIGNADO</span>
                <span class="menor">e pague a <br></span>
                <span class="medio">1ª parcela só daqui a 90 dias</span>
            </h1>
        </div>
        <div class="next-page">
            <a href="">
                <img src="{{ url('assets/img/next.png') }}" alt="">
                <div class="ver">
                    <h1>VER PRÓXIMA PÁGINA</h1>
                </div>
            </a>
        </div>
    </div>
    <div class="homem">
        <div>
            <img src="assets/img/homem.png" alt="">
        </div>
    </div>
    <div class="balao">
        <img src="assets/img/bgmen.png" alt="">
    </div>
</div>
@endsection
