<x-layout title="Edit Siswa">
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Edit Siswa - {{ $student->name }}
            </div>

            <div class="card-body">
                <form action="/admin/students/{{ $student->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <x-form.input label="Nama" name="name" placeholder="Masukkan nama" :value="$student->name" />

                    <x-form.input label="Tempat Lahir" name="birth_place" placeholder="Masukkan tempat lahir"
                        :value="$student->birth_place" />

                    <div class="mb-3 datepicker">
                        <x-form.input label="Tanggal Lahir" name="dob" placeholder="Tanggal lahir"
                            :value="$student->dob" />
                    </div>

                    <x-form.input label="Kewarganegaraan" name="nationality" placeholder="Masukkan kewarganegaraan"
                        :value="$student->nationality" />

                    <x-form.textarea label="Alamat" name="address" placeholder="Masukkan alamat">
                        {{ $student->address }}
                    </x-form.textarea>

                    <x-form.input label="Email" name="email" placeholder="Masukkan email" type="email"
                        :value="$student->email" />

                    <x-form.input label="No. HP" name="phone_number" placeholder="Masukkan no hp" type="text"
                        :value="$student->phone_number" />

                    <x-form.input label="Nama SMP" name="smp_name" placeholder="Masukkan nama SMP"
                        :value="$student->smp_name" />

                    <x-form.input label="Nama Ayah" name="father_name" placeholder="Masukkan nama ayah"
                        :value="$student->father_name" />

                    <x-form.input label="Nama Ibu" name="mother_name" placeholder="Masukkan nama ibu"
                        :value="$student->mother_name" />

                    <x-form.input label="Penghasilan Orang Tua" name="parent_income"
                        placeholder="Masukkan penghasilan orang tua" type="number" :value="$student->parent_income" />

                    <img src="{{ asset('storage/' . $student->image) }}" class="rounded float-start mb-2" width="100"
                        alt="Foto siswa" />

                    <x-form.input label="" name="image" placeholder="Masukkan foto siswa" type="file" />

                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>