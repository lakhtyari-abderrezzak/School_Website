@if(session('success'))
    <div id="success-message" class="bg-green-100 text-green-700 p-4 rounded-md mb-4 opacity-100 transition-opacity duration-500">
        <strong>Success!</strong> {{ session('success') }}
    </div>

    <script>
        // Set a timeout to fade out and hide the success message after 5 seconds
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.classList.remove('opacity-100');
                successMessage.classList.add('opacity-0');
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 500); // Delay to allow fade-out effect
            }
        }, 5000); // 5000ms = 5 seconds
    </script>
@endif

