@extends('layouts.app')

@section('content')
    <div id="app">
            @auth
                
            @endauth
            <div class="header">
                <div class="header__text">
                    <span class="empresa">EMPRESA</span>
                    <br>
                    <span class="dev">DEV</span>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        @guest
                        <button dusk="consult" type="submit" class="btn large btn-outline-success btn-lg align-top"  
                        data-toggle="modal" data-target="#exampleModal" id="schedule">FREE CONSULTATION</button>
                        @endguest
                    </div>
                </div>
                <div class="header__slogan">
                    Enterprise for the little guys
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-between">
                    
                    <home-card-component
                    image="./images/stock/student.jpg"
                    title="A Strong Web Presence"
                    body="Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quia tenetur alias, quo necessitatibus libero id ea nobis! Repellendus perspiciatis modi aspernatur obcaecati qui minus sit hic inventore, pariatur animi?"
                    ></home-card-component>

                    <home-card-component
                    image="./images/stock/mobile.jpg"
                    title="A convenient mobile experience"
                    body="Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quia tenetur alias, quo necessitatibus libero id ea nobis! Repellendus perspiciatis modi aspernatur obcaecati qui minus sit hic inventore, pariatur animi?"
                    ></home-card-component>

                    <home-card-component
                    image="./images/stock/office.jpg"
                    title="Improve business efficiency"
                    body="Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quia tenetur alias, quo necessitatibus libero id ea nobis! Repellendus perspiciatis modi aspernatur obcaecati qui minus sit hic inventore, pariatur animi?"
                    ></home-card-component>

                </div>
            </div>

            <div class="packages">
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <schedule-component>
                            @csrf
                        </schedule-component>
                      </div>
                    </div>
                  </div>
            </div>
        <div>
    </div>
@endsection

@section('captcha-api')
{{-- @guest
<script type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcAruUUAAAAALV38X-CU819a53imYHpYOnLTovt"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LcAruUUAAAAALV38X-CU819a53imYHpYOnLTovt', {action: 'homepage'}).then(function(token) {
    console.log(token)
    });
});
</script>
@endguest --}}
@stop
