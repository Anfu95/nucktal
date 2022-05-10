<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart color="white" size="30"/>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>    
            </span>
        </x-slot>

        <x-slot name="content">
            <p class="text-center text-gray-700">
                No tiene agregado ningún item en el carrito
            </p>
        </x-slot>
    </x-jet-dropdown>

</div>
