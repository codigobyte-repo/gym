<div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center">

        <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input wire:model='seleccionarSexo' id="list-radio-license" type="radio" value="hombre" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hombre </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input wire:model='seleccionarSexo' id="list-radio-id" type="radio" value="mujer" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mujer</label>
                </div>
            </li>
        </ul>

        <div class="float-right sm:mt-6">
            <div class="flex items-center">
                <span class="flex w-3 h-3 bg-red-600 rounded-full"></span>
                <p class="text-gray-700 font-light text-sm ml-1">Músculo grande</p>
            </div>

            <div class="flex items-center">
                <span class="flex w-3 h-3 bg-orange-600 rounded-full"></span>
                <p class="text-gray-700 font-light text-sm ml-1">Músculo mediano</p>
            </div>

            <div class="flex items-center">
                <span class="flex w-3 h-3 bg-orange-500 rounded-full"></span>
                <p class="text-gray-700 font-light text-sm ml-1">Músculo chico</p>
            </div>
        </div>
    
    </div>

    
    @if ($seleccionarSexo == 'hombre')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 m-20">

            <div>
                <x-body-man-frontal></x-body-man-frontal>
            </div>
            <div>
                <x-body-man-dorso></x-body-man-dorso>
            </div>

        </div>

    @elseif($seleccionarSexo == 'mujer')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 m-20">
            <div>
                <x-body-woman-frontal></x-body-woman-frontal>
            </div>
            <div>
                <x-body-woman-dorso></x-body-woman-dorso>
            </div>
        </div>

    @endif
    

</div>
