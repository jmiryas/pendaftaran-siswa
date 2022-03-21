<x-layout title="Pendaftaran Siswa">
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Pendaftaran Siswa
            </div>

            <div class="card-body">
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-form.input label="Nama" name="name" placeholder="Masukkan nama" />

                    <x-form.input label="Tempat Lahir" name="birth_place" placeholder="Masukkan tempat lahir" />

                    <div class="mb-3 datepicker">
                        <x-form.input label="Tanggal Lahir" name="dob" placeholder="Tempat lahir" />
                    </div>

                    <x-form.input label="Kewarganegaraan" name="nationality" placeholder="Masukkan kewarganegaraan" />

                    <x-form.textarea label="Alamat" name="address" placeholder="Masukkan alamat" />

                    <x-form.input label="Email" name="email" placeholder="Masukkan email" type="email" />

                    <x-form.input label="No. HP" name="phone_number" placeholder="Masukkan no hp" type="number" />

                    <x-form.input label="Nama SMP" name="smp_name" placeholder="Masukkan nama SMP" />

                    <x-form.input label="Nama Ayah" name="father_name" placeholder="Masukkan nama ayah" />

                    <x-form.input label="Nama Ibu" name="mother_name" placeholder="Masukkan nama ibu" />

                    <x-form.input label="Penghasilan Orang Tua" name="parent_income"
                        placeholder="Masukkan penghasilan orang tua" type="number" />

                    <x-form.input label="Foto Siswa" name="image" placeholder="Masukkan foto siswa" type="file" />

                    <button type="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>