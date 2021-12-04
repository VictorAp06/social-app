@extends('app.structure.layout.master')

@section('content')

    <div class="app-body">

        @if(View::exists('app.structure.layout.navbar'))
            @include('app.structure.layout.navbar')
        @endif

        <main class="main">

            <div class="" id="app" :class="{'loading': loading}">
                <div class="modals">
                    <v-dialog/>
                </div>
                <div>
                    <notifications position="bottom right" :duration="5000"/>
                </div>

                @yield('body')
            </div>
        </main>
    </div>
@endsection

@section('bottom-scripts')
    @parent
@endsection