<button {{ $attributes->merge(['type' => 'submit', 'class' => 'm-1 py-2 px-4 text-center bg-[#F0CF1F] rounded-md text-gray-900 text-sm hover:bg-[#988938]']) }}>
    {{ $slot }}
</button>
