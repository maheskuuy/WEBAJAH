@extends('layouts.app')

@section('pages', 'Pengumuman')
@section('judul', 'Meja Pengumuman')

@section('content')
<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>Judul Pengumuman</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Judul Pengaduan </th>
                  <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Lokasi</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Kategori</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div>
                        <img src="{{ asset('img/team-2.jpg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 leading-normal text-sm">Pengajian</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">@gayusluplup</p>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 font-semibold leading-tight text-xs">Depan Gerja</p>
                    <p class="mb-0 leading-tight text-xs text-slate-400">jl.Ahmad Yani</p>
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="font-semibold leading-tight text-xs text-slate-400">Event</span>
                  </td>
                  <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">penting</span>
                  </td>
                  
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="{{('detail_pengumuman')}}" class="font-semibold leading-tight text-xs text-slate-400"> Aksi </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div
        class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div
          class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
        >
          <div class="flex flex-wrap -mx-3">
            <div
              class="flex items-center flex-none w-1/2 max-w-full px-3"
            >
              <h6 class="mb-0">Buat Pengumuman</h6>
            </div>
            <div class="flex-none w-1/2 max-w-full px-3 text-right">
              <a
                class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                href="{{('pengumuman')}}"
              >
                <i class="fas fa-plus" > </i>&nbsp;&nbsp;Tambah
                Pengumuman</a
              >
              
            </div>
          </div>
        </div>
        <div class="flex-auto p-4 justify-center">
          <div class="flex flex-wrap -mx-3 justify-center">
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
              <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                <div class="flex-auto p-6">
                  <div class="mb-4">
                    <form action="/pengumuman" method="POST" role="form text-left">
                      @csrf
                    <input 
                    name="judul_pengumuman"
                    type="text"
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                    placeholder="Judul Pengumuman"
                    aria-label="Name"
                    aria-describedby="email-addon"
                    />
                  </div>
                  <div class="flex space-x-4">  
                    <div class="flex mb-4">
                      <div class="w-1/2 mr-4">
                        <select
                        name="kategori"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        aria-label="Kategori"
                            aria-describedby="email-addon"
                          >
                            <option value="">Pilih Kategori</option>
                            <option value="Acara">Acara</option>
                            <option value="Berita">Berita</option>
                            <option value="Waspada">Waspada</option>
                          </select>
                        </div>
                        <div class="w-1/2 mr-4">
                          <select
                            name="status"
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                            aria-label="Status"
                            aria-describedby="email-addon"
                          >
                            <option value="">Pilih Status</option>
                            <option value="Formal">Formal</option>
                            <option value="Penting">Penting</option>
                            <option value="Sangat Penting">Sangat Penting</option>
                          </select>
                        </div>
                      </div>
                      <div class="w-1/2">
                        <input
                          name="image"
                          type="file"
                          class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                          accept="image/*"
                        />
                      </div>
                    </div>
                    <div class="mb-4">
                      <input
                        name="deskripsi"
                        type="text"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Deskripsi"
                        aria-label="Name"
                        aria-describedby="email-addon"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        name="detail_isi"
                        type="text"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Detail Isi"
                        aria-label="Name"
                        aria-describedby="email-addon"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        name="detail_lokasi"
                        type="text"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Lokasi"
                        aria-label="Name"
                        aria-describedby="email-addon"
                      />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit
                      </button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
@endsection