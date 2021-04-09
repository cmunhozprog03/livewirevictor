<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <x-table>

            <div class="px-6 py-4">
                {{-- <inputtype="text"wire:model="search"> --}} 
                <x-jet-input placeholder="Burcar..." class="w-full" type="text" wire:model="search" />
            </div>

            @if ($posts->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('id')">
                            ID
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif
                                
                            @else
                                <i class="fa fa-sort float-right mt-1"></i>
                            @endif
                            
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('title')">
                            Title
                            @if ($sort == 'title')
                                @if ($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif
                                
                            @else
                                <i class="fa fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('content')">
                            Content
                            @if ($sort == 'content')
                                @if ($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif
                                
                            @else
                                <i class="fa fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                    <tr>
                        
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $post->id }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $post->title }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <div class="text-sm text-gray-900">
                                {{ $post->content }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                   

                    <!-- More items... -->
                </tbody>
            </table>
            @else
                <div class="px-6 py-4">
                    Não há nenhum registro
                </div>
            @endif
           
        </x-table>

    </div>



</div>
