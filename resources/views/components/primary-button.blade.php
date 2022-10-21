<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2
    bg-gray-800 border border-black rounded-md font-semibold text-xs uppercase
    text-white hover:text-black
    tracking-widest hover:bg-transparent active:bg-gray-900
    focus:outline-none focus:border-gray-900 focus:ring ring-gray-300
    disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
