@if(session('error'))
    <div id="error-message" class="bg-red-100 text-red-700 p-4 rounded-md mb-4 opacity-100 transition-opacity duration-500">
        <strong>error!</strong> {{ session('error') }}
    </div>

    <script>
        // Set a timeout to fade out and hide the error message after 5 seconds
        setTimeout(function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.classList.remove('opacity-100');
                errorMessage.classList.add('opacity-0');
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 500); // Delay to allow fade-out effect
            }
        }, 5000); // 5000ms = 5 seconds
    </script>
@endif