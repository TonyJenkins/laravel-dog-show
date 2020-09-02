<div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">

    <div class="flex">
        <div class="w-1/2 my-auto">
            <h2 class="text-xl font-bold mb-2">
                {{ $dog -> name }}
            </h2>
            <p class="font-bold">
                {{ $dog -> breed }}
            </p>
            <p>
                Score: {{ $dog -> score }}
            </p>
            <p class="mt-4">
                Owner: {{ $dog -> owner }}
            </p>
        </div>
        <div class="w-1/4 my-auto">
            <img src="{{ $dog -> image_url () }}" />
        </div>
        <div class="w-1/4 my-auto">
            <div class="float-right">
                <p class="crud-button mb-2">
                    <i class="fas fa-dog"></i>
                </p>
                <p class="crud-button mb-2">
                    <i class="fas fa-edit"></i>
                </p>
                <p class="crud-button">
                    <i class="fas fa-dumpster"></i>
                </p>
            </div>
        </div>
    </div>
</div>
