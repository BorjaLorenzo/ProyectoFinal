<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= asset('img/trabajadores.jpg'); ?>" alt="">
                        <div class="card-body">
                          <p class="card-text"><a type="button" class="btn btn-primary" href="<?= url('menu_trabajadores')?>"><b>TRABAJADORES</b></a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= asset('img/incidencias.jpg'); ?>" alt="">
                        <div class="card-body">
                          <p class="card-text"><a type="button" class="btn btn-primary" href="<?= url('menu_incidencias')?>"><b>INCIDENCIAS</b></a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= asset('img/limpieza.jpg'); ?>" alt="">
                        <div class="card-body">
                          <p class="card-text"><a type="button" class="btn btn-primary" href="<?= url('menu_limpieza')?>"><b>LIMPIEZA</b></a></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row"><p></p><p></p></div>

                  <div class="row">
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= asset('img/mareas.jpg'); ?>" alt="">
                        <div class="card-body">
                          <p class="card-text"><a type="button" class="btn btn-primary" href="<?= url('menu_mareas')?>"><b>MAREAS</b></a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
