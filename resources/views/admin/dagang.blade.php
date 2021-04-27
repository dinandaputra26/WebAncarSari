<x-template-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
            <div class="grid grid-cols-12">
                <div class="col-span-5 px-4 py-1 ">
                    <a href="{{route('dagang.create')}}"><button type="button" class="btn btn-outline-primary btn-sm">Tambah Data</button></a>
                    <button type="button" class="btn btn-outline-success btn-sm">Kirim Data</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">Hapus Data</button>
                </div>
                <div class="col-span-6 loat-right">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-dark">search</button>
                    </div>
                </div>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="text-lg text-left">
                        <th>Tandai</th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Photo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($tampilandagang as $item)
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>{{$no}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <img src="{{asset('storage/'.$item->photo)}}" class="w-20" alt="">
                        </td>
                    </tr><?php $no++; ?>
                    @endforeach

                    <!-- More people... -->
                </tbody>
            </table>

        </div>
    </div>
</x-template-layout>