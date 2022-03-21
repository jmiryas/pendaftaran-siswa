<x-layout title="Daftar Siswa">
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Daftar Siswa
            </div>

            <div class="card-body" style="overflow-x:auto;">
                <table class="table table-hover" style="width: 140%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Kewarganegaraan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">SMP</th>
                            <th scope="col">Nama Ayah</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">Penghasilan Ortu</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $student->image) }}" width="100px">
                            </td>
                            <td>{{ $student->birth_place }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->nationality }}</td>
                            <td>{{ Str::limit($student->address, 25) }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->smp_name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->mother_name }}</td>
                            <td>{{ $student->parent_income }}</td>
                            <td>
                                <a href="/admin/students/{{ $student->id }}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="/admin/students/{{ $student->id }}" method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $students->links() }}
            </div>
        </div>
    </div>
</x-layout>