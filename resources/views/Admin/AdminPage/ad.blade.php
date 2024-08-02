@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col">

            <!-- Tableau pour afficher les marques -->
            <div class="w-full h-full flex flex-col gap-4">
                <table class="table-auto border-collapse border border-slate-400">
                    <thead class=" bg-gray-200">
                    <tr class="">
                        <th class="border border-slate-300 p-4 max-w-xs">Nom</th>
                        <th class="border border-slate-300 p-4 max-w-xs">image</th>
                        <th class="border border-slate-300 p-4 max-w-xs">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($advertisements as $advertisement)
                        <tr class="py-4">
                            <td class="border border-slate-300 p-4 truncate max-w-xs">{{ $advertisement->name }}</td>
                            <td class="border border-slate-300 p-4 truncate max-w-xs">{{ $advertisement->image }}</td>
                            <td class="border border-slate-300 max-w-xs">
                                <form action="{{ route('Advertisement.destroy', $advertisement->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full p-4 h-full bg-red-300">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
