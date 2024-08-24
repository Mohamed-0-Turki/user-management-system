<header class="w-full h-[85px] py-5 px-16 border-b-2 border-gray-200 flex items-center shadow-lg shadow-orange-200">
    <nav class="w-full flex items-center justify-between">
        <h1 class="flex items-center gap-3 text-2xl">
            <i class="fa-solid fa-users text-blue-700"></i>
            <span class="capitalize font-medium text-gray-800">user management system</span>
        </h1>
        <ul class="flex items-center gap-10">
            <li class="text-xl hover:text-blue-900 duration-150 ease-in-out capitalize">
                <a href="{{ route('users.index') }}">home</a>
            </li>
            <li class="text-xl hover:text-blue-900 duration-150 ease-in-out capitalize">
                <a href="{{ route('users.create') }}">add user</a>
            </li>
        </ul>
    </nav>
</header>
