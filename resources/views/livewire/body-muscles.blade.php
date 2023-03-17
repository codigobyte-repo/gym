<div>

    <div class="container">

        <!-- Breadcrumb -->
        <nav class="flex px-5 py-3 mt-6 text-gray-700 border border-gray-200 rounded-lg bg-gray-50"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <h1 class="inline-flex items-center text-base font-semibold text-black">
                        {{ ucfirst($musculo) }}
                    </h1>
                </li>
            </ol>
        </nav>



        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 my-12 gap-1">

            @foreach ($musculos as $musculo)
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:border-gray-200 flex flex-col justify-center items-center ">


                    <div class="px-6 my-4">
                        <div class="font-bold text-3xl text-gray-600 my-4">{{$musculo->titulo}}</div>
                    </div>

                    <div class="max-w-xl rounded overflow-hidden shadow-lg my-12">

                        <img class="w-full" src="{{$musculo->video}}" alt="{{$musculo->titulo}}" />

                        <div class="px-6 py-4">
                            Realización:
                            <p class="text-gray-700 text-lg">
                                {{$musculo->realizacion}}
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            Músculos implicados:
                            <p class="text-gray-700 text-lg">
                                {{$musculo->musculos_implicados}}
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            Comentarios:
                            <p class="text-gray-700 text-lg">
                                {{$musculo->comentarios}}
                            </p>
                        </div>


                    </div>


                </div>
            @endforeach

        </div>


    </div>

</div>