<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ログイン画面') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg text-center ">
                <div class="p-6 bg-white border-b border-gray-200">
                    ログインしました。
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
