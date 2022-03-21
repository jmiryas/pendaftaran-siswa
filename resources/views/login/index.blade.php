<x-layout title="Admin Login">
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Admin Login
            </div>

            <div class="card-body">
                <form action="/admin/login" method="POST">
                    @csrf

                    <x-form.input label="Email" name="email" placeholder="Masukkan email" type="email" />

                    <x-form.input label="Email" name="password" placeholder="Masukkan password" type="password" />

                    <button type="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>