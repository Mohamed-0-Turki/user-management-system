<div class="relative z-50">
    <!-- Display success message -->
    @if (session('status'))
        <div class="message-container fixed top-4 left-4 max-w-sm w-full p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg shadow-lg flex items-center justify-between" role="alert">
            <div class="flex-1">
                <strong class="font-bold">Success:</strong>
                <span>{{ session('status') }}</span>
            </div>
            <button class="btn-close text-2xl font-bold text-green-700 hover:text-green-900 ml-4"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Display error message -->
    @if (session('error'))
        <div class="message-container fixed top-4 left-4 max-w-sm w-full p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg shadow-lg flex items-center justify-between" role="alert">
            <div class="flex-1">
                <strong class="font-bold">Error:</strong>
                <span>{{ session('error') }}</span>
            </div>
            <button class="btn-close text-2xl font-bold text-red-700 hover:text-red-900 ml-4"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Display info message -->
    @if (session('info'))
        <div class="message-container fixed top-4 left-4 max-w-sm w-full p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded-lg shadow-lg flex items-center justify-between" role="alert">
            <div class="flex-1">
                <strong class="font-bold">Info:</strong>
                <span>{{ session('info') }}</span>
            </div>
            <button class="btn-close text-2xl font-bold text-blue-700 hover:text-blue-900 ml-4"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Display warning message -->
    @if (session('warning'))
        <div class="message-container fixed top-4 left-4 max-w-sm w-full p-4 bg-yellow-100 border border-yellow-400 text-yellow-700 rounded-lg shadow-lg flex items-center justify-between" role="alert">
            <div class="flex-1">
                <strong class="font-bold">Warning:</strong>
                <span>{{ session('warning') }}</span>
            </div>
            <button class="btn-close text-2xl font-bold text-yellow-700 hover:text-yellow-900 ml-4"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="message-container fixed top-4 left-4 max-w-sm w-full p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg shadow-lg flex flex-col gap-2" role="alert">
            <div class="flex items-center justify-between mb-2">
                <strong class="font-bold">Error:</strong>
                <button class="btn-close text-2xl font-bold text-red-700 hover:text-red-900"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnClose = document.querySelectorAll('.btn-close');

        btnClose.forEach(button => {
            button.addEventListener('click', () => {
                // Find the closest message container and add 'hidden' class
                const messageContainer = button.closest('.message-container');
                if (messageContainer) {
                    messageContainer.classList.add('hidden');
                }
            });
        });
    });
</script>
